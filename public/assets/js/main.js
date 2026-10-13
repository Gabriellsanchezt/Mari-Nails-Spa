/**
 * MARI NAILS SPA - JAVASCRIPT PRINCIPAL
 * Funcionalidades interactivas, generador de enlaces de WhatsApp de alta conversión,
 * acordeones FAQ, filtrado de galería y animaciones de navegación.
 */

document.addEventListener('DOMContentLoaded', () => {
  // Constantes de contacto
  const WHATSAPP_PHONE = '584120549526';
  const INSTAGRAM_HANDLE = 'marinails.spa_';

  // --- 1. Navbar con efecto de scroll y menú móvil ---
  const headerNavbar = document.querySelector('.header-navbar');
  const mobileToggleBtn = document.querySelector('.mobile-toggle-btn');
  const navLinks = document.querySelector('.nav-links');
  const navLinksItems = document.querySelectorAll('.nav-links a');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      headerNavbar.classList.add('scrolled');
    } else {
      headerNavbar.classList.remove('scrolled');
    }
  });

  if (mobileToggleBtn && navLinks) {
    mobileToggleBtn.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      const icon = mobileToggleBtn.querySelector('i');
      if (icon) {
        if (navLinks.classList.contains('active')) {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-xmark');
        } else {
          icon.classList.remove('fa-xmark');
          icon.classList.add('fa-bars');
        }
      }
    });

    // Cerrar menú móvil al hacer click en enlace
    navLinksItems.forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        const icon = mobileToggleBtn.querySelector('i');
        if (icon) {
          icon.classList.remove('fa-xmark');
          icon.classList.add('fa-bars');
        }
      });
    });
  }

  // --- 2. Asistente Rápido de Agendamiento WhatsApp ---
  const bookingRequestInput = document.getElementById('bookingRequest');
  const bookingDaySelect = document.getElementById('bookingDay');
  const bookingNameInput = document.getElementById('bookingName');
  const sendBookingWhatsAppBtn = document.getElementById('sendBookingWhatsApp');
  const summaryRequestText = document.getElementById('summaryRequestText');
  const summaryDayText = document.getElementById('summaryDayText');

  // Función auxiliar: Cálculo automático de fecha tentativa según el día seleccionado
  function getUpcomingDateForDay(dayName) {
    const dayClean = (dayName || '').toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").trim();
    const dayIndexMap = {
      'domingo': 0,
      'lunes': 1,
      'martes': 2,
      'miercoles': 3,
      'jueves': 4,
      'viernes': 5,
      'sabado': 6
    };

    const targetDay = dayIndexMap[dayClean];
    if (targetDay === undefined) return '';

    const now = new Date();
    const currentDay = now.getDay();
    let diff = targetDay - currentDay;

    // Si es hoy pero ya pasaron las 18:00 (hora de cierre del spa), sugerir el de la próxima semana
    if (diff === 0 && now.getHours() >= 18) {
      diff = 7;
    } else if (diff < 0) {
      diff += 7;
    }

    const targetDate = new Date(now);
    targetDate.setDate(now.getDate() + diff);

    const monthNames = [
      'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
      'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
    ];

    const dayNum = targetDate.getDate();
    const monthStr = monthNames[targetDate.getMonth()];

    if (targetDate.getFullYear() !== now.getFullYear()) {
      return `${dayNum} de ${monthStr} de ${targetDate.getFullYear()}`;
    }

    return `${dayNum} de ${monthStr}`;
  }

  function updateBookingSummary() {
    if (summaryRequestText && bookingRequestInput) {
      summaryRequestText.textContent = bookingRequestInput.value.trim() || 'Diseño personalizado';
    }
    if (summaryDayText && bookingDaySelect) {
      const dayVal = bookingDaySelect.value ? bookingDaySelect.value.trim() : '';
      if (!dayVal) {
        summaryDayText.textContent = 'Por coordinar (Tentativo)';
      } else {
        const autoDate = getUpcomingDateForDay(dayVal);
        summaryDayText.textContent = autoDate ? `${dayVal} (${autoDate} - Tentativo)` : `${dayVal} (Tentativo)`;
      }
    }
  }

  // --- Limpieza de formularios en carga / recarga para evitar caché de reserva previa ---
  function resetBookingFields() {
    const quickForm = document.getElementById('quickBookingForm');
    const modalForm = document.getElementById('modalBookingForm');
    if (quickForm && typeof quickForm.reset === 'function') quickForm.reset();
    if (modalForm && typeof modalForm.reset === 'function') modalForm.reset();

    if (bookingNameInput) bookingNameInput.value = '';
    if (bookingRequestInput) bookingRequestInput.value = '';
    if (bookingDaySelect) bookingDaySelect.value = '';

    const modalName = document.getElementById('modalClientName');
    const modalReq = document.getElementById('modalClientRequest');
    const modalDay = document.getElementById('modalClientDay');
    if (modalName) modalName.value = '';
    if (modalReq) modalReq.value = '';
    if (modalDay) modalDay.value = '';

    updateBookingSummary();
  }

  // Ejecutar limpieza al iniciar y en el evento pageshow (evita restauración de caché del navegador / bfcache)
  resetBookingFields();
  window.addEventListener('pageshow', resetBookingFields);

  if (bookingRequestInput) {
    bookingRequestInput.addEventListener('input', updateBookingSummary);
  }
  if (bookingDaySelect) {
    bookingDaySelect.addEventListener('change', updateBookingSummary);
  }

  // Función segura y resiliente para abrir WhatsApp (con fallback ante bloqueadores de popups en móviles)
  function safeOpenWhatsApp(url) {
    try {
      const win = window.open(url, '_blank');
      if (!win || win.closed || typeof win.closed === 'undefined') {
        window.location.href = url;
      }
    } catch {
      window.location.href = url;
    }
  }

  if (sendBookingWhatsAppBtn) {
    sendBookingWhatsAppBtn.addEventListener('click', (e) => {
      e.preventDefault();

      // Validación Honeypot: si el campo invisible fue completado, ignorar envío silenciosamente (bot/spam)
      const hp = document.getElementById('quickHpTrap');
      if (hp && hp.value.trim() !== '') return;

      const rawName = bookingNameInput && bookingNameInput.value.trim() !== '' ? bookingNameInput.value.trim() : '';
      const name = rawName || '[Nombre]';
      const request = bookingRequestInput && bookingRequestInput.value.trim() !== '' ? bookingRequestInput.value.trim() : 'Diseño personalizado';
      const day = bookingDaySelect && bookingDaySelect.value ? bookingDaySelect.value.trim() : '';

      let dayClause = '';
      if (day) {
        const autoDate = getUpcomingDateForDay(day);
        const dateText = autoDate ? ` (${autoDate})` : '';
        dayClause = ` Mi día preferido (tentativo) seria el dia: ${day}${dateText}.`;
      }

      const customMessage = `¡Hola Mariana!\n\nMi nombre es ${name}. Me gustaría agendar una cita en Mari Nails para realizarme: ${request}.${dayClause} ¿Qué días tienes disponibilidad en tu agenda?`;

      const whatsappUrl = `https://wa.me/${WHATSAPP_PHONE}?text=${encodeURIComponent(customMessage)}`;
      safeOpenWhatsApp(whatsappUrl);
    });
  }

  // --- 3. Botones de Reserva Directa en Cards de Servicios ---
  const serviceBookingButtons = document.querySelectorAll('[data-service-name]');
  serviceBookingButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      e.preventDefault();
      const serviceName = button.getAttribute('data-service-name');
      const customMessage = `¡Hola Mariana! Deseo agendar una cita en Mari Nails Spa para el servicio: *${serviceName}*. ¿Cuál es tu disponibilidad más próxima en Barquisimeto?`;
      const whatsappUrl = `https://wa.me/${WHATSAPP_PHONE}?text=${encodeURIComponent(customMessage)}`;
      safeOpenWhatsApp(whatsappUrl);
    });
  });

  // --- 4. Filtro de Categorías en Galería ---
  const galleryFilterButtons = document.querySelectorAll('.gallery-tab-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  galleryFilterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      galleryFilterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterCategory = btn.getAttribute('data-category');

      galleryItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category') || '';
        const itemCategories = itemCategory.split(/\s+/);
        if (filterCategory === 'all' || itemCategories.includes(filterCategory)) {
          item.style.display = '';
          item.style.opacity = '1';
        } else {
          item.style.display = 'none';
          item.style.opacity = '0';
        }
      });
    });
  });

  // --- 4.1 Lightbox Modal de Galería (Expandir y Visualizar Fotos) ---
  const lightboxModal = document.getElementById('galleryLightbox');
  const lightboxImg = document.getElementById('lightboxActiveImg');
  const lightboxCloseBtn = document.getElementById('lightboxCloseBtn');
  const lightboxPrevBtn = document.getElementById('lightboxPrevBtn');
  const lightboxNextBtn = document.getElementById('lightboxNextBtn');

  let activeGalleryImages = [];
  let currentImageIndex = 0;

  function getVisibleGalleryImages() {
    return Array.from(document.querySelectorAll('.gallery-item'))
      .filter(item => item.style.display !== 'none')
      .map(item => item.getAttribute('data-lightbox-src') || (item.querySelector('img') ? item.querySelector('img').src : ''))
      .filter(src => !!src);
  }

  function openLightbox(src) {
    if (!lightboxModal || !lightboxImg || !src) return;
    activeGalleryImages = getVisibleGalleryImages();
    const idx = activeGalleryImages.indexOf(src);
    currentImageIndex = idx !== -1 ? idx : 0;

    lightboxImg.src = activeGalleryImages[currentImageIndex] || src;
    lightboxModal.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!lightboxModal) return;
    lightboxModal.classList.remove('open');
    document.body.style.overflow = '';
  }

  function showPrevImage() {
    if (activeGalleryImages.length === 0) return;
    currentImageIndex = (currentImageIndex - 1 + activeGalleryImages.length) % activeGalleryImages.length;
    if (lightboxImg) lightboxImg.src = activeGalleryImages[currentImageIndex];
  }

  function showNextImage() {
    if (activeGalleryImages.length === 0) return;
    currentImageIndex = (currentImageIndex + 1) % activeGalleryImages.length;
    if (lightboxImg) lightboxImg.src = activeGalleryImages[currentImageIndex];
  }

  galleryItems.forEach(item => {
    const triggerAction = () => {
      const src = item.getAttribute('data-lightbox-src');
      if (src) {
        openLightbox(src);
      } else {
        const titleEl = item.querySelector('.placeholder-title');
        if (titleEl && bookingRequestInput) {
          bookingRequestInput.value = titleEl.textContent.trim();
          updateBookingSummary();
          const reservaSection = document.getElementById('reserva');
          if (reservaSection) {
            reservaSection.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
    };

    item.addEventListener('click', triggerAction);
    item.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        triggerAction();
      }
    });
  });

  if (lightboxCloseBtn) {
    lightboxCloseBtn.addEventListener('click', closeLightbox);
  }

  if (lightboxPrevBtn) {
    lightboxPrevBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      showPrevImage();
    });
  }

  if (lightboxNextBtn) {
    lightboxNextBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      showNextImage();
    });
  }

  if (lightboxModal) {
    lightboxModal.addEventListener('click', (e) => {
      if (e.target === lightboxModal || e.target.classList.contains('lightbox-container')) {
        closeLightbox();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (!lightboxModal.classList.contains('open')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowLeft') showPrevImage();
      if (e.key === 'ArrowRight') showNextImage();
    });
  }

  // --- 5. Acordeón Interactivo de Preguntas Frecuentes (FAQ) ---
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    const answerBox = item.querySelector('.faq-answer');

    if (questionBtn && answerBox) {
      questionBtn.addEventListener('click', () => {
        const isOpen = item.classList.contains('active');

        // Cerrar todos los demás
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
            const otherAnswer = otherItem.querySelector('.faq-answer');
            if (otherAnswer) otherAnswer.style.maxHeight = null;
          }
        });

        // Alternar el actual
        if (!isOpen) {
          item.classList.add('active');
          answerBox.style.maxHeight = answerBox.scrollHeight + 40 + 'px';
        } else {
          item.classList.remove('active');
          answerBox.style.maxHeight = null;
        }
      });
    }
  });

  // --- 6. Bubble flotante de WhatsApp ---
  const whatsappBubble = document.getElementById('whatsappBubble');
  const whatsappBubbleClose = document.getElementById('whatsappBubbleClose');

  if (whatsappBubbleClose && whatsappBubble) {
    whatsappBubbleClose.addEventListener('click', (e) => {
      e.stopPropagation();
      whatsappBubble.style.display = 'none';
      sessionStorage.setItem('wa_bubble_dismissed', 'true');
    });

    if (sessionStorage.getItem('wa_bubble_dismissed') === 'true') {
      whatsappBubble.style.display = 'none';
    }
  }

  // --- 7. Modal de Cita Rápida ---
  const modalBackdrop = document.getElementById('bookingModal');
  const modalOpenTriggers = document.querySelectorAll('[data-open-modal="bookingModal"]');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const modalForm = document.getElementById('modalBookingForm');

  modalOpenTriggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      if (modalBackdrop) {
        modalBackdrop.classList.add('open');
      }
    });
  });

  if (modalCloseBtn && modalBackdrop) {
    modalCloseBtn.addEventListener('click', () => {
      modalBackdrop.classList.remove('open');
    });

    modalBackdrop.addEventListener('click', (e) => {
      if (e.target === modalBackdrop) {
        modalBackdrop.classList.remove('open');
      }
    });
  }

  if (modalForm) {
    modalForm.addEventListener('submit', (e) => {
      e.preventDefault();

      // Validación Honeypot
      const hp = document.getElementById('modalHpTrap');
      if (hp && hp.value.trim() !== '') return;

      const rawName = document.getElementById('modalClientName') ? document.getElementById('modalClientName').value.trim() : '';
      const clientName = rawName || '[Nombre]';
      const request = document.getElementById('modalClientRequest') ? document.getElementById('modalClientRequest').value.trim() : 'Diseño personalizado';
      const modalDayInput = document.getElementById('modalClientDay');
      const day = modalDayInput && modalDayInput.value ? modalDayInput.value.trim() : '';

      let dayClause = '';
      if (day) {
        const autoDate = getUpcomingDateForDay(day);
        const dateText = autoDate ? ` (${autoDate})` : '';
        dayClause = ` Mi día preferido (tentativo) seria el dia: ${day}${dateText}.`;
      }

      const msg = `¡Hola Mariana!\n\nMi nombre es ${clientName}. Me gustaría agendar una cita en Mari Nails para realizarme: ${request}.${dayClause} ¿Qué días tienes disponibilidad en tu agenda?`;

      const targetUrl = `https://wa.me/${WHATSAPP_PHONE}?text=${encodeURIComponent(msg)}`;
      safeOpenWhatsApp(targetUrl);

      if (modalBackdrop) modalBackdrop.classList.remove('open');
      resetBookingFields();
    });
  }

  // --- 6. Barra Flotante de Conversión Móvil al hacer Scroll ---
  const mobileBottomBar = document.getElementById('mobileBottomBar');
  if (mobileBottomBar) {
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          if (window.scrollY > 350) {
            mobileBottomBar.classList.add('visible');
            document.body.classList.add('has-mobile-bar');
          } else {
            mobileBottomBar.classList.remove('visible');
            document.body.classList.remove('has-mobile-bar');
          }
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

  // Inicializar estado del resumen
  updateBookingSummary();
});
