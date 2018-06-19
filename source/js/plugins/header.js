import ScrollModule from '../classes/core/ScrollModule';

export default function() {

    const $header = $(this),
        $menuBtnOpen = $header.find('.header__menu-btn'),
        $menuMobile = $header.find('.header__mobile-menu'),
        $menuBtnClose = $header.find('.header__close-mobile'),
        myScrollModule = new ScrollModule();
    let timeout;


    if(app.device.isPhone) {

        const menuMobileOpen = () => {
            $header.addClass('header_open-menu');
            myScrollModule.lockScroll();
            $menuBtnOpen.fadeOut(150);
            $menuMobile.css({
                opacity: 1,
                visibility: 'visible'
            })
        };

        const menuMobileClose = () => {
            $header.removeClass('header_open-menu');
            myScrollModule.unlockScroll();
            $menuBtnOpen.fadeIn(150);
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                $menuMobile.removeAttr('style');
            }, 350)
        };

        $menuBtnOpen.on('click', () => {
            menuMobileOpen();
        });

        $menuBtnClose.on('click', () => {
            menuMobileClose();
        });

        $menuMobile.click(function(e) {
            !$(e.target).closest('.header__mobile-menu-inner').length && menuMobileClose();
        });

    } else {
        $header.removeClass('header_open-menu');
        $menuBtnOpen.removeAttr('style');
    }
}