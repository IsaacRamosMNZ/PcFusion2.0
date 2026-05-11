<?php
require_once 'config.php';

$page_title = 'Desenvolvedores';
$style_file = 'style.css';
$extra_css = 'styles4.css';

$query = "SELECT * FROM desenvolvedores ORDER BY id";
$result = $conn->query($query);
$desenvolvedores = [];

if ($result) {
    while ($dev = $result->fetch_assoc()) {
        $desenvolvedores[] = $dev;
    }
}

$e = fn($valor) => htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');

include 'header.php';
?>

  <main class="dev-page">
    <section id="desenvolvedores" class="dev-shell">
      <div class="dev-hero">
        <div>
          <p class="eyebrow">Equipe PC Fusion</p>
          <h1>Quem está montando essa experiência por trás da tela.</h1>
          <p>Uma área mais limpa para apresentar os desenvolvedores, com foco no projeto e nos canais de contato.</p>
        </div>
        <div class="dev-hero-panel">
          <i class="fas fa-code"></i>
          <strong><?php echo count($desenvolvedores); ?> devs</strong>
          <span>trabalhando no site</span>
        </div>
      </div>

      <?php if (count($desenvolvedores) > 0): ?>
        <div class="dev-container">
          <?php foreach ($desenvolvedores as $dev): ?>
            <article class="dev-card">
              <div class="dev-photo-wrap">
                <img src="<?php echo $e($dev['foto']); ?>" alt="Foto de <?php echo $e($dev['nome']); ?>" class="dev-photo">
              </div>
              <div class="dev-info">
                <span><?php echo $e($dev['funcao'] ?: 'Desenvolvedor'); ?></span>
                <h2><?php echo $e($dev['nome']); ?></h2>
                <p><?php echo $e($dev['descricao']); ?></p>
              </div>
              <div class="social-links" aria-label="Links de <?php echo $e($dev['nome']); ?>">
                <?php if (!empty($dev['facebook'])): ?>
                  <a href="<?php echo $e($dev['facebook']); ?>" target="_blank" rel="noopener" aria-label="Facebook de <?php echo $e($dev['nome']); ?>">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                <?php endif; ?>

                <?php if (!empty($dev['whatsapp'])): ?>
                  <a href="https://wa.me/<?php echo $e($dev['whatsapp']); ?>" target="_blank" rel="noopener" aria-label="WhatsApp de <?php echo $e($dev['nome']); ?>">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                <?php endif; ?>

                <?php if (!empty($dev['github'])): ?>
                  <a href="<?php echo $e($dev['github']); ?>" target="_blank" rel="noopener" aria-label="GitHub de <?php echo $e($dev['nome']); ?>">
                    <i class="fab fa-github"></i>
                  </a>
                <?php endif; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="empty-devs">
          <i class="fas fa-users"></i>
          <h2>Nenhum desenvolvedor cadastrado ainda</h2>
          <p>Cadastre a equipe no banco para essa seção aparecer completa.</p>
        </div>
      <?php endif; ?>
    </section>
  </main>

<?php include 'footer.php'; ?>
