const menuEnBurgers = document.querySelector('.menu-en-burgers');
const navLinks = document.querySelector('.nav-links');
menuEnBurgers.addEventListener('click', () => {
    navLinks.classList.toggle('mobile-menu')
})

window.addEventListener('scroll', function(){
    const header =document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0 );
});

function toggleMenu(){
    const tmenuToggle = document.querySelector('.menuToggle');
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
    menuToggle.classList.toggle('active');
}