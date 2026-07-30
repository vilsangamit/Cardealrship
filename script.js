// =========================
// Car Image Slider
// =========================

const slider = document.getElementById("slider");

const images = [
    "images/car1.jpg",
    "images/car2.jpg",
    "images/car3.jpg"
];

let index = 0;

function changeImage() {
    index++;

    if (index >= images.length) {
        index = 0;
    }

    slider.src = images[index];
}

// Change image every 3 seconds
setInterval(changeImage, 3000);

// =========================
// Mobile Navigation
// =========================

const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

// =========================
// Smooth Scroll
// =========================

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {

            target.scrollIntoView({
                behavior: "smooth"
            });

        }

        navLinks.classList.remove("active");

    });

});

// =========================
// Featured Car Buttons
// =========================

const buttons = document.querySelectorAll(".card button");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        alert("Car details page will be available in the next part.");

    });

});

// =========================
// Sticky Navbar Shadow
// =========================

window.addEventListener("scroll", () => {

    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {

        navbar.style.boxShadow = "0 4px 15px rgba(0,0,0,0.3)";

    } else {

        navbar.style.boxShadow = "none";

    }

});

// =========================
// Fade-in Animation
// =========================

const sections = document.querySelectorAll("section");

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";

        }

    });

}, {
    threshold: 0.2
});

sections.forEach(section => {

    section.style.opacity = "0";
    section.style.transform = "translateY(50px)";
    section.style.transition = "0.8s";

    observer.observe(section);

});