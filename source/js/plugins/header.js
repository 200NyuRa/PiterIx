import ScrollModule from '../classes/core/ScrollModule';

export default function() {

    const $header = $(this),
        $menuBtnOpen = $header.find('.header__menu-btn'),
        $menuMobile = $header.find('.header__mobile-menu'),
        $menuBtnClose = $header.find('.header__close-mobile'),
        myScrollModule = new ScrollModule();
    let timeout;

    if(app.device.isPhone) {
        $menuBtnOpen.on('click', () => {
            $header.addClass('header_open-menu');
            myScrollModule.lockScroll();
            $menuBtnOpen.fadeOut(150);
            $menuMobile.css({
                opacity: 1,
                visibility: 'visible'
            })
        });

        $menuBtnClose.on('click', () => {
            $header.removeClass('header_open-menu');
            myScrollModule.unlockScroll();
            $menuBtnOpen.fadeIn(150);
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                $menuMobile.removeAttr('style');
            }, 350)
        });

        $menuMobile.click(function(e) {
            !$(e.target).closest('.modal__content').length && closeModal();
        });
    } else {
        $header.removeClass('header_open-menu');
        $menuBtnOpen.removeAttr('style');
    }
}