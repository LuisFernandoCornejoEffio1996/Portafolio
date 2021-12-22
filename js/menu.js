const nav = document.querySelector('.contenedor');
const menu_btnOpen = document.querySelector('.nav-open');
const menu_btnClose = document.querySelector('.nav-close');
const menu = document.querySelector('.menu');
const menuLinks = document.querySelectorAll('.menu a[href^="#"]');
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute("id");
            const menuLink = document.querySelector(`.menu a[href="#${id}"]`);
            if (entry.isIntersecting) {
                document.querySelector(".menu a.selected").classList.remove("selected");
                menuLink.classList.add("selected");
            }
        })
    }, {rootMargin: "-50% 0px -50% 0px"}
);

window.addEventListener('scroll', function(){
    nav.classList.toggle('active', window.scrollY > 0)
})

function toogleMenu(){
    menu.classList.toggle('active'); 
}


function removeMenu(){
    menu.classList.remove('active'); 
}

menu_btnOpen.addEventListener('click', toogleMenu);
menu_btnClose.addEventListener('click', toogleMenu);

menuLinks.forEach(menuLink => {
    menuLink.addEventListener('click', removeMenu);

    const hash = menuLink.getAttribute('href');
    const target = document.querySelector(hash);
    if(target){
        observer.observe(target);
    }
})