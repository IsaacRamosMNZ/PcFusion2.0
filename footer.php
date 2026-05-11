<?php
// footer.php - Footer reutilizável para todas as páginas
?>
  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados.</p>
  </footer>
  <script src="<?php echo function_exists('pc_fusion_asset') ? pc_fusion_asset('menu.js') : 'menu.js'; ?>" defer></script>
  <?php if(isset($extra_js)): ?>
    <script src="<?php echo function_exists('pc_fusion_asset') ? pc_fusion_asset($extra_js) : htmlspecialchars($extra_js, ENT_QUOTES, 'UTF-8'); ?>" defer></script>
  <?php endif; ?>
</body>
</html>
