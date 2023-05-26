import domReady from '@roots/sage/client/dom-ready';

import Swiper, {Navigation, Pagination} from "swiper";

/**
 * Application entrypoint
 */
domReady(async () => {

  const hamburger = document.querySelector('#tt-header__hamburger');

  if (hamburger) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('tt-header__hamburger--active');
      document.querySelector('.tt-menu__nav').classList.toggle('tt-menu__nav--active');
    });
  }

  // Swiper

  const swiper = new Swiper('.tt-swiper-container', {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: "fraction"
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // Darkmode

  const toggleDarkModeButton = document.getElementById("tt-darkmode-toggle");
  const body = document.body;

  // Apply the user's preference from localStorage
  const storedTheme = localStorage.getItem("dark-mode");
  if (storedTheme === "true") {
    body.classList.add("dark-theme");
  } else {
    body.classList.remove("dark-theme");
  }

  // Toggle the theme

  toggleDarkModeButton.addEventListener("click", () => {
    body.classList.toggle("dark-theme");
    localStorage.setItem("dark-mode", body.classList.contains("dark-theme"));
  });


  // Change View Mode
  // Function to add class to "tt-swiper-container"
  function setViewMode() {
    const selectedValue = document.getElementById("tt_view_mode").value;
    const swiperContainer = document.querySelector('.tt-swiper-container');

    if (selectedValue === "fit-height") {
      swiperContainer.classList.add("fit-height-mode");
      swiperContainer.classList.remove("full-mode");
    } else if (selectedValue === "full") {
      swiperContainer.classList.add("full-mode");
      swiperContainer.classList.remove("fit-height-mode");
    }

    // Save selected value to local storage
    localStorage.setItem("viewMode", selectedValue);
  }

  // Check if view mode is stored in local storage and apply it
  const storedViewMode = localStorage.getItem("viewMode");
  if (storedViewMode) {
    document.getElementById("tt_view_mode").value = storedViewMode;
    setViewMode();
  }

  // Add event listener for select element change
  document.getElementById("tt_view_mode").addEventListener("change", setViewMode);

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
