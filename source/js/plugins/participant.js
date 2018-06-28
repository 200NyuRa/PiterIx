import Accordion from "../classes/Accordion";

export default function(){
    const $block = $(this);
    const $blockList = $block.find('.participant__list');
    const $blockItem = $block.find('.participant__item');

    $blockItem.each(function(index, element) {
        const $item = $(element);
        const $table = $item.find('.table');
        const $quantityCounter = $table.find('.table__row').length;
        const $quantity = $item.find('.participant__item-quantity');

        $quantity.text($quantityCounter +  1);

        new Accordion($item, {
            triggerClass: 'participant__item-head',
            bodyClass: 'participant__item-body'
        });
    });

}
