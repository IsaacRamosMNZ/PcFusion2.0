<?php
require_once 'config.php';
require_once 'catalogo.php';

$page_title = 'Peças';
$style_file = 'style.css';
$extra_css = 'styles3.css';
$extra_js = 'script-pecas.js';

$catalogo = pc_fusion_catalogo($conn);
$totalPecas = pc_fusion_total_pecas($catalogo);
$totalCategorias = count($catalogo);
$e = fn($valor) => htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
$categoriaInicial = $_GET['categoria'] ?? 'all';
$buscaInicial = $_GET['busca'] ?? '';
$orcamentoInicial = $_GET['orcamento'] ?? 'all';
$ordenacaoInicial = $_GET['ordenar'] ?? 'relevancia';

if ($categoriaInicial !== 'all' && !isset($catalogo[$categoriaInicial])) {
    $categoriaInicial = 'all';
}

if (!in_array($orcamentoInicial, ['all', '300', '600', '1000'], true)) {
    $orcamentoInicial = 'all';
}

if (!in_array($ordenacaoInicial, ['relevancia', 'preco-asc', 'preco-desc', 'nome-asc'], true)) {
    $ordenacaoInicial = 'relevancia';
}

include 'header.php';
?>

  <div id="modal" class="modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-titulo">
    <div class="modal-content">
      <button class="close" type="button" aria-label="Fechar detalhes">&times;</button>
      <p id="modal-categoria" class="modal-category"></p>
      <h2 id="modal-titulo"></h2>
      <div id="modal-descricao"></div>
    </div>
  </div>

  <main class="catalog-page">
    <section
      id="pecas"
      class="catalog-shell"
      data-initial-category="<?php echo $e($categoriaInicial); ?>"
      data-initial-search="<?php echo $e($buscaInicial); ?>"
      data-initial-budget="<?php echo $e($orcamentoInicial); ?>"
      data-initial-sort="<?php echo $e($ordenacaoInicial); ?>"
    >
      <div class="catalog-hero">
        <div class="catalog-hero-content">
          <p class="eyebrow">Catálogo PC Fusion</p>
          <h2>Peças para montar, comparar e escolher sem dor de cabeça.</h2>
          <p>Componentes organizados por categoria, com busca rápida e detalhes técnicos para você montar um PC gamer, workstation ou setup completo.</p>
          <div class="catalog-metrics" aria-label="Resumo do catálogo">
            <span><strong><?php echo $totalPecas; ?></strong> peças</span>
            <span><strong><?php echo $totalCategorias; ?></strong> categorias</span>
            <span><strong>DDR4/DDR5</strong> compatível</span>
          </div>
        </div>
        <div class="catalog-hero-card" aria-hidden="true">
          <img src="LogoPc.jpg" alt="">
          <div>
            <span>PC Fusion</span>
            <strong>Vitrine técnica</strong>
          </div>
        </div>
      </div>

      <div class="catalog-toolbar">
        <div class="search-wrapper">
          <i class="fas fa-search"></i>
          <input id="pecas-search" type="search" value="<?php echo $e($buscaInicial); ?>" placeholder="Buscar por peça, categoria ou especificação..." aria-label="Buscar peças" autocomplete="off">
        </div>

        <div class="category-filters" aria-label="Filtrar por categoria">
          <button class="filter-chip <?php echo $categoriaInicial === 'all' ? 'active' : ''; ?>" type="button" data-filter="all">Todos</button>
          <?php foreach ($catalogo as $categoriaNome => $categoria): ?>
            <button class="filter-chip <?php echo $categoriaInicial === $categoriaNome ? 'active' : ''; ?>" type="button" data-filter="<?php echo $e($categoriaNome); ?>">
              <?php echo $e($categoriaNome); ?>
              <span><?php echo count($categoria['pecas']); ?></span>
            </button>
          <?php endforeach; ?>
        </div>

        <div class="catalog-controls">
          <div class="budget-filters" aria-label="Filtrar por orçamento">
            <button class="budget-chip <?php echo $orcamentoInicial === 'all' ? 'active' : ''; ?>" type="button" data-budget="all">Qualquer preço</button>
            <button class="budget-chip <?php echo $orcamentoInicial === '300' ? 'active' : ''; ?>" type="button" data-budget="300">Até R$ 300</button>
            <button class="budget-chip <?php echo $orcamentoInicial === '600' ? 'active' : ''; ?>" type="button" data-budget="600">Até R$ 600</button>
            <button class="budget-chip <?php echo $orcamentoInicial === '1000' ? 'active' : ''; ?>" type="button" data-budget="1000">Até R$ 1.000</button>
          </div>

          <label class="sort-control" for="sort-pecas">
            <span>Ordenar</span>
            <select id="sort-pecas" aria-label="Ordenar peças">
              <option value="relevancia" <?php echo $ordenacaoInicial === 'relevancia' ? 'selected' : ''; ?>>Relevância</option>
              <option value="preco-asc" <?php echo $ordenacaoInicial === 'preco-asc' ? 'selected' : ''; ?>>Menor preço</option>
              <option value="preco-desc" <?php echo $ordenacaoInicial === 'preco-desc' ? 'selected' : ''; ?>>Maior preço</option>
              <option value="nome-asc" <?php echo $ordenacaoInicial === 'nome-asc' ? 'selected' : ''; ?>>Nome A-Z</option>
            </select>
          </label>
        </div>
      </div>

      <div id="active-results" class="results-count">
        Mostrando <?php echo $totalPecas; ?> peças cadastradas.
      </div>

      <div class="pecas-container">
        <?php foreach ($catalogo as $categoriaNome => $categoria): ?>
          <?php if (count($categoria['pecas']) === 0) {
              continue;
          } ?>
          <?php $icone = pc_fusion_icone_categoria($categoriaNome, $categoria); ?>
          <section class="categoria" data-category="<?php echo $e($categoriaNome); ?>">
            <div class="categoria-header">
              <div>
                <span class="categoria-icon"><i class="fas <?php echo $e($icone); ?>"></i></span>
                <div>
                  <h3><?php echo $e($categoriaNome); ?></h3>
                  <p><?php echo $e($categoria['descricao'] ?? 'Componentes selecionados para seu setup.'); ?></p>
                </div>
              </div>
              <span class="badge"><?php echo count($categoria['pecas']); ?> itens</span>
            </div>

            <div class="cards">
              <?php foreach ($categoria['pecas'] as $peca): ?>
                <?php
                  $nome = $peca['nome'] ?? '';
                  $descricao = $peca['descricao'] ?? '';
                  $specs = $peca['especificacoes'] ?? '';
                  $preco = $peca['preco'] ?? '';
                  $precoMinimo = pc_fusion_preco_minimo($preco);
                  $faixaPreco = pc_fusion_faixa_preco($precoMinimo);
                  $textoBusca = trim($nome . ' ' . $categoriaNome . ' ' . $descricao . ' ' . $specs . ' ' . $preco);
                ?>
                <article
                  class="card"
                  tabindex="0"
                  role="button"
                  data-name="<?php echo $e($nome); ?>"
                  data-category="<?php echo $e($categoriaNome); ?>"
                  data-description="<?php echo $e($descricao); ?>"
                  data-specs="<?php echo $e($specs); ?>"
                  data-price="<?php echo $e($preco); ?>"
                  data-price-min="<?php echo $precoMinimo !== null ? $precoMinimo : ''; ?>"
                  data-tier="<?php echo $e($faixaPreco['slug']); ?>"
                  data-search="<?php echo $e($textoBusca); ?>"
                >
                  <div class="card-top">
                    <div class="card-icon">
                      <i class="fas <?php echo $e($icone); ?>"></i>
                    </div>
                    <span class="price-tier <?php echo $e($faixaPreco['slug']); ?>"><?php echo $e($faixaPreco['label']); ?></span>
                  </div>
                  <h4><?php echo $e($nome); ?></h4>
                  <?php if ($descricao): ?>
                    <p class="description"><?php echo $e($descricao); ?></p>
                  <?php endif; ?>
                  <?php if ($specs): ?>
                    <p class="specs"><?php echo $e($specs); ?></p>
                  <?php endif; ?>
                  <div class="card-footer">
                    <?php if ($preco): ?>
                      <span class="price"><?php echo $e($preco); ?></span>
                    <?php else: ?>
                      <span class="price muted">Preço sob consulta</span>
                    <?php endif; ?>
                    <button class="btn-details" type="button">
                      Detalhes <i class="fas fa-arrow-right"></i>
                    </button>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </section>
        <?php endforeach; ?>
      </div>

      <div id="no-results" class="no-results" hidden>
        <i class="fas fa-search"></i>
        <h3>Nenhuma peça encontrada</h3>
        <p>Limpe a busca ou escolha outra categoria para ver mais componentes.</p>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
