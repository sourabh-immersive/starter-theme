/*
 |--------------------------------------------------
 | Slider
 |--------------------------------------------------
 */

import Swiper from "swiper";

document.addEventListener("DOMContentLoaded", () => {
  var swiperHero = new Swiper(".hero .swiper-container", {
    navigation: {
      nextEl: ".hero .swiper-button-next",
      prevEl: ".hero .swiper-button-prev",
    },
    centeredSlides: true,
    loop: true,
    slidesPerView: "1",
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3500,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      // dynamicBullets: true,
    },
  });

  var swiperTestimonial = new Swiper(".testimonials .swiper-container", {
    navigation: {
      nextEl: ".testimonials .swiper-container .swiper-button-next",
      prevEl: ".testimonials .swiper-container .swiper-button-prev",
    },
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      // dynamicBullets: true,
    },
    loop: true,
    slidesPerView: "1",
    spaceBetween: 0,
    centeredSlides: true,
    speed: 1000,
    autoplay: {
      delay: 3500,
    },
  });

  var swiperGallery = new Swiper(".image_gallery_slider .swiper-container", {
    navigation: {
      nextEl: ".image_gallery_slider .swiper-container .swiper-button-next",
      prevEl: ".image_gallery_slider .swiper-container .swiper-button-prev",
    },
    pauseOnMouseEnter: true,
    centeredSlides: true,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    //   // dynamicBullets: true,
    // },
    loop: true,
    // slidesPerView: '3',
    spaceBetween: 30,
    speed: 1000,

    slidesPerView: "auto",

    autoplay: {
      delay: 3500,
    },

    breakpoints: {
      // when window width is <= 320px
      // 320: {
      //     slidesPerView: 1,
      // },
      // // when window width is <= 480px
      // 425: {
      //     slidesPerView: 2,
      // },
      // // when window width is <= 640px
      // 768: {
      //     slidesPerView: 3,
      // },
    },
  });

  var swiperPageIntro = new Swiper(".pb-page_intro .page-intro-swiper", {
    navigation: {
      nextEl: ".pb-page_intro .page-intro-swiper .swiper-button-next",
      prevEl: ".pb-page_intro .page-intro-swiper .swiper-button-prev",
    },

    pagination: {
      // el: ".swiper-pagination",
      // clickable: true,
      // dynamicBullets: true,
    },
    loop: true,
    slidesPerView: "1",
    spaceBetween: 0,
    // centeredSlides: true,
    speed: 1000,
    // autoplay: {
    // delay: 3500,
    // }
  });

  var swiperLogos = new Swiper(".swiper-container.logo-carousel", {
    effect: "slide",
    speed: 900,
    slidesPerView: 5,
    spaceBetween: 20,
    simulateTouch: true,
    autoplay: {
      delay: 5000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".carousel-gallery .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is <= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      // when window width is <= 480px
      425: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      // when window width is <= 640px
      768: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      960: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      1110: {
        slidesPerView: 8,
        spaceBetween: 40,
      },
    },
  });
});
