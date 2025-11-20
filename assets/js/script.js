// Smooth Scrolling (Bootstrap handles most already)
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener("click", function () {
        document.querySelector('.navbar-collapse').classList.remove('show');
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".iso-slide");
    let index = 0;

    setInterval(() => {
        slides[index].classList.remove("active");
        index = (index + 1) % slides.length;
        slides[index].classList.add("active");
    }, 5000);
});