

const burgerMenu = document.querySelector('.burger-menu');
const menu = document.querySelector('.header__menu');
const body = document.querySelector('body');
const menuLinks = document.querySelectorAll('.header__menu-link');

burgerMenu.addEventListener('click', () =>{
    burgerMenu.classList.toggle('-active');
    menu.classList.toggle('-active');
    body.classList.toggle('-lock');
})

menuLinks.forEach(link =>{
    link.addEventListener('click', () => {
        burgerMenu.classList.remove('-active');
        menu.classList.remove('-active');
        body.classList.remove('-lock');
    })
})


const btnViewTranscript = document.querySelector('.transcript__btn');
if(btnViewTranscript){
    const contentTranscript = document.querySelector('.transcript__content');
    btnViewTranscript.addEventListener('click', () => {
        contentTranscript.classList.toggle('-active');
    })
}
const episodesItem = document.querySelector('.header__menu-item-list');
const episodesList = document.querySelector('.list');
const episidesBtn = document.querySelector('.header__menu-btn')
episodesItem.addEventListener('click', () => {
    episodesList.classList.toggle('-active');
    episidesBtn.classList.toggle('-active');
})


const slider = document.querySelector('.swiper-episodes');
if(slider){
    const swiper = new Swiper('.swiper-episodes', {
        // Optional parameters
        //direction: 'vertical',
        loop: true,
        slidesPerView: 3,

      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
      });
}