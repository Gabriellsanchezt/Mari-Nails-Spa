<!-- =========================================================================
     SECCIÓN HERO (PRINCIPAL)
     ========================================================================= -->
<section id="inicio" class="hero-section">
  <div class="hero-pattern-decor"></div>
  <div class="container hero-grid">
    
    <!-- Contenido Textual Hero -->
    <div class="hero-content">
      <div class="badge-luxury">
        <i class="fa-solid fa-sparkles"></i> <?= e(config('location.city')) ?> &bull; <?= e(config('schedule.mode')) ?>
      </div>

      <h1 class="hero-title">
        Resalta tu belleza con el cuidado que tus <em>manos y pies</em> merecen.
      </h1>

      <p class="hero-subtitle">
        Atención profesional y personalizada en Barquisimeto. Descubre una experiencia de relajación, acabados de alta costura y protocolos de bioseguridad clínica bajo la dirección de <strong><?= e(config('specialist.name')) ?></strong>.
      </p>

      <!-- Botones de Acción -->
      <div class="hero-cta-group">
        <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
          <i class="fa-brands fa-whatsapp"></i> Reservar por WhatsApp
        </a>
        <a href="#galeria" class="btn btn-outline">
          <i class="fa-solid fa-camera-retro"></i> Ver Galería de Diseños
        </a>
      </div>
    </div>

    <!-- Imagen Principal del Salón (Foto Profesional en Alta Resolución de Mariana Torres) -->
    <div class="hero-visual-wrapper">
      <div class="hero-gold-border-decor"></div>
      <div class="hero-image-card">
        <img src="<?= asset($specialist['hero_image']) ?>" alt="<?= e($specialist['name']) ?> - Especialista en Uñas y Fundadora de <?= e(config('app.name')) ?>">
      </div>
    </div>

  </div>
</section>

<!-- =========================================================================
     RIBBON DE BENEFICIOS Y VALORES
     ========================================================================= -->
<section class="benefits-ribbon">
  <div class="container">
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon-box"><i class="fa-solid fa-pump-medical"></i></div>
        <div>
          <h4 class="benefit-title">Esterilización Grado Clínico</h4>
          <p class="benefit-desc">Herramientas selladas y desinfectadas en autoclave para tu total tranquilidad.</p>
        </div>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box"><i class="fa-solid fa-gem"></i></div>
        <div>
          <h4 class="benefit-title">Insumos de Primera Línea</h4>
          <p class="benefit-desc">Marcas hipoalergénicas que nutren, fortalecen y protegen tu uña natural.</p>
        </div>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box"><i class="fa-solid fa-paintbrush"></i></div>
        <div>
          <h4 class="benefit-title">Nail Art Personalizado</h4>
          <p class="benefit-desc">Trazos a mano alzada, técnicas en tendencia y diseños que reflejan tu estilo.</p>
        </div>
      </div>

      <div class="benefit-card">
        <div class="benefit-icon-box"><i class="fa-solid fa-mug-hot"></i></div>
        <div>
          <h4 class="benefit-title">Experiencia Spa Íntima</h4>
          <p class="benefit-desc">Ambiente climatizado, aromaterapia, café de bienvenida y cero aglomeraciones.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     SECCIÓN DE ATENCIÓN EXCLUSIVA PREVIA CITA (CENTRADO)
     ========================================================================= -->
<section id="cita" class="appointment-notice-section">
  <div class="container">
    <div class="services-note-banner-centered">
      <div class="notice-icon-circle">
        <i class="fa-solid fa-calendar-check"></i>
      </div>
      <span class="section-tag" style="margin-bottom: 0.35rem;">Exclusividad & Cuidado</span>
      <h2 class="notice-title">Atención Exclusiva Previa Cita</h2>
      <p class="notice-text">
        Atendemos de <strong><?= e(config('schedule.days')) ?></strong> con cupos limitados por jornada para garantizarte puntualidad absoluta, bioseguridad clínica y un tiempo 100% dedicado a ti sin prisas ni esperas.
      </p>
      <div class="notice-action">
        <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          <i class="fa-brands fa-whatsapp"></i> Consultar Disponibilidad
        </a>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     ASISTENTE RÁPIDO DE RESERVA
     ========================================================================= -->
