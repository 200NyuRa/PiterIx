export default function(options) {
    const $table = $(this);
    const $tableRow = $table.find('.table__row');
    const $tableTd = $table.find('.table__td');
    const $tableTh = $table.find('.table__th');
    if(app.device.isPhone) {
        $tableRow.each((i, row) => {
            const $tds = $(row).find('td');

            $tds.each((i, td) => {
                const $td = $(td);

                if (!$td.hasClass('table__td_head-mobile')) {
                    const $head = $('<span/>').addClass('table__th-mobile').text($tableTh.eq(i).text());
                    $head.prependTo($td);
                }
            })
        })
    }
}