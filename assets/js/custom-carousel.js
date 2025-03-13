jQuery(document).ready(function($) {
    $('.news-posts-container').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        centerPadding: '20px',
        // autoplay: true,
        // autoplaySpeed: 3000,
        arrows: true, // Показывать стрелки
        dots: true,   // Показывать точки
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});