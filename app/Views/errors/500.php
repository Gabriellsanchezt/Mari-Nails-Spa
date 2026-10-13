<section class="container" style="padding: 8rem 1.5rem; text-align: center;">
  <span class="badge-luxury" style="margin-bottom: 1rem;"><i class="fa-solid fa-triangle-exclamation"></i> 500 Error del Servidor</span>
  <h1 class="section-title" style="font-size: 2.8rem; margin-bottom: 1rem;">Ocurrió un inconveniente temporal</h1>
  <p class="section-subtitle" style="margin-bottom: 2rem;">
    Estamos resolviendo este detalle técnico. Si deseas agendar tu cita de inmediato con Mariana, puedes escribirnos directamente a WhatsApp.
  </p>
  <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
    <a href="<?= url('/') ?>" class="btn btn-outline">
      <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
    </a>
    <a href="<?= e(config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
      <i class="fa-brands fa-whatsapp"></i> Contactar por WhatsApp
    </a>
  </div>
</section>
