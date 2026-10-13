<footer class="footer-main">
  <div class="container">
    <div class="footer-top-grid">
      
      <!-- Columna 1: Brand -->
      <div class="footer-brand">
        <div class="brand-logo">
          <div class="brand-icon-wrapper" style="border-color:var(--color-gold); overflow: hidden; display: flex; align-items: center; justify-content: center;">
            <img src="<?= asset('images/favicon-64.png') ?>" alt="Logo <?= e(config('app.name')) ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
          </div>
          <div class="brand-name" style="color:var(--color-white);">
            Mari Nails <span style="color:var(--color-gold-light);">Spa Boutique</span>
          </div>
        </div>
        <p>
          <?= e(config('app.description')) ?>
        </p>
        <div class="footer-socials">
          <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="<?= e(config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>

      <!-- Columna 2: Enlaces Rápidos -->
      <div>
        <h4 class="footer-col-title">Navegación</h4>
        <ul class="footer-links-list">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#cita">Previa Cita</a></li>
          <li><a href="#reserva">Agendar Cita</a></li>
          <li><a href="#galeria">Galería de Trabajos</a></li>
          <li><a href="#especialista"><?= e(config('specialist.name')) ?></a></li>
          <li><a href="#ubicacion">Ubicación</a></li>
        </ul>
      </div>

      <!-- Columna 3: Especialidades -->
      <div>
        <h4 class="footer-col-title">Especialidades</h4>
        <ul class="footer-links-list">
          <li><a href="#galeria">Manicura semi</a></li>
          <li><a href="#galeria">Pedicura</a></li>
          <li><a href="#galeria">Nivelación</a></li>
          <li><a href="#galeria">Kapping de polygel & Soft gel</a></li>
          <li><a href="#galeria">Dual system & Reparación</a></li>
          <li><a href="#galeria">Retiro de sistemas y semi</a></li>
        </ul>
      </div>

      <!-- Columna 4: Contacto Barquisimeto -->
      <div>
        <h4 class="footer-col-title">Horarios & Atención</h4>
        <p style="font-size:0.88rem; color:rgba(255,255,255,0.75); line-height:1.6; margin-bottom: 1rem;">
          <i class="fa-regular fa-clock" style="color:var(--color-gold);"></i> <strong><?= e(config('schedule.days')) ?>:</strong> <?= e(config('schedule.hours')) ?><br>
          <i class="fa-solid fa-bell" style="color:var(--color-gold);"></i> <strong>Atención:</strong> <?= e(config('schedule.mode')) ?>
        </p>
        <p style="font-size:0.85rem; color:rgba(255,255,255,0.6);">
          <i class="fa-solid fa-location-dot" style="color:var(--color-gold);"></i> Carrera 3, <?= e(config('location.city')) ?>.<br>
          <a href="<?= e(config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--color-gold-light); font-size:0.82rem; display:inline-flex; align-items:center; gap:0.3rem; margin-top:3px;">
            <i class="fa-solid fa-diamond-turn-right"></i> Cómo llegar en Google Maps
          </a>
        </p>
      </div>

    </div>

    <!-- Footer Bottom Centrado -->
    <div class="footer-bottom">
      <p>&copy; <?= e(config('app.year', date('Y'))) ?> <?= e(config('app.name')) ?> &bull; Dirigido por <?= e(config('specialist.name')) ?>. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>
