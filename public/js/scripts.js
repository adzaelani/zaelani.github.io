const navLinks = document.querySelectorAll(".nav-item");
const menuToggle = document.getElementById("navbarNav");
const bsCollapse = new bootstrap.Collapse(menuToggle, { toggle: false });
navLinks.forEach((l) => {
    l.addEventListener("click", () => {
        bsCollapse.toggle();
    });
});

gsap.from(".jumbotron img", {
    duration: 1.5,
    y: "-100%",
    opacity: 0,
    ease: "bounce",
});

gsap.to(".lead", {
    duration: 2,
    delay: 1.5,
    text: "Fresh Graduate | Teknik Informatika",
});

AOS.init({ once: true });
