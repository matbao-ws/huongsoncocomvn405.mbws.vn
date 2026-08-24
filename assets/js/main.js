/**
 * Main JavaScript for Logistics & Transportation Template (8324 MatBao WS)
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. STICKY HEADER
  const header = document.querySelector('.site-header');
  const topBar = document.querySelector('#top-bar');

  const handleScroll = () => {
    if (window.scrollY > 80) {
      header?.classList.add('is-sticky');
    } else {
      header?.classList.remove('is-sticky');
    }

    // Back to top button visibility
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
      if (window.scrollY > 400) {
        backToTop.classList.remove('opacity-0', 'invisible', 'translate-y-4');
        backToTop.classList.add('opacity-100', 'visible', 'translate-y-0');
      } else {
        backToTop.classList.add('opacity-0', 'invisible', 'translate-y-4');
        backToTop.classList.remove('opacity-100', 'visible', 'translate-y-0');
      }
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // 2. BACK TO TOP
  const backToTopBtn = document.getElementById('back-to-top');
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 3. MOBILE MENU DRAWER
  const mobileMenuBtn = document.getElementById('mobile-menu-toggle');
  const mobileMenuCloseBtn = document.getElementById('mobile-menu-close');
  const mobileDrawer = document.getElementById('mobile-drawer');
  const mobileBackdrop = document.getElementById('mobile-backdrop');

  const openMobileMenu = () => {
    mobileDrawer?.classList.remove('-translate-x-full');
    mobileDrawer?.classList.add('translate-x-0');
    mobileBackdrop?.classList.remove('hidden');
    setTimeout(() => mobileBackdrop?.classList.remove('opacity-0'), 10);
    document.body.style.overflow = 'hidden';
  };

  const closeMobileMenu = () => {
    mobileDrawer?.classList.add('-translate-x-full');
    mobileDrawer?.classList.remove('translate-x-0');
    mobileBackdrop?.classList.add('opacity-0');
    setTimeout(() => {
      mobileBackdrop?.classList.add('hidden');
      document.body.style.overflow = '';
    }, 300);
  };

  mobileMenuBtn?.addEventListener('click', openMobileMenu);
  mobileMenuCloseBtn?.addEventListener('click', closeMobileMenu);
  mobileBackdrop?.addEventListener('click', closeMobileMenu);

  // Mobile submenu accordion
  document.querySelectorAll('.mobile-dropdown-btn').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const submenu = btn.nextElementSibling;
      const icon = btn.querySelector('svg, i');
      if (submenu) {
        submenu.classList.toggle('hidden');
        icon?.classList.toggle('rotate-180');
      }
    });
  });

  // 4. STAT COUNTERS ANIMATION
  const counters = document.querySelectorAll('.counter-value');
  let counted = false;

  const animateCounters = () => {
    counters.forEach((counter) => {
      const target = +counter.getAttribute('data-target');
      const suffix = counter.getAttribute('data-suffix') || '';
      const prefix = counter.getAttribute('data-prefix') || '';
      const duration = 2000; // ms
      const stepTime = 20;
      const totalSteps = duration / stepTime;
      const stepValue = target / totalSteps;
      let current = 0;

      const timer = setInterval(() => {
        current += stepValue;
        if (current >= target) {
          counter.innerText = prefix + target.toLocaleString('vi-VN') + suffix;
          clearInterval(timer);
        } else {
          counter.innerText = prefix + Math.floor(current).toLocaleString('vi-VN') + suffix;
        }
      }, stepTime);
    });
  };

  if (counters.length > 0) {
    const counterSection = counters[0].closest('section') || counters[0].parentElement;
    const observer = new IntersectionObserver(
      (entries) => {
        if (entries[0].isIntersecting && !counted) {
          counted = true;
          animateCounters();
        }
      },
      { threshold: 0.2 }
    );
    if (counterSection) observer.observe(counterSection);
  }

  // 5. TESTIMONIAL SLIDER (ENHANCED SMOOTH SLIDER)
  const testimonialTrack = document.getElementById('testimonial-track');
  if (testimonialTrack) {
    let currentIndex = 0;
    const slides = Array.from(testimonialTrack.children);
    const totalSlides = slides.length;
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const dotsContainer = document.getElementById('testimonial-dots');
    let autoSlider;

    const updateSlider = (idx) => {
      if (totalSlides === 0) return;
      currentIndex = (idx + totalSlides) % totalSlides;
      testimonialTrack.style.transform = `translateX(-${currentIndex * 100}%)`;

      // Update dots
      if (dotsContainer) {
        Array.from(dotsContainer.children).forEach((dot, dIdx) => {
          if (dIdx === currentIndex) {
            dot.className = 'w-6 h-2 bg-[#f17c34] transition-all duration-300';
          } else {
            dot.className = 'w-2 h-2 bg-gray-300 transition-all duration-300 hover:bg-gray-400 cursor-pointer';
          }
        });
      }
    };

    // Generate dots
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('button');
        dot.setAttribute('aria-label', `Slide ${i + 1}`);
        dot.addEventListener('click', () => {
          updateSlider(i);
          resetAutoSlide();
        });
        dotsContainer.appendChild(dot);
      }
    }

    const resetAutoSlide = () => {
      clearInterval(autoSlider);
      autoSlider = setInterval(() => updateSlider(currentIndex + 1), 6000);
    };

    prevBtn?.addEventListener('click', (e) => {
      e.preventDefault();
      updateSlider(currentIndex - 1);
      resetAutoSlide();
    });

    nextBtn?.addEventListener('click', (e) => {
      e.preventDefault();
      updateSlider(currentIndex + 1);
      resetAutoSlide();
    });

    // Touch swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    testimonialTrack.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    testimonialTrack.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchStartX - touchEndX > 50) {
        updateSlider(currentIndex + 1);
        resetAutoSlide();
      } else if (touchEndX - touchStartX > 50) {
        updateSlider(currentIndex - 1);
        resetAutoSlide();
      }
    }, { passive: true });

    // Initial setup
    updateSlider(0);
    resetAutoSlide();

    testimonialTrack.parentElement?.parentElement?.addEventListener('mouseenter', () => clearInterval(autoSlider));
    testimonialTrack.parentElement?.parentElement?.addEventListener('mouseleave', resetAutoSlide);
  }

  // 6. SEARCH MODAL
  const searchToggle = document.querySelectorAll('.search-toggle');
  const searchModal = document.getElementById('search-modal');
  const searchClose = document.getElementById('search-close');
  const searchInput = document.getElementById('search-input');

  const openSearch = (e) => {
    e?.preventDefault();
    searchModal?.classList.remove('hidden');
    setTimeout(() => {
      searchModal?.classList.remove('opacity-0');
      searchInput?.focus();
    }, 10);
  };

  const closeSearch = () => {
    searchModal?.classList.add('opacity-0');
    setTimeout(() => searchModal?.classList.add('hidden'), 300);
  };

  searchToggle.forEach((btn) => btn.addEventListener('click', openSearch));
  searchClose?.addEventListener('click', closeSearch);
  searchModal?.addEventListener('click', (e) => {
    if (e.target === searchModal) closeSearch();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && searchModal && !searchModal.classList.contains('hidden')) {
      closeSearch();
    }
  });

  // 7. TOAST NOTIFICATION UTILITY
  window.showToast = (message, type = 'success') => {
    const toastContainer = document.getElementById('toast-container') || (() => {
      const el = document.createElement('div');
      el.id = 'toast-container';
      el.className = 'fixed bottom-6 right-6 z-50 flex flex-col space-y-3';
      document.body.appendChild(el);
      return el;
    })();

    const toast = document.createElement('div');
    const isSuccess = type === 'success';
    toast.className = `flex items-center px-4 py-3 rounded-lg shadow-xl text-white transform transition-all duration-300 translate-y-8 opacity-0 ${
      isSuccess ? 'bg-[#181924] border-l-4 border-[#f17c34]' : 'bg-red-600'
    }`;
    toast.innerHTML = `
      <div class="mr-3 text-[#f17c34]">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <div class="text-sm font-medium">${message}</div>
    `;

    toastContainer.appendChild(toast);
    setTimeout(() => toast.classList.remove('translate-y-8', 'opacity-0'), 10);

    setTimeout(() => {
      toast.classList.add('opacity-0', 'translate-y-2');
      setTimeout(() => toast.remove(), 300);
    }, 4000);
  };

  // 8. INTERACTIVE FORMS
  document.querySelectorAll('form.ajax-form').forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const origText = submitBtn ? submitBtn.innerHTML : '';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
          <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
          </svg> Đang gửi...
        `;
      }

      setTimeout(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = origText;
        }
        form.reset();
        window.showToast('Cảm ơn bạn! Yêu cầu của bạn đã được gửi thành công. Chúng tôi sẽ liên hệ trong ít phút.');
      }, 1000);
    });
  });
});
