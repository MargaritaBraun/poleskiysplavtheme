console.log('swip');

// custom-slick.js
jQuery(document).ready(function($) {
    $('.swiper').slick({
        dots: true, // Показать точки навигации
        infinite: true, // Зациклить слайды
        speed: 500, // Скорость перехода
        slidesToShow: 1, // Количество слайдов для показа
        slidesToScroll: 1, // Количество слайдов для прокрутки
        autoplay: true, // Автозапуск
        autoplaySpeed: 2000, // Скорость автозапуска
    });
});

// document.addEventListener("DOMContentLoaded", function () {
//     const swiperContainer = document.querySelector('.swiper');
//     console.log('swiper', swiperContainer);
// const swiper = new Swiper('.swiper', {
//     // configure Swiper to use modules
//     // modules: [Navigation, Pagination],
//     // ...

//     // Optional parameters
//   direction: 'vertical',
//   loop: true,

//   // If we need pagination
//   pagination: {
//     el: '.swiper-pagination',
//   },

//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

//   // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
// });
// });