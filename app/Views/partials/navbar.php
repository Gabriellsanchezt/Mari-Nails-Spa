<header class="header-navbar">
  <div class="container navbar-inner">
    <!-- Logo de la Marca -->
    <a href="#inicio" class="brand-logo" aria-label="<?= e(config('app.name')) ?> - Inicio">
      <div class="brand-icon-wrapper" style="overflow: hidden; display: flex; align-items: center; justify-content: center;">
        <img src="<?= asset('images/favicon-64.png') ?>" alt="Logo <?= e(config('app.name')) ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
      </div>
      <div class="brand-name">
        Mari Nails <span>Spa Boutique</span>
      </div>
    </a>

    <!-- Menú de Navegación -->
    <nav aria-label="Navegación principal">
      <ul class="nav-links">
        <li><a href="#inicio" class="nav-link active">Inicio</a></li>
        <li><a href="#cita" class="nav-link">Previa Cita</a></li>
        <li><a href="#reserva" class="nav-link">Reservar</a></li>
        <li><a href="#galeria" class="nav-link">Galería de Diseños</a></li>
        <li><a href="#especialista" class="nav-link"><?= e(config('specialist.name')) ?></a></li>
        <li><a href="#ubicacion" class="nav-link">Ubicación</a></li>
        <li class="mobile-nav-cta">
          <a href="#reserva" class="btn btn-gold btn-sm" style="width: 100%; justify-content: center;">
            <i class="fa-solid fa-calendar-plus"></i> Agendar Cita
          </a>
        </li>
      </ul>
    </nav>

    <!-- Botón de CTA Header & Toggle Móvil -->
    <div class="navbar-actions">
      <a href="#reserva" class="btn btn-gold btn-sm">
        <i class="fa-solid fa-calendar-plus"></i> Agendar Cita
      </a>
      <button class="mobile-toggle-btn" aria-label="Abrir menú de navegación">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>
