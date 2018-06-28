import Tabs from '../classes/Tabs.js';

export default function() {
    const $tabs = $(this);
    const $tabsMenu = $(this).find('.tabs__menu');
    const $menuPoint = $(this).find('.tabs__menu-item');
    let widthMenuPoint = 0;


    $.each($menuPoint, (index, el) => {
        widthMenuPoint += $menuPoint.eq(index).innerWidth();
    });


    // tabs
    new Tabs($tabs, {
        itemClass: 'tabs__menu-item',
        contentListClass: 'tabs__tab-wrapper',
        contentItemClass: 'tab',
        changeTabCB: (index) => {
            $('body').trigger('serviceProgramTabChange', index);
        }
    });


    // tabs menu in mobile


    if ($(window).width() < 768 && widthMenuPoint >= $(window).width()) {
        const mySwiper = new Swiper($tabsMenu[0], {
            freeMode: true,
            slidesPerView: 'auto',
            preventClicks: false,
            preventClicksPropagation: false
        });

        $('body').on('serviceProgramTabChange', function(event, index) {
            mySwiper.slideTo(index);
        });
    }
}