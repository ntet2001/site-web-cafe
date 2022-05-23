const Hamburger= document.querySelector('.hamburger');
const navlinks = document.querySelector('header .navbar nav .navlink');
Hamburger.addEventListener('click',()=>{
    navlinks.classList.toggle("open");
})