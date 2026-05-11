<?php
// header.php - Header reutilizável para todas as páginas
$current_page = basename($_SERVER['PHP_SELF']);
$nav_items = [
    ['href' => 'index.php', 'icon' => 'fa-house', 'label' => 'Home'],
    ['href' => 'build.php', 'icon' => 'fa-screwdriver-wrench', 'label' => 'Montar PC'],
    ['href' => 'pecas.php', 'icon' => 'fa-microchip', 'label' => 'Peças'],
    ['href' => 'videos.php', 'icon' => 'fa-circle-play', 'label' => 'Vídeos'],
    ['href' => 'desenvolvedores.php', 'icon' => 'fa-users', 'label' => 'Nós'],
];

if (!function_exists('pc_fusion_asset')) {
    function pc_fusion_asset(string $path): string
    {
        $cleanPath = strtok($path, '?') ?: $path;
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $cleanPath);

        if (is_file($filePath)) {
            $separator = strpos($path, '?') !== false ? '&' : '?';
            $path .= $separator . 'v=' . filemtime($filePath);
        }

        return htmlspecialchars($path, ENT_QUOTES, 'UTF-8');
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' - ' . SITE_NAME : SITE_NAME; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="<?php echo pc_fusion_asset(isset($style_file) ? $style_file : 'style.css'); ?>">
  <link rel="stylesheet" href="<?php echo pc_fusion_asset('menu.css'); ?>">
  <?php if(isset($extra_css)): ?>
    <link rel="stylesheet" href="<?php echo pc_fusion_asset($extra_css); ?>">
  <?php endif; ?>
</head>
<body>
  <header>
    <div class="header-container">
      <img src="LogoPc.jpg" alt="Logo do PC Fusion" class="logo">
      <a class="brand" href="index.php" aria-label="Ir para a home do PC Fusion">
        <span>PC Fusion</span>
        <small>seletor de hardware</small>
      </a>
      <button class="hamburger" onclick="toggleMenu()" aria-controls="nav-menu" aria-expanded="false" aria-label="Abrir menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <nav id="nav-menu">
      <?php foreach ($nav_items as $item): ?>
        <a href="<?php echo htmlspecialchars($item['href']); ?>" class="<?php echo $current_page === $item['href'] ? 'active' : ''; ?>">
          <i class="fas <?php echo htmlspecialchars($item['icon']); ?>"></i>
          <span><?php echo htmlspecialchars($item['label']); ?></span>
        </a>
      <?php endforeach; ?>
    </nav>
  </header>
