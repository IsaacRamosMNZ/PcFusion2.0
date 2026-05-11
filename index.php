<?php
require_once 'config.php';
require_once 'catalogo.php';

$page_title = 'Home';
$style_file = 'style.css';

$catalogo = pc_fusion_catalogo($conn);
$totalPecas = pc_fusion_total_pecas($catalogo);
$e = fn($valor) => htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');

include 'header.php';
?>

  <main class="home-page">
    <section id="home" class="hero-section">
      <div class="hero-content">
        <p class="eyebrow">PC Fusion</p>
        <h1>Monte seu PC com visual de loja e lógica de compatibilidade.</h1>
        <p class="hero-subtitle">Catálogo organizado, filtros rápidos e configurador para evitar erro de socket, RAM, fonte e gabinete antes da compra.</p>
        <div class="cta-buttons">
          <a href="build.php" class="btn btn-primary">
            <i class="fas fa-screwdriver-wrench"></i>
            Montar PC
          </a>
          <a href="pecas.php" class="btn btn-secondary">
            <i class="fas fa-microchip"></i>
            Ver peças
          </a>
        </div>
      </div>
      <div class="hero-product">
        <img src="LogoPc.jpg" alt="Logo PC Fusion">
        <div class="hero-product-info">
          <span>Catálogo ativo</span>
          <strong><?php echo $totalPecas; ?> peças</strong>
          <small><?php echo count($catalogo); ?> categorias para comparar</small>
        </div>
      </div>
    </section>

    <section class="quick-categories" aria-label="Categorias principais">
      <?php foreach (array_slice($catalogo, 0, 8, true) as $categoriaNome => $categoria): ?>
        <a href="pecas.php?categoria=<?php echo rawurlencode($categoriaNome); ?>" class="category-tile">
          <i class="fas <?php echo $e(pc_fusion_icone_categoria($categoriaNome, $categoria)); ?>"></i>
          <span><?php echo $e($categoriaNome); ?></span>
          <strong><?php echo count($categoria['pecas']); ?></strong>
        </a>
      <?php endforeach; ?>
    </section>

    <section class="features">
      <article class="feature-card">
        <i class="fas fa-check-circle"></i>
        <h2>Compatibilidade em tempo real</h2>
        <p>O configurador confere socket, tipo de memória, consumo estimado, espaço de GPU e formato do gabinete.</p>
      </article>
      <article class="feature-card">
        <i class="fas fa-filter"></i>
        <h2>Filtro de peças corrigido</h2>
        <p>Busque por nome, categoria, descrição ou especificação, com categorias rápidas e resultado atualizado na hora.</p>
      </article>
      <article class="feature-card">
        <i class="fas fa-bolt"></i>
        <h2>Builds rápidas</h2>
        <p>Gere uma configuração aleatória coerente para estudar combinações e partir de uma base mais segura.</p>
      </article>
    </section>
  </main>

<?php include 'footer.php'; ?>
