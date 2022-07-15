class BannerSlider {
    constructor() {
const swiper = new Swiper('.swiper', {
    // Optional parameters
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    speed: 3000,
    lazyLoading: true,
    keyboard: {
        enabled: true
      },
    autoplay: true,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  });
}
}
export default BannerSlider
