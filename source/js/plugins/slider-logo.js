export default function() {
    const $block = $(this);
    const $slider = $block.find('.slider-logo__slider');
    const $sliderContainer = $block.find('.slider-logo__slider-container');

    let slidesPerView = 'auto';

    const mySwiper = new Swiper($sliderContainer[0], {
        slidesPerView: 5,
        loop: 'auto',
        grabCursor: true,
        spaceBetween: 40,
        navigation: {
            nextEl: $slider.find('.slider-logo__arrow_left'),
            prevEl: $slider.find('.slider-logo__arrow_right')
        },
        breakpoints: {
            414: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            580: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1023: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            1199: {
                spaceBetween: 30
            },
        }
    });
    mySwiper.init();
}