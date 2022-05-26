/**
 * Hamburger open and close
 */
const Hamburger= document.querySelector('.hamburger');
const navlinks = document.querySelector('header .navlink');
const links = document.querySelectorAll('header .navlink li a');

Hamburger.addEventListener('click',()=>{
    navlinks.classList.toggle("open");
})
for (let index = 0; index < links.length; index++) {
    links[index].addEventListener('click',()=>{
        navlinks.classList.remove("open");
    })
}

