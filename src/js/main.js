import "../scss/main.scss";
//import { $, $$ } from "./libs/bling";
import Swiper from 'swiper';
import $ from "jquery";

import "../js/test.js";

import "../js/accordions.js";
import "../js/hamburger.js";
import "../js/swiper_configs.js";
import "./nav_scroll_detector.js";

import "./to-do-list.js";


document.addEventListener("DOMContentLoaded", () => {

  /*
  |--------------------------------------------------
  | ScrollTrigger
  |--------------------------------------------------
  */

  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

  $(window).scroll(function () {
    $('.animate-in').each(function () {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('in-view')
      }
    });

  });

  /*
  |--------------------------------------------------
  | ScrollTarget
  |--------------------------------------------------
  */

  $(function () {
    $('.smooth-scroll').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 100
          }, 1000);
          return false;
        }
      }
    });
  });


  /*
  |--------------------------------------------------
  | Testimonial
  |--------------------------------------------------
  */



  /*
  |--------------------------------------------------
  | Logo Slider
  |--------------------------------------------------
  */


  /*
  |--------------------------------------------------
  | Hamburger
  |--------------------------------------------------
  */

  //    const actionMenu = e => {
  //        e.preventDefault();
  //        $(".hamburger").classList.toggle("is-active");
  //    };
  //
  //    $(".hamburger").on("touchstart", actionMenu);
  //    $(".hamburger").on("click", actionMenu);





  /*
  |--------------------------------------------------
  | Layout
  |--------------------------------------------------
  */

});
