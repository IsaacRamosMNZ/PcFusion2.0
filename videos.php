<?php
require_once 'config.php';

$page_title = 'Vídeos';
$style_file = 'style.css';
$extra_css = 'styles2.css';

$categorias_videos = [
    'Montagem' => ['icon' => 'fa-screwdriver-wrench', 'desc' => 'Passo a passo para montar, organizar cabos e evitar erros comuns.'],
    'Reviews' => ['icon' => 'fa-chart-line', 'desc' => 'Análises de peças, desempenho e custo-benefício.'],
    'Dicas' => ['icon' => 'fa-lightbulb', 'desc' => 'Escolhas inteligentes para comprar melhor e gastar menos.'],
];

$videos_por_categoria = [];
foreach (array_keys($categorias_videos) as $cat) {
    $query = "SELECT * FROM videos WHERE categoria = ? ORDER BY data_criacao DESC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $cat);
    $stmt->execute();
    $result = $stmt->get_result();
    $videos_por_categoria[$cat] = [];

    while ($video = $result->fetch_assoc()) {
        $videos_por_categoria[$cat][] = $video;
    }
    $stmt->close();
}

$fallback_videos = [
    'Montagem' => [
        ['titulo' => 'Como montar um PC básico', 'url_youtube' => 'O9845EjK7o0', 'descricao' => 'Roteiro para começar sem pular etapas importantes.'],
        ['titulo' => 'Montagem gamer passo a passo', 'url_youtube' => '6uVbxr09DBE', 'descricao' => 'Sequência completa para montar uma build gamer.'],
    ],
    'Reviews' => [
        ['titulo' => 'Review de placa-mãe gamer', 'url_youtube' => 'uGwIQbuxb4Y', 'descricao' => 'Pontos para olhar antes de comprar uma placa-mãe.'],
        ['titulo' => 'Review de GPU custo-benefício', 'url_youtube' => 'Zewu3lViWdk', 'descricao' => 'Como avaliar FPS, consumo e preço real.'],
    ],
    'Dicas' => [
        ['titulo' => 'Como escolher fonte e RAM', 'url_youtube' => 'FT998-Piwjg', 'descricao' => 'Margem de fonte, DDR4, DDR5 e upgrades.'],
        ['titulo' => 'SSD e armazenamento sem erro', 'url_youtube' => 'Du9pEDc08Mo', 'descricao' => 'NVMe, SATA e escolhas para PC barato.'],
    ],
];

foreach ($videos_por_categoria as $cat => $videos) {
    if (count($videos) === 0) {
        $videos_por_categoria[$cat] = $fallback_videos[$cat];
    }
}

$total_videos = array_reduce($videos_por_categoria, fn($total, $videos) => $total + count($videos), 0);
$e = fn($valor) => htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');

include 'header.php';
?>

  <main class="video-page">
    <section id="videos" class="video-shell">
      <div class="video-hero">
        <div>
          <p class="eyebrow">Central de aprendizado</p>
          <h1>Vídeos para montar melhor e comprar com mais calma.</h1>
          <p>Separei montagem, reviews e dicas em uma vitrine mais limpa, do jeito que combina com o visual da Home.</p>
        </div>
        <div class="video-hero-panel">
          <i class="fas fa-circle-play"></i>
          <strong><?php echo $total_videos; ?> vídeos</strong>
          <span>organizados por categoria</span>
        </div>
      </div>

      <div class="video-tabs">
        <?php $index = 0; ?>
        <?php foreach ($categorias_videos as $categoria => $meta): ?>
          <?php $tab_id = 'video-tab-' . $index; ?>
          <input type="radio" name="video-tabs" id="<?php echo $e($tab_id); ?>" <?php echo $index === 0 ? 'checked' : ''; ?>>
          <label for="<?php echo $e($tab_id); ?>">
            <i class="fas <?php echo $e($meta['icon']); ?>"></i>
            <?php echo $e($categoria); ?>
            <span><?php echo count($videos_por_categoria[$categoria]); ?></span>
          </label>
          <?php $index++; ?>
        <?php endforeach; ?>

        <?php $index = 0; ?>
        <?php foreach ($categorias_videos as $categoria => $meta): ?>
          <section class="video-panel" data-panel="<?php echo $index; ?>">
            <div class="panel-heading">
              <div>
                <p class="eyebrow"><?php echo $e($categoria); ?></p>
                <h2><?php echo $e($meta['desc']); ?></h2>
              </div>
            </div>
            <div class="video-grid">
              <?php foreach ($videos_por_categoria[$categoria] as $video): ?>
                <article class="video-card">
                  <div class="video-frame">
                    <iframe
                      src="https://www.youtube.com/embed/<?php echo $e($video['url_youtube']); ?>"
                      title="<?php echo $e($video['titulo']); ?>"
                      loading="lazy"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      allowfullscreen>
                    </iframe>
                  </div>
                  <div class="video-info">
                    <span><?php echo $e($categoria); ?></span>
                    <h3><?php echo $e($video['titulo']); ?></h3>
                    <?php if (!empty($video['descricao'])): ?>
                      <p><?php echo $e($video['descricao']); ?></p>
                    <?php endif; ?>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </section>
          <?php $index++; ?>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