<section id="reserva" class="quick-booking-section">
  <div class="container">
    <div class="booking-card-wrapper">
      <div class="text-center">
        <span class="badge-luxury"><i class="fa-solid fa-bolt"></i> Reserva Exprés</span>
        <h2 class="section-title" style="font-size:2.1rem; margin-bottom: 0.5rem;">Agenda tu Cita en 1 Minuto</h2>
        <p class="section-subtitle" style="margin-bottom: 1.5rem;">
          Cuéntanos qué diseño o técnica deseas y tu día tentativo. Mariana te responderá personalmente por WhatsApp para coordinar tu cita.
        </p>
      </div>

      <form id="quickBookingForm">
        <div class="booking-form-grid">
          
          <!-- Nombre de la clienta -->
          <div class="form-group">
            <label for="bookingName"><i class="fa-regular fa-user"></i> Tu Nombre</label>
            <input type="text" id="bookingName" class="form-control" placeholder="Ej. Andrea Mendoza" required>
          </div>

          <!-- Qué quieren realmente (Texto Libre) -->
          <div class="form-group">
            <label for="bookingRequest"><i class="fa-solid fa-wand-magic-sparkles"></i> ¿Qué te gustaría hacerte?</label>
            <input type="text" id="bookingRequest" class="form-control" placeholder="Ej. Acrílicas baby boomer, pedicura spa, retiro..." required>
          </div>

          <!-- Día de Preferencia (Tentativo) -->
          <div class="form-group">
            <label for="bookingDay"><i class="fa-regular fa-calendar"></i> Día Preferido <em>(Tentativo)</em></label>
            <select id="bookingDay" class="form-control">
              <option value="Lunes">Lunes</option>
              <option value="Martes">Martes</option>
              <option value="Miércoles">Miércoles</option>
              <option value="Jueves">Jueves</option>
              <option value="Viernes">Viernes</option>
              <option value="Sábado">Sábado</option>
            </select>
          </div>

        </div>

        <!-- Énfasis sobre el día tentativo -->
        <div style="background: rgba(212, 175, 55, 0.1); border: 1px dashed var(--color-gold); border-radius: var(--radius-sm); padding: 0.75rem 1.25rem; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem; font-size: 0.85rem; color: var(--color-text-primary);">
          <i class="fa-solid fa-calendar-check" style="color: var(--color-gold-dark); font-size: 1.15rem;"></i>
          <span><strong>Nota importante:</strong> El día seleccionado es <u>tentativo</u>. Mariana coordinará contigo la disponibilidad exacta de agenda al responder tu mensaje.</span>
        </div>

        <!-- Resumen y Botón de Envío -->
        <div class="booking-summary-box">
          <div class="summary-details">
            <h5>Tu solicitud:</h5>
            <p>Deseo: <strong id="summaryRequestText">Diseño personalizado</strong> &bull; Día tentativo: <strong id="summaryDayText">Lunes (Tentativo)</strong></p>
          </div>
          <button type="button" id="sendBookingWhatsApp" class="btn btn-whatsapp">
            <i class="fa-brands fa-whatsapp" style="font-size:1.2rem;"></i> Confirmar vía WhatsApp
          </button>
        </div>
      </form>

    </div>
  </div>
</section>

<!-- =========================================================================
     SECCIÓN DE GALERÍA / PORTAFOLIO (FOTOS REALES DE INSTAGRAM)
     ========================================================================= -->
