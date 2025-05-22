import './bootstrap';


const menuToggle = document.getElementById('menuToggle');
const navbarNav = document.getElementById('navbarNav');

menuToggle.addEventListener('click', () => {
    navbarNav.classList.toggle('hidden');
});