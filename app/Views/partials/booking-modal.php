<div id="bookingModal" class="modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
  <div class="modal-content-box">
    <button id="modalCloseBtn" class="modal-close-btn" aria-label="Cerrar modal">
      <i class="fa-solid fa-xmark"></i>
    </button>
    <div style="text-align: center; margin-bottom: 1.5rem;">
      <span class="badge-luxury" style="margin-bottom: 0.5rem;"><i class="fa-solid fa-calendar-check"></i> <?= e(config('app.name')) ?></span>
      <h3 id="modalTitle" class="section-title" style="font-size: 1.8rem; margin-bottom: 0.25rem;">Agendar Cita</h3>
      <p style="font-size: 0.88rem; color: var(--color-text-secondary);">Atención personalizada con <?= e(config('specialist.name')) ?> en Barquisimeto.</p>
    </div>

    <form id="modalBookingForm" autocomplete="off">
      <!-- Campo Honeypot silencioso anti-bots / spam -->
      <input type="text" id="modalHpTrap" name="_mari_modal_hp" style="display:none !important; position:absolute !important; left:-9999px !important;" tabindex="-1" autocomplete="off">

      <div class="form-group" style="margin-bottom: 1rem;">
        <label for="modalClientName"><i class="fa-regular fa-user"></i> Tu Nombre Completo</label>
        <input type="text" id="modalClientName" class="form-control" placeholder="Ej. Camila Silva" autocomplete="off" required>
      </div>

      <div class="form-group" style="margin-bottom: 1rem;">
        <label for="modalClientRequest"><i class="fa-solid fa-wand-magic-sparkles"></i> ¿Qué te gustaría hacerte?</label>
        <input type="text" id="modalClientRequest" class="form-control" placeholder="Ej. Manicura semi, nivelación, dual system, pedicura..." autocomplete="off" required>
      </div>

      <div class="form-group" style="margin-bottom: 1rem;">
        <label for="modalClientDay"><i class="fa-regular fa-calendar"></i> Día Preferido <em>(Tentativo)</em></label>
        <select id="modalClientDay" class="form-control" autocomplete="off">
          <option value="" selected>Selecciona un día preferido...</option>
          <option value="Lunes">Lunes</option>
          <option value="Martes">Martes</option>
          <option value="Miércoles">Miércoles</option>
          <option value="Jueves">Jueves</option>
          <option value="Viernes">Viernes</option>
          <option value="Sábado">Sábado</option>
        </select>
      </div>

      <div style="background: rgba(212, 175, 55, 0.1); border: 1px dashed var(--color-gold); border-radius: var(--radius-sm); padding: 0.65rem 1rem; margin-bottom: 1.25rem; font-size: 0.82rem; color: var(--color-text-primary); display: flex; align-items: center; gap: 0.5rem;">
        <i class="fa-solid fa-calendar-check" style="color: var(--color-gold-dark);"></i>
        <span><strong>Día tentativo:</strong> Sujeto a confirmación de agenda directa con <?= e(config('specialist.name')) ?>.</span>
      </div>

      <button type="submit" class="btn btn-whatsapp" style="width: 100%; padding: 0.95rem;">
        <i class="fa-brands fa-whatsapp" style="font-size: 1.2rem;"></i> Enviar Solicitud a WhatsApp
      </button>
    </form>
  </div>
</div>
