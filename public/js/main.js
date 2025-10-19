(function ($) {
    "use strict";

    /* --------------------------------------------
       Helpers (idempotent)
    ---------------------------------------------*/
    document.body.innerHTML = document.body.innerHTML.replace(/đ/g, 'dj');
    function spinner() {
        setTimeout(function () {
            var $sp = $('#spinner');
            if ($sp.length) $sp.removeClass('show');
        }, 1);
    }

    // WOW: init JEDNOM, posle samo sync
    function initWOWOnce() {
        if (typeof window.WOW !== 'function') return;
        if (!window.__wowInstance) {
            window.__wowInstance = new window.WOW();
            window.__wowInstance.init();
        }
    }
    function syncWOW() {
        if (window.__wowInstance && typeof window.__wowInstance.sync === 'function') {
            window.__wowInstance.sync();
        }
    }

    // GLightbox: singleton + “pametni” refresh
    function initGLightbox() {
        if (typeof window.GLightbox !== 'function') return;

        // Koliko ima .glightbox elemenata u DOM-u
        const total = document.querySelectorAll('.glightbox').length;

        // Ako već imamo instancu i broj se nije promenio — ne radi ništa
        if (window.__glb && window.__glb.__count === total) return;

        // Ako imamo staru instancu, ukloni je
        if (window.__glb && typeof window.__glb.destroy === 'function') {
            try { window.__glb.destroy(); } catch (_) {}
        }

        // Napravi novu instancu
        window.__glb = window.GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            // ako koristiš video, GLightbox radi out of the box (YouTube/Vimeo)
        });

        // Sačuvaj broj elemenata da znamo da li treba refresh sledeći put
        window.__glb.__count = total;
    }

    function bindNavbarListeners() {
        function updateNavbar() {
            if (window.matchMedia("(max-width: 991px)").matches) {
                $('.guestNavbar')
                    .addClass('fixed-top bg-white')
                    .removeClass('sticky-top');
                $("#home").addClass("mt-5 pt-5");
                $(".bg-header").addClass("mt-5 pt-5");
            } else {
                $('.guestNavbar')
                    .addClass('sticky-top')
                    .removeClass('fixed-top bg-white');

                if ($(window).scrollTop() > 45) {
                    $('.guestNavbar').addClass('sticky-top');
                } else {
                    $('.guestNavbar').removeClass('sticky-top');
                }

                $("#home").removeClass("mt-5 pt-5");
                $(".bg-header").removeClass("mt-5 pt-5");
            }
        }

        $(document).off('ready.navbar').on('ready.navbar', updateNavbar);
        $(window).off('scroll.navbar').on('scroll.navbar', updateNavbar);
        $(window).off('resize.navbar').on('resize.navbar', updateNavbar);

        updateNavbar();
    }

    function bindOffcanvasClose() {
        $(document)
            .off('click.offcanvasClose', '.offcanvas-body a')
            .on('click.offcanvasClose', '.offcanvas-body a', function () {
                var el = document.getElementById('offcanvasNavbar');
                if (window.bootstrap && el) {
                    var inst = window.bootstrap.Offcanvas.getInstance(el);
                    if (inst) inst.hide();
                }
            });
    }

    function bindDropdownHover() {
        const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";

        $(window)
            .off('load.dropdown resize.dropdown')
            .on('load.dropdown resize.dropdown', function () {
                if (this.matchMedia("(min-width: 992px)").matches) {
                    $dropdown
                        .off('mouseenter.dropdown mouseleave.dropdown')
                        .on("mouseenter.dropdown", function () {
                            const $this = $(this);
                            $this.addClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "true");
                            $this.find($dropdownMenu).addClass(showClass);
                        })
                        .on("mouseleave.dropdown", function () {
                            const $this = $(this);
                            $this.removeClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "false");
                            $this.find($dropdownMenu).removeClass(showClass);
                        });
                } else {
                    $dropdown.off("mouseenter.dropdown mouseleave.dropdown");
                }
            });
    }

    function bindBackToTop() {
        $(window)
            .off('scroll.backTop')
            .on('scroll.backTop', function () {
                if ($(this).scrollTop() > 100) $('.back-to-top').fadeIn();
                else $('.back-to-top').fadeOut();
            });

        $('.back-to-top')
            .off('click.backTop')
            .on('click.backTop', function () {
                $('html, body').animate({ scrollTop: 0 }, 300, 'easeInOutExpo');
                return false;
            });
    }

    function initCarousels() {
        if (!(typeof $ === 'function' && $.fn && typeof $.fn.owlCarousel === 'function')) return;

        const safeInit = function (sel, opts) {
            $(sel).each(function () {
                const $el = $(this);
                if ($el.hasClass('owl-loaded')) return;
                $el.owlCarousel(opts);
            });
        };

        safeInit(".testimonial-carousel", {
            autoplay: true,
            smartSpeed: 1500,
            dots: true,
            loop: true,
            center: true,
            responsive: {
                0: { items: 1 },
                576: { items: 1 },
                768: { items: 2 },
                992: { items: 3 }
            }
        });

        safeInit(".vendor-carousel", {
            loop: true,
            margin: 45,
            dots: false,
            autoplay: true,
            smartSpeed: 1000,
            responsive: {
                0: { items: 2 },
                576: { items: 4 },
                768: { items: 6 },
                992: { items: 8 }
            }
        });


        safeInit(".text-carousel", {
            loop: true,
            margin: 0,          // ili ostavi mali razmak (npr. 10)
            dots: true,         // stavi true ako hoćeš tačkice
            autoplay: true,
            autoplayTimeout: 4000, // koliko traje jedan slajd
            smartSpeed: 800,    // brzina prelaza
            items: 1            // glavna opcija – uvek 1 po slajdu
        });
    }

    function initCounters() {
        const hasJQCounter = typeof $ === 'function' && $.fn && typeof $.fn.counterUp === 'function';
        if (!hasJQCounter) return;

        const SELECTORS = '[data-toggle="counter-up"], .counter, .counter-up, .counterup';
        const nodes = Array.from(document.querySelectorAll(SELECTORS));
        if (!nodes.length) return;

        const trigger = (el) => {
            const $el = $(el);
            if ($el.data('__counter_inited')) return;

            const raw = ($el.text() || '').toString().trim();
            const normalized = raw.replace(/[^\d.-]/g, '');
            if (normalized !== '' && normalized !== raw) $el.text(normalized);

            $el.counterUp({ delay: 10, time: 2000 });
            $el.data('__counter_inited', true);
        };

        if (!('IntersectionObserver' in window)) {
            nodes.forEach(trigger);
            return;
        }

        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && entry.intersectionRatio >= 0.4) {
                    trigger(entry.target);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: [0, 0.4, 0.7, 1] });

        nodes.forEach((el) => {
            const r = el.getBoundingClientRect();
            const inView = r.top < window.innerHeight && r.bottom > 0;
            if (inView) trigger(el); else io.observe(el);
        });
    }

    /* --------------------------------------------
       Jedan javni init koji možeš zvati više puta
    ---------------------------------------------*/
    window.templateInit = function () {
        spinner();
        bindNavbarListeners();
        bindOffcanvasClose();
        bindDropdownHover();
        bindBackToTop();
        initCarousels();
        initCounters();
        initGLightbox();  // ✅ GLightbox init/refresh
        syncWOW();        // WOW sync
    };

    /* --------------------------------------------
       Auto init na stranicama bez Vue
    ---------------------------------------------*/
    $(function () {
        initWOWOnce();
        window.templateInit && window.templateInit();

    });

    document.addEventListener('shown.bs.tab', function () {
        window.templateInit && window.templateInit();
    });
    document.addEventListener('shown.bs.collapse', function () {
        window.templateInit && window.templateInit();
    });
    document.addEventListener('shown.bs.offcanvas', function (e) {
        if (e.target && e.target.id === 'offcanvasNavbar') {
            // za meni obično nije potrebno ništa
            return;
        }
        window.templateInit && window.templateInit();
    });

})(jQuery);