<section id="galeria" class="gallery-section">
  <div class="container">
    
    <div class="text-center">
      <a href="<?= e(config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="instagram-header-badge">
        <i class="fa-brands fa-instagram"></i> <?= e(config('instagram.handle')) ?> en Instagram
      </a>
      <h2 class="section-title">Portafolio & Diseños Recientes</h2>

      <!-- Botones de filtro -->
      <div class="services-filter-tabs">
        <?php foreach ($categories as $index => $cat): ?>
          <button class="gallery-tab-btn tab-btn <?= $index === 0 ? 'active' : '' ?>" data-category="<?= e($cat['slug']) ?>">
            <?= e($cat['name']) ?>
          </button>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Grid de Galería Limpio con Lightbox -->
    <div class="gallery-grid">
      <?php foreach ($gallery as $item): ?>
        <div class="gallery-item" data-category="<?= e($item['category']) ?>" data-lightbox-src="<?= asset($item['image']) ?>" role="button" tabindex="0" aria-label="Ampliar fotografía de diseño de uñas">
          <img src="<?= asset($item['image']) ?>" alt="<?= e($item['alt']) ?>">
          <div class="gallery-expand-hint">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Botón de Instagram -->
    <div class="gallery-footer-action">
      <a href="<?= e(config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="border-color:var(--color-text-primary);">
        <i class="fa-brands fa-instagram" style="color:var(--color-instagram);"></i> Ver más diseños en <?= e(config('instagram.handle')) ?>
      </a>
    </div>

  </div>
</section>

<!-- =========================================================================
     SECCIÓN SOBRE LA ESPECIALISTA (MARIANA TORRES)
     ========================================================================= -->
