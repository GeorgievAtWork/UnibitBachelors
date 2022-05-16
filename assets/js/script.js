AOS.init();

// Scroll to top button

const btnScrollToTop = document.querySelector(".scrollToTopBtn");

window.addEventListener("scroll", () => { 
  if (window.pageYOffset > 100) { 
    btnScrollToTop.classList.add("active"); 
  } else { 
    btnScrollToTop.classList.remove("active"); 
  } 
});

