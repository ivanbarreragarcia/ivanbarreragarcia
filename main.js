// Asignations

// All proyects
const $proyects = document.querySelectorAll(
    ".main__portfolio__projects-project"
);

// Scroll
const $scrollBtn = document.getElementById("scrollBtn")
// Portfolio (Scroll target)
const $portfolio = document.getElementById("portfolio")

//  -----------------

// Proyects animations

// Proyects Animation when its appear on screen
const loadProyAnim = (enters, obs) => {
    enters.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add("proyectVisible");
        }
    });
};

const observer = new IntersectionObserver(loadProyAnim, {
    root: null,
    rootMargin: "0px 0px 0px 0px",
    threshold: 0.1,
});

$proyects.forEach((proyect) => {
    observer.observe(proyect);
});

//  -----------------

// Scroll

$scrollBtn.addEventListener("click", ()=>{
    $portfolio.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    })
})