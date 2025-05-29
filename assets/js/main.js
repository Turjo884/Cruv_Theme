(function ($) {
  "use strict";

  // 2. Register GSAP Plugins
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  // 3. Scroll Smoothing (Enable smooth scrolling for desktop devices)
  var device_width = window.screen.width;

  if (device_width > 767) {
    if (
      document.querySelector("#has_smooth").classList.contains("has-smooth")
    ) {
      const smoother = ScrollSmoother.create({
        smooth: 0,
        effects: device_width < 1025 ? false : true,
        smoothTouch: 0.1,
        normalizeScroll: {
          allowNestedScroll: true,
        },
        ignoreMobileResize: true,
      });
    }
  }

  // Data Css js
  $("[data-background]").each(function () {
    $(this).css(
      "background-image",
      "url( " + $(this).attr("data-background") + "  )"
    );
  });

  // 4. Side Info and Offcanvas Logic
  $(".side-info-close,.offcanvas-overlay").on("click", function () {
    $(".side-info").removeClass("info-open");
    $(".offcanvas-overlay").removeClass("overlay-open");
  });
  $(".side-toggle").on("click", function () {
    $(".side-info").addClass("info-open");
    $(".offcanvas-overlay").addClass("overlay-open");
  });

  $(window).scroll(function () {
    if ($("body").scrollTop() > 0 || $("html").scrollTop() > 0) {
      $(".side-info").removeClass("info-open");
      $(".offcanvas-overlay").removeClass("overlay-open");
    }
  });

  // 5. MeanMenu Activation (Responsive menu for mobile devices)
  $(".main-menu").meanmenu({
    meanScreenWidth: "1199",
    meanMenuContainer: ".mobile-menu",
    meanMenuCloseSize: "28px",
  });
  $(".main-menu-all").meanmenu({
    meanScreenWidth: "5000",
    meanMenuContainer: ".mobile-menu",
    meanMenuCloseSize: "28px",
  });

  // Preloader Animation
  if (document.querySelectorAll(".loader-wrap").length > 0) {
    $(document).ready(function () {
      // Preloader Timeout
      setTimeout(function () {
        $("#container").addClass("loaded");
      }, 500);

      // Fade out loader-wrap
      setTimeout(function () {
        $(".loader-wrap").fadeOut(1000, function () {
          $(this).remove();
        });
      }, 3000);

      // Odometer Counter
      $(".odometer").waypoint(
        function (direction) {
          if (direction === "down") {
            let countNumber = $(this.element).attr("data-count");
            $(this.element).html(countNumber);
          }
        },
        {
          offset: "80%",
        }
      );
    });

    const svg = document.getElementById("svg");
    const tl = gsap.timeline();
    const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
    const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

    tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
      delay: 1.5,
      y: -100,
      opacity: 0,
    });
    tl.to(svg, {
      duration: 0.5,
      attr: {
        d: curve,
      },
      ease: "power2.easeIn",
    }).to(svg, {
      duration: 0.5,
      attr: {
        d: flat,
      },
      ease: "power2.easeOut",
    });
    tl.to(".loader-wrap", {
      y: -1500,
      opacity: 0,
      duration: 0.6,
      ease: "power1.out",
    });
    tl.set(".loader-wrap", {
      zIndex: -1,
      display: "none",
    });

    tl.from(
      "main",
      {
        y: 100,
        opacity: 0,
        delay: 0.3,
      },
      "-=1.5"
    );
  }

  new WOW().init();

  /*======================================
      MagnificPopup video view
      ========================================*/
  $(".popup-video").magnificPopup({
    type: "iframe",
  });
  /*======================================
      MagnificPopup image view
      ========================================*/
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });

  // 11. FAQ Accordion Logic
  $(document).ready(function () {
    $(".faq-accordion-button").click(function () {
      $(this).find(".pluse-icon").toggleClass("pluse-icon-rotate");
    });
  });

  // 12. Title Animation with GSAP
  if (document.querySelectorAll(".rr-title-anim").length > 0) {
    let titles = document.querySelectorAll(".rr-title-anim");

    titles.forEach((title) => {
      let split = new SplitText(title, { type: "chars, words" });

      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: title,
          start: "top bottom",
          toggleActions: "play none none reverse",
          onEnter: () => tl.timeScale(2.3),
          onLeaveBack: () => tl.timeScale(2.3).reverse(),
        },
      });

      tl.from(split.chars, {
        opacity: 0,
        y: 50,
        rotation: 1,
        duration: 2,
        ease: "back",
        stagger: 0.06,
      });
    });
  }

  // 13. hero__featured__active
  if (document.querySelector(".hero__featured__active")) {
    var swiperfeedback = new Swiper(".hero__featured__active", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      centeredSlides: true,
      autoplay: true,
      centerMode: false,
      speed: 400,
      navigation: {
        nextEl: ".hero__featured__next",
        prevEl: ".hero__featured__prev",
      },
    });
  }

  // 14. brand-slide__active
  if (document.querySelector(".brand-slide__active")) {
    document.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper(".brand-slide__active", {
        slidesPerView: "auto",
        spaceBetween: 30,
        speed: 3000,
        loop: true,
        freeMode: false,
        allowTouchMove: false,
        autoplay: {
          delay: 1,
        },
      });
    });
  }

  // 14. brand-slide__active
  if (document.querySelector(".brand-slide-2__active-2")) {
    const swiper = new Swiper(".brand-slide-2__active-2", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 3000,
      loop: true,
      freeMode: false,
      allowTouchMove: false,
      autoplay: {
        delay: 1,
      },
    });
  }

  // 14.testimonial-slider__active
  if (document.querySelector(".testimonial-slider__active")) {
    document.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper(".testimonial-slider__active", {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        centeredSlides: true,
        autoplay: true,
        centerMode: false,
        speed: 600,
        navigation: {
          nextEl: ".testimonial__next",
          prevEl: ".testimonial__prev",
        },
      });
    });
  }

  // 14.testimonial__active
  if (document.querySelector(".testimonial")) {
    const items = document.querySelectorAll(".testimonial__item");
    const container = document.querySelector(".testimonial__wrapper"); // use the right container
    let current = 0;
    let interval;

    function setActive(index) {
      items.forEach((item) => item.classList.remove("active"));
      items[index].classList.add("active");
    }

    function nextItem() {
      current = (current + 1) % items.length;
      setActive(current);
    }

    function prevItem() {
      current = (current - 1 + items.length) % items.length;
      setActive(current);
    }

    function startAutoplay() {
      interval = setInterval(nextItem, 5000);
    }

    function stopAutoplay() {
      clearInterval(interval);
    }

    // Initial setup
    setActive(current);
    startAutoplay();

    // Button events
    document.querySelectorAll(".testimonial__prev").forEach((btn) => {
      btn.addEventListener("click", () => {
        prevItem();
        stopAutoplay();
        startAutoplay();
      });
    });

    document.querySelectorAll(".testimonial__next").forEach((btn) => {
      btn.addEventListener("click", () => {
        nextItem();
        stopAutoplay();
        startAutoplay();
      });
    });

    // Hover pause
    container.addEventListener("mouseenter", stopAutoplay);
    container.addEventListener("mouseleave", startAutoplay);
  }

  // text slider
  if (document.querySelector(".title-slider__active")) {
    document.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper(".title-slider__active", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: true,
        speed: 25000,
        loop: true,
        freeMode: false,
        allowTouchMove: false,
        autoplay: {
          delay: 1,
        },
      });
    });
  }

  // text slider
  if (".title-slider__active-2") {
    var text_slider = new Swiper(".title-slider__active-2", {
      slidesPerView: "auto",
      loop: true,
      autoplay: true,
      spaceBetween: 20,
      speed: 20000,
      allowTouchMove: false,
      autoplay: {
        delay: 1,
      },
    });
  }

  /*testimonial__slider***/
  let clienttestimonial__slider = new Swiper(".client-slider__active", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    clickable: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".client-slider__dot",
      clickable: true,
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  // 14. text-slider__active
  if (document.querySelector(".text-slider-2__active")) {
    const text_slider = new Swiper(".text-slider-2__active", {
      slidesPerView: "auto",
      spaceBetween: 30,
      speed: 3000,
      loop: true,
      freeMode: false,
      allowTouchMove: false,
      autoplay: {
        delay: 1,
      },
    });
  }

  /*choose-us__active***/
  let choose_us__active = new Swiper(".choose-us__active", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    clickable: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      prevEl: ".choose-us__slider__arrow-next",
      nextEl: ".choose-us__slider__arrow-prev",
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });
  /*choose-us__active***/
  let services_slider = new Swiper(".services-slider__active", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    clickable: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      prevEl: ".services-slider__arrow-next",
      nextEl: ".services-slider__arrow-prev",
    },
  });

  var swiper = new Swiper(".tpcauses-text-slider-active", {
    slidesPerView: "auto",
    spaceBetween: 30,
    freemode: true,
    centeredSlidea: true,
    loop: true,
    speed: 4000,
    allowTouchMove: false,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
    },
  });

  /*** Scroll Nav - For any anchor with # in href */
  var link = $('a[href^="#"]:not([href="#"])');

  link.on("click", function (e) {
    var target = $($(this).attr("href"));
    if (target.length) {
      $("html, body").animate(
        {
          scrollTop: target.offset().top - 76,
        },
        600
      );
      $("a").parent().removeClass("active"); // Optional: remove 'active' from all links
      $(this).parent().addClass("active");
      e.preventDefault();
    }
  });
})(jQuery);
