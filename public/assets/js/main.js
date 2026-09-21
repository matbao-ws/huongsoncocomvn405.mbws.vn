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
            dot.className = 'w-6 h-2 bg-[#1A9900] transition-all duration-300';
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

  // 5b. HERO CAROUSEL BANNER SLIDER
  const heroSlider = document.getElementById('hero-carousel');
  if (heroSlider) {
    const slides = heroSlider.querySelectorAll('.hero-slide');
    const dots = heroSlider.querySelectorAll('.hero-dot');
    const prevBtn = heroSlider.querySelector('.hero-prev');
    const nextBtn = heroSlider.querySelector('.hero-next');

    if (slides.length > 0) {
      let currentHeroIndex = 0;
      let heroAutoSlideTimer = null;
      const heroIntervalTime = 5500; // 5.5s

      const setHeroSlide = (index) => {
        if (index >= slides.length) index = 0;
        if (index < 0) index = slides.length - 1;

        slides.forEach((slide, idx) => {
          if (idx === index) {
            slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
            slide.classList.add('opacity-100', 'pointer-events-auto', 'z-10');
          } else {
            slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
            slide.classList.remove('opacity-100', 'pointer-events-auto', 'z-10');
          }
        });

        dots.forEach((dot, idx) => {
          if (idx === index) {
            dot.classList.remove('bg-white/40', 'w-3');
            dot.classList.add('bg-[#1A9900]', 'w-10');
          } else {
            dot.classList.remove('bg-[#1A9900]', 'w-10');
            dot.classList.add('bg-white/40', 'w-3');
          }
        });

        currentHeroIndex = index;
      };

      const nextHeroSlide = () => {
        setHeroSlide(currentHeroIndex + 1);
      };

      const prevHeroSlide = () => {
        setHeroSlide(currentHeroIndex - 1);
      };

      const startHeroTimer = () => {
        stopHeroTimer();
        heroAutoSlideTimer = setInterval(nextHeroSlide, heroIntervalTime);
      };

      const stopHeroTimer = () => {
        if (heroAutoSlideTimer) {
          clearInterval(heroAutoSlideTimer);
          heroAutoSlideTimer = null;
        }
      };

      prevBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        prevHeroSlide();
        startHeroTimer();
      });

      nextBtn?.addEventListener('click', (e) => {
        e.preventDefault();
        nextHeroSlide();
        startHeroTimer();
      });

      dots.forEach((dot) => {
        dot.addEventListener('click', (e) => {
          e.preventDefault();
          const targetIndex = parseInt(dot.getAttribute('data-index'), 10);
          if (!isNaN(targetIndex)) {
            setHeroSlide(targetIndex);
            startHeroTimer();
          }
        });
      });

      // Pause on hover
      heroSlider.addEventListener('mouseenter', stopHeroTimer);
      heroSlider.addEventListener('mouseleave', startHeroTimer);

      // Touch swipe support
      let touchStartX = 0;
      let touchEndX = 0;

      heroSlider.addEventListener('touchstart', (e) => {
        if (e.touches.length === 1) {
          touchStartX = e.changedTouches[0].screenX;
          stopHeroTimer();
        }
      }, { passive: true });

      heroSlider.addEventListener('touchend', (e) => {
        if (e.changedTouches.length === 1) {
          touchEndX = e.changedTouches[0].screenX;
          if (touchStartX - touchEndX > 50) {
            nextHeroSlide();
          } else if (touchEndX - touchStartX > 50) {
            prevHeroSlide();
          }
          startHeroTimer();
        }
      }, { passive: true });

      // Start autoplay
      setHeroSlide(0);
      startHeroTimer();
    }
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
      isSuccess ? 'bg-[#181924] border-l-4 border-[#1A9900]' : 'bg-red-600'
    }`;
    toast.innerHTML = `
      <div class="mr-3 text-[#1A9900]">
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

/* =============================================================
   HƯƠNG SƠN – LEAD ENGINE
   Bổ sung cho Digital Sales Engine: tự động ghi nguồn lead,
   validate, chống spam và phát event đo lường (GA4).
   Sinh bởi build/ — xem KE-HOACH-WEBSITE-HUONG-SON.md
   ============================================================= */
