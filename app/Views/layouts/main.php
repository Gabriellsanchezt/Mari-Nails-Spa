<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle ?? (config('app.name') . ' | ' . config('app.tagline'))) ?></title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="<?= e(config('app.description')) ?>">
  <meta name="keywords" content="Mari Nails Spa, Uñas Barquisimeto, Manicura Barquisimeto, Pedicura Lara, Mariana Torres, Uñas Acrílicas, Nail Art, Spa de Uñas">
  <meta name="author" content="<?= e(config('specialist.name')) ?> - <?= e(config('app.name')) ?>">

  <!-- Open Graph / Redes Sociales -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e(config('app.name')) ?> | <?= e(config('app.tagline')) ?>">
  <meta property="og:description" content="<?= e(config('app.description')) ?>">
  <meta property="og:image" content="<?= asset(config('specialist.images.hero')) ?>">
  
  <!-- Google Fonts: Playfair Display + Plus Jakarta Sans + Cormorant Garamond -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicon / Logotipo Oficial de la Pestaña -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicon-32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicon-16.png') ?>">
  <link rel="icon" type="image/png" href="<?= asset('favicon.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('apple-touch-icon.png') ?>">
  <link rel="shortcut icon" href="<?= asset('favicon.ico') ?>">

  <!-- Estilos Custom -->
  <link rel="stylesheet" href="<?= asset('css/styles.css') ?>">
</head>
<body>

  <!-- Navegación Principal -->
  <?php \App\Core\View::partial('partials/navbar'); ?>

  <!-- Contenido Principal Inyectado -->
  <main>
    <?= $content ?? '' ?>
  </main>

  <!-- Footer -->
  <?php \App\Core\View::partial('partials/footer'); ?>

  <!-- Botón Flotante de WhatsApp -->
  <div class="floating-whatsapp-container">
    <div id="whatsappBubble" class="whatsapp-chat-bubble">
      <button id="whatsappBubbleClose" class="whatsapp-bubble-close" aria-label="Cerrar mensaje">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <strong>¡Hola bella! 💅</strong>
      ¿Deseas agendar tu cita con <?= e(config('specialist.name')) ?>? Escríbenos y te asignamos horario en minutos.
    </div>

    <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" aria-label="Contactar a Mari Nails Spa por WhatsApp">
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  </div>

  <!-- Modales -->
  <?php \App\Core\View::partial('partials/booking-modal'); ?>
  <?php \App\Core\View::partial('partials/lightbox'); ?>

  <!-- Scripts -->
  <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
