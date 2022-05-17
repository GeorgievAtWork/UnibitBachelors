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


// Redirect to Category page function

function redirectCategory(num) {
    $('#category-form').append('<input type="hidden" name="category_id" value="' + num + '" />');
    $('#category-form').submit();
}


//Redirect to Tutor page function

function redirectTutor(num) {
    $('#tutor-form').append('<input type="hidden" name="tutor_id" value="' + num + '" />');
    $('#tutor-form').submit();
}