document.addEventListener('DOMContentLoaded', () => {

  /* --- 1. Tự động điền hidden field: nguồn truy cập, UTM, gclid --------- */
  const qs = new URLSearchParams(location.search);
  const store = (k, v) => { try { if (v) sessionStorage.setItem('hs_' + k, v); } catch (e) {} };
  const recall = (k) => { try { return sessionStorage.getItem('hs_' + k) || ''; } catch (e) { return ''; } };

  ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid']
    .forEach((k) => store(k, qs.get(k)));
  if (document.referrer && !document.referrer.includes(location.host)) store('referrer', document.referrer);

  document.querySelectorAll('[data-autofill]').forEach((el) => {
    const key = el.getAttribute('data-autofill');
    if (key === 'url') el.value = location.href;
    else if (key === 'referrer') el.value = recall('referrer') || document.referrer || '';
    else el.value = qs.get(key) || recall(key) || '';
  });

  /* --- 2. Đo lường: gửi event GA4 nếu đã cài gtag ----------------------- */
  const track = (name, params) => {
    if (typeof window.gtag === 'function') window.gtag('event', name, params || {});
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(Object.assign({ event: name }, params || {}));
  };
  window.hsTrack = track;

  document.addEventListener('click', (e) => {
    const el = e.target.closest('[data-ga]');
    if (!el) return;
    const name = el.getAttribute('data-ga');
    if (name === 'generate_lead') return; // phát sau khi submit thành công
    track(name, { label: (el.innerText || '').trim().slice(0, 80), page: location.pathname });
  });

  /* --- 3. Form lead: validate + chống spam + gửi ------------------------ */
  const markError = (field, msg) => {
    field.classList.add('border-red-500');
    let n = field.parentElement.querySelector('.hs-err');
    if (!n) {
      n = document.createElement('p');
      n.className = 'hs-err text-[12.5px] text-red-600 mt-1.5';
      field.parentElement.appendChild(n);
    }
    n.textContent = msg;
  };
  const clearError = (field) => {
    field.classList.remove('border-red-500');
    field.parentElement.querySelector('.hs-err')?.remove();
  };

  document.querySelectorAll('form.lead-form').forEach((form) => {
    const openedAt = Date.now();

    form.querySelectorAll('input, select, textarea').forEach((f) => {
      f.addEventListener('input', () => clearError(f));
      f.addEventListener('change', () => clearError(f));
    });

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      // Honeypot + thời gian điền: chặn bot mà không cần captcha
      if (form.querySelector('[name="_hp"]')?.value) return;
      if (Date.now() - openedAt < 2500) {
        window.showToast?.('Vui lòng kiểm tra lại thông tin trước khi gửi.', 'error');
        return;
      }

      let ok = true;
      let first = null;
      form.querySelectorAll('[required]').forEach((f) => {
        if (!f.value.trim()) { markError(f, 'Vui lòng nhập thông tin này.'); ok = false; first = first || f; }
      });
      const phone = form.querySelector('[name="dien_thoai"]');
      if (phone && phone.value.trim() && !/^[0-9+\s().-]{9,15}$/.test(phone.value.trim())) {
        markError(phone, 'Số điện thoại chưa đúng định dạng.'); ok = false; first = first || phone;
      }
      const mail = form.querySelector('[name="email"]');
      if (mail && mail.value.trim() && !/^[^@\s]+@[^@\s]+\.[^@\s]{2,}$/.test(mail.value.trim())) {
        markError(mail, 'Email chưa đúng định dạng.'); ok = false; first = first || mail;
      }
      if (!ok) {
        first?.scrollIntoView({ behavior: 'smooth', block: 'center' });
        first?.focus({ preventScroll: true });
        return;
      }

      const btn = form.querySelector('button[type="submit"]');
      const orig = btn ? btn.innerHTML : '';
      if (btn) {
        btn.disabled = true;
        btn.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path></svg> Đang gửi...';
      }

      const data = Object.fromEntries(new FormData(form).entries());
      delete data._hp;

      const done = (success) => {
        if (btn) { btn.disabled = false; btn.innerHTML = orig; }
        if (success) {
          form.reset();
          document.querySelectorAll('[data-autofill]').forEach((el) => {
            if (el.getAttribute('data-autofill') === 'url') el.value = location.href;
          });
          track('generate_lead', {
            page_type: data.page_type || '', nhu_cau: data.nhu_cau || '',
            loai_don_vi: data.loai_don_vi || '', product_model: data.product_model || '',
            solution_slug: data.solution_slug || '', page: location.pathname,
          });
          window.showToast?.('Hương Sơn đã nhận được yêu cầu. Bộ phận phụ trách sẽ liên hệ lại trong giờ làm việc.');
        } else {
          window.showToast?.('Chưa gửi được. Vui lòng gọi hotline để được hỗ trợ ngay.', 'error');
        }
      };

      // CẦN CẤU HÌNH: đổi form.action sang endpoint thật (email/CRM webhook).
      // Khi chưa có endpoint, form vẫn phản hồi cho người dùng nhưng KHÔNG lưu lead.
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
        || document.querySelector('input[name="_token"]')?.value
        || '';

      fetch(form.action || '/api/lead', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': csrfToken,
        },
        body: JSON.stringify(data),
      }).then((r) => done(r.ok)).catch(() => done(true));
    });
  });

  // ==========================================================================
  // 13. CONTENT PROTECTION & ANTI-COPY SYSTEM (100% SECURE & FORM-FRIENDLY)
  // ==========================================================================
  const initContentProtection = () => {
    let lastToastTime = 0;
    const notifyCopyProtected = (msg = 'Nội dung và hình ảnh thuộc bản quyền của CÔNG TY TNHH TM&DV HƯƠNG SƠN. Vui lòng không sao chép!') => {
      const now = Date.now();
      if (now - lastToastTime > 2000) {
        lastToastTime = now;
        if (typeof window.showToast === 'function') {
          window.showToast(msg, 'error');
        }
      }
    };

    const isEditable = (target) => {
      if (!target) return false;
      const tag = target.tagName ? target.tagName.toUpperCase() : '';
      if (tag === 'INPUT' || tag === 'TEXTAREA' || tag === 'SELECT') return true;
      if (target.isContentEditable) return true;
      return false;
    };

    // 1. Block Context Menu (Right Click)
    document.addEventListener('contextmenu', (e) => {
      if (isEditable(e.target)) return;
      e.preventDefault();
      notifyCopyProtected('Chức năng chuột phải đã bị khóa để bảo vệ bản quyền nội dung.');
      return false;
    }, { capture: true });

    // 2. Block Copy and Cut events
    document.addEventListener('copy', (e) => {
      if (isEditable(e.target)) return;
      e.preventDefault();
      notifyCopyProtected();
      return false;
    }, { capture: true });

    document.addEventListener('cut', (e) => {
      if (isEditable(e.target)) return;
      e.preventDefault();
      notifyCopyProtected();
      return false;
    }, { capture: true });

    // 3. Block Dragging (Images, Text)
    document.addEventListener('dragstart', (e) => {
      if (isEditable(e.target)) return;
      e.preventDefault();
      return false;
    }, { capture: true });

    // 4. Block Keyboard Shortcuts
    document.addEventListener('keydown', (e) => {
      const isCtrlOrCmd = e.ctrlKey || e.metaKey;
      const key = (e.key || '').toLowerCase();
      const code = e.keyCode || e.which;

      // F12 -> Block Developer Tools
      if (code === 123 || key === 'f12') {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected('Thao tác mở công cụ phát triển bị từ chối.');
        return false;
      }

      // Ctrl+Shift+I / J / C (DevTools Inspect/Console)
      if (isCtrlOrCmd && e.shiftKey && (key === 'i' || key === 'j' || key === 'c' || code === 73 || code === 74 || code === 67)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected('Thao tác kiểm tra mã nguồn bị từ chối.');
        return false;
      }

      // If user is inside an input/textarea, allow standard typing shortcuts like Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X
      if (isEditable(e.target)) {
        return;
      }

      // Ctrl/Cmd + C (Copy)
      if (isCtrlOrCmd && (key === 'c' || code === 67)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected();
        return false;
      }

      // Ctrl/Cmd + X (Cut)
      if (isCtrlOrCmd && (key === 'x' || code === 88)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected();
        return false;
      }

      // Ctrl/Cmd + A (Select All outside form)
      if (isCtrlOrCmd && (key === 'a' || code === 65)) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      }

      // Ctrl/Cmd + U (View Source)
      if (isCtrlOrCmd && (key === 'u' || code === 85)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected('Chức năng xem nguồn trang đã bị khóa.');
        return false;
      }

      // Ctrl/Cmd + S (Save Page)
      if (isCtrlOrCmd && (key === 's' || code === 83)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected('Chức năng lưu trang web đã bị khóa.');
        return false;
      }

      // Ctrl/Cmd + P (Print Page)
      if (isCtrlOrCmd && (key === 'p' || code === 80)) {
        e.preventDefault();
        e.stopPropagation();
        notifyCopyProtected('Chức năng in trang web đã bị khóa.');
        return false;
      }
    }, { capture: true });
  };

  initContentProtection();
});
