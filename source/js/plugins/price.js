import Accordion from "../classes/Accordion";

export default function(){
    const $block = $(this);
    const $blockList = $(this).find('.price__list');
    const $blockItem = $(this).find('.price__item');

    $blockItem.each(function() {
        const $item = $(this);

        new Accordion($item, {
            triggerClass: 'price__item-head',
            bodyClass: 'price__item-body'
        });
    });

}