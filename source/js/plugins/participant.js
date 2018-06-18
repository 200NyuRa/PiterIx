import Accordion from "../classes/Accordion";

export default function(){
    const $block = $(this);
    const $blockList = $(this).find('.participant__list');
    const $blockItem = $(this).find('.participant__item');

    $blockItem.each(function() {
        const $item = $(this);
        const $table = $item.find('.participant__table');
        const $quantityCounter = $table.find('.table__row').length;
        const $quantity = $item.find('.participant__item-quantity');

        $quantity.text($quantityCounter +  1);

        new Accordion($item, {
            triggerClass: 'participant__item-head',
            bodyClass: 'participant__item-body'
        });
    });

}
