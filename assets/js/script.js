
const swiper = new Swiper('.slider_1', {

    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 4,
    loop: true,
    loopFillGroupWithBlank: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    transitionStyle: "fade",
    responsive:
    {
        0: { items: 1, margin: 0, stagePadding: 0 },
        497: { items: 2, margin: 10, stagePadding: 0 },
        680: { items: 2, margin: 10, stagePadding: 0 },
        768: { items: 3, margin: 10, stagePadding: 0 },
        992: { items: 3, margin: 0, stagePadding: 0 },
        1280: { items: 4, margin: 25, stagePadding: 0 }
    }

})