<section id="especialista" class="specialist-section">
  <div class="container">
    <div class="specialist-grid">
      
      <!-- Retrato Profesional en Alta Resolución de Mariana Torres -->
      <div class="specialist-image-card">
        <div class="specialist-img-container">
          <img src="<?= asset($specialist['image']) ?>" alt="<?= e($specialist['name']) ?> - <?= e($specialist['role']) ?> en <?= e(config('app.name')) ?>" style="object-position: center 15%;">
        </div>
        <div class="specialist-badge-float">
          <i class="fa-solid fa-gem"></i>
          <div>
            <h4><?= e($specialist['evolution']) ?></h4>
            <p><?= e($specialist['role']) ?></p>
          </div>
        </div>
      </div>

      <!-- Biografía y Filosofía -->
      <div class="specialist-bio">
        <span class="section-tag">Conoce a tu especialista</span>
        <h3><?= e($specialist['name']) ?></h3>
        <span class="specialist-role"><?= e($specialist['role']) ?> &bull; <?= e($specialist['evolution']) ?></span>

        <blockquote class="specialist-quote">
          "<?= e($specialist['quote']) ?>"
        </blockquote>

        <p class="specialist-text">
          <?= e($specialist['bio']) ?>
        </p>

        <!-- 4 Pilares de Confianza -->
        <div class="pillars-grid">
          <?php foreach ($specialist['pillars'] as $pillar): ?>
            <div class="pillar-item">
              <i class="<?= e($pillar['icon']) ?>"></i>
              <div>
                <h5><?= e($pillar['title']) ?></h5>
                <p><?= e($pillar['desc']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold">
          <i class="fa-brands fa-whatsapp"></i> Conversar con <?= e(config('specialist.name')) ?>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================================
     TESTIMONIOS DE CLIENTAS
     ========================================================================= -->
<section class="testimonials-section">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Opiniones Reales</span>
      <h2 class="section-title">Lo que Dicen Nuestras Clientas</h2>
      <p class="section-subtitle">
        La confianza y fidelidad de las mujeres en Barquisimeto son nuestro mejor aval de excelencia.
      </p>
    </div>

    <div class="testimonials-grid">
      <?php foreach ($reviews as $rev): ?>
        <div class="testimonial-card">
          <div>
            <div class="testimonial-stars">
              <?php for ($s = 0; $s < $rev['stars']; $s++): ?>
                <i class="fa-solid fa-star"></i>
              <?php endfor; ?>
            </div>
            <p class="testimonial-text">
              "<?= e($rev['comment']) ?>"
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar"><?= e($rev['initials']) ?></div>
            <div class="author-info">
              <h5><?= e($rev['name']) ?></h5>
              <span><?= e($rev['role']) ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     PREGUNTAS FRECUENTES (FAQ ORGÁNICAS)
     ========================================================================= -->
<section class="faq-section">
  <div class="container">
    <div class="text-center">
      <span class="section-tag">Todo lo que necesitas saber</span>
      <h2 class="section-title">Preguntas Frecuentes</h2>
      <p class="section-subtitle">Respuestas claras y sinceras para que disfrutes al máximo tu visita.</p>
    </div>

    <div class="faq-wrapper">
      <?php foreach ($faqs as $faq): ?>
        <div class="faq-item">
          <button class="faq-question">
            <span><?= e($faq['question']) ?></span>
            <i class="fa-solid fa-chevron-down faq-icon"></i>
          </button>
          <div class="faq-answer">
            <p><?= e($faq['answer']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     SECCIÓN DE UBICACIÓN Y CONTACTO
     ========================================================================= -->
<section id="ubicacion" class="location-section">
  <div class="container">
    <div class="location-grid">
      
      <!-- Tarjeta de Información de Ubicación -->
      <div class="location-info-card">
        <div>
          <span class="section-tag">Encuéntranos en Barquisimeto</span>
          <h2 class="section-title" style="margin-bottom:0.75rem;">Visítanos en Nuestro Espacio Boutique</h2>
          <p class="section-subtitle" style="margin:0 0 1.5rem 0;">
            Ubicados en una zona accesible y segura de <?= e(config('location.city')) ?>. Disfruta de estacionamiento cómodo y un ambiente de máxima relajación.
          </p>

          <div class="location-detail-list">
            <div class="location-detail-item">
              <div class="location-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="location-text">
                <h4>Dirección</h4>
                <p>Carrera 3, <?= e(config('location.city')) ?>, Venezuela.<br>
                  <a href="<?= e(config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--color-gold-dark); font-weight:600; font-size:0.85rem; display:inline-flex; align-items:center; gap:0.35rem; margin-top:4px;">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Ver ubicación en Google Maps
                  </a>
                </p>
              </div>
            </div>

            <div class="location-detail-item">
              <div class="location-icon"><i class="fa-solid fa-clock"></i></div>
              <div class="location-text">
                <h4>Días y Horarios</h4>
                <p><strong><?= e(config('schedule.days')) ?>:</strong> <?= e(config('schedule.hours')) ?><br><strong>Domingos:</strong> Cerrado (Descanso técnico)</p>
              </div>
            </div>

            <div class="location-detail-item">
              <div class="location-icon"><i class="fa-brands fa-whatsapp"></i></div>
              <div class="location-text">
                <h4>WhatsApp Oficial</h4>
                <p><a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--color-text-primary); font-weight:600;"><?= e(config('whatsapp.display')) ?></a> (Atención directa con <?= e(config('specialist.name')) ?>)</p>
              </div>
            </div>

            <div class="location-detail-item">
              <div class="location-icon"><i class="fa-brands fa-instagram"></i></div>
              <div class="location-text">
                <h4>Instagram</h4>
                <p><a href="<?= e(config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--color-text-primary); font-weight:600;"><?= e(config('instagram.handle')) ?></a></p>
              </div>
            </div>
          </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 0.85rem; margin-top: 1.5rem;">
          <a href="<?= e(config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold" style="width: 100%;">
            <i class="fa-solid fa-diamond-turn-right"></i> Cómo Llegar en Google Maps
          </a>
          <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%;">
            <i class="fa-brands fa-whatsapp"></i> Solicitar Cita por WhatsApp
          </a>
        </div>
      </div>

      <!-- Mapa Interactivo Embebido -->
      <div class="location-map-container">
        <iframe 
          src="https://www.openstreetmap.org/export/embed.html?bbox=-69.352997%2C10.076828%2C-69.332997%2C10.090828&amp;layer=mapnik&amp;marker=10.083828%2C-69.342997" 
          allowfullscreen="" 
          loading="lazy" 
          title="Ubicación exacta de <?= e(config('app.name')) ?> en Barquisimeto">
        </iframe>
        <div class="map-floating-action">
          <div style="font-size: 0.85rem; line-height: 1.25;">
            <strong style="color: var(--color-text-primary); display: block;"><?= e(config('app.name')) ?></strong>
            <span style="color: var(--color-text-secondary); font-size: 0.78rem;">Carrera 3, Barquisimeto</span>
          </div>
          <a href="<?= e(config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold btn-sm" style="white-space: nowrap; padding: 0.45rem 1rem;">
            <i class="fa-solid fa-location-arrow"></i> Trazar Ruta
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
