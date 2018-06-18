import ScrollModule from '../classes/core/ScrollModule';

export default function() {
    const $block = $(this);
    const $allModals = $('.modal');
    const modalType = $block.data('type');
    const $close = $block.find('.modal__close');
    const $content = $block.find('.modal__content');
    const myScrollModule = new ScrollModule();
    let timeout;

    const openModal = () => {
        $block.addClass('modal_opened');
        myScrollModule.lockScroll();
        $block.css({
            opacity: 1,
            visibility: 'visible'
        })
    };

    const closeModal = () => {
        $block.removeClass('modal_opened');
        myScrollModule.unlockScroll();

        clearTimeout(timeout);

        timeout = setTimeout(()=> {
            $block.removeAttr('style');
        }, 350 )
        // $(app.dom.body).triggerHandler('clearPopapForm');
    };

    $('body').on('click', '[data-open-modal="true"]', function(e, data){
        e.preventDefault();
        const type = $(e.target).closest('[data-open-modal]').data('type');

        if (type !== modalType) return false;

        $allModals.not($block).removeClass('modal_opened');
        openModal();
    });

    $close.click(function() {
        closeModal();
    });

    $block.click(function(e) {
        if (app.sizes.width > 479) {
            (!($(e.target).closest('.modal__content').length)) && closeModal();
        }
    });
}