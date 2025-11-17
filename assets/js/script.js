document.addEventListener('DOMContentLoaded', () => {
  const menuBtn = document.querySelector(".menuBtn");
  const Menu = document.querySelector(".nav__navigation");

  // Changing Background on Scroll
  window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 10);
  });

  // Loader Animation
  const webLoader = document.querySelector('.loader');
  window.addEventListener('load', () => {
    webLoader.classList.add('loaderHide');
  });

  // Changing Navigation Bar on Scroll
  let lastScrollTop = 0;

  window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScrollTop > lastScrollTop) {
      // Scrolling down, hide the navigation
      nav.classList.add('hidden');
      nav.classList.remove('visible');
    } else {
      // Scrolling up, show the navigation
      nav.classList.add('visible');
      nav.classList.remove('hidden');
    }

    lastScrollTop = currentScrollTop;
  });

  // Navigation Menu Button Toggle for Small Devices
  menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle("menu-active");
    Menu.classList.toggle("active");
  });

  // Close menu when clicked outside of it or when the page is scrolled
  document.addEventListener('click', (event) => {
    const target = event.target;
    const isMenuBtn = target.closest('.menuBtn');
    const isMenu = target.closest('.nav__navigation');

    if (!isMenuBtn && !isMenu) {
      menuBtn.classList.remove("menu-active");
      Menu.classList.remove("active");
    }
  });

  // Close menu on scroll
  document.addEventListener('scroll', () => {
    menuBtn.classList.remove("menu-active");
    Menu.classList.remove("active");
  });
});

// javascript for Project section select menu
document.addEventListener("DOMContentLoaded", function() {
  const filterOptions = document.getElementById("filter-options");
  const images = document.querySelectorAll(".image");

  filterOptions.addEventListener("change", function() {
      const selectedOption = this.value;
      
      images.forEach(image => {
          if (selectedOption === "all") {
              image.style.display = "block";
          } else if (image.classList.contains(selectedOption)) {
              image.style.display = "block";
          } else {
              image.style.display = "none";
          }
      });
  });
});