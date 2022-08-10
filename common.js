// Asignations

// Hamburger Menu Icon
const $navIcon = document.querySelector(".navbar__hamburger__icon");
// Hamburger Menu Display
const $hambMenu = document.querySelector(".navbar__hamburger__menu");
// Links inside Hamburger Menu
const $hambMenuLink = document.querySelectorAll(".linkMenu");
// toTop Button
const $toTop = document.querySelector(".toTop_btn");




// Open or Close Hamburger menu when click at its Menu Icon
$navIcon.addEventListener("click", () => {
    $navIcon.classList.toggle("active");
    $hambMenu.classList.toggle("menuVisible");
});

// Close Hamburger menu when click at a link inside
$hambMenuLink.forEach((item) => {
    item.addEventListener("click", () => {
        $navIcon.classList.remove("active");
        $hambMenu.classList.remove("menuVisible");
    });
});

// Go to Top when click
$toTop.addEventListener("click", ()=>{
    scrollTo({
        top: 0,
        behavior: 'smooth'
    })
})

// Toggle visibility of toTop button when scroll
document.addEventListener("scroll", () => {
    if (window.scrollY >= 400) {
        $toTop.classList.add("toTopInvisible");
    } else $toTop.classList.remove("toTopInvisible");
});

