export default function() {
    const $tooltip = $(this);
    const $hint = $('#root').find('.hint');
    const $hintTriangle =  $hint.find('.hint__triangle');
    const posCorrection = 18;

    const closeTooltip = () => {

        TweenMax.to($hint, 0.35, { y: '+=10px', opacity: 0, ease: Power1.easeOut, onComplete: function() {
                $hint.css('left', '-5000%');
                $hint.css('top', '-5000%');
                TweenMax.set($hint, { y: '=0'});
                $hintTriangle.removeAttr('style');
            } });
    };

    const openTooltip = () => {
        const tooltipPos = $tooltip.offset();
        let startPosition = tooltipPos.left + $tooltip.innerWidth()/2 - posCorrection;

        $hint.find('.hint__content').html($tooltip.data('title') || '');

        if(startPosition + $hint.innerWidth()>= $(window).width()) {
            $hint.css({
                'right': 20,
                'left': 'auto'
            });

            if(tooltipPos.left >= $hint.offset().left) {
                $hintTriangle.css({
                    left: tooltipPos.left - $hint.offset().left + 6
                })
            }
        }
        else {
            $hint.css('left', startPosition);
        }

        $hint.css('top', tooltipPos.top - $hint.outerHeight() - 10);
        TweenMax.fromTo($hint, 0.35, { y: '+=10', opacity: 0, ease: Power1.easeOut }, { y: '=0', opacity: 1});
    };

    $tooltip.hover (
        function(e) {
            e.preventDefault();

            if($('#root').find('.hint').css('opacity') != 1 ) {
                openTooltip();
            }
        },
        function(e) {
            e.preventDefault();

            if($('#root').find('.hint').css('opacity') == 1 ) {
                closeTooltip();
            }
        }
    );

    $tooltip.on('click', function(e) {
        e.preventDefault();

        if($('#root').find('.hint').css('opacity') != 1 ) {
            openTooltip();
        } else {
            closeTooltip();
        }
    });


    $(window).on('click', function(e) {
        if(
            $('#root').find('.hint').css('opacity') == 1 &&
            !$(e.target).closest('.hint').length
        ) {
            closeTooltip();
        }

    });

    $(window).on('scroll', function(e) {
        const elementOffetTop = $('#root').find('.hint').offset().top;
        const elementOffetDown = elementOffetTop+ $('#root').find('.hint').innerHeight();
        const flagHidden =
            elementOffetDown <= $(window).scrollTop() + $('.header').innerHeight() ||
            elementOffetTop >= $(window).scrollTop() + $(window).innerHeight();
        if($('#root').find('.hint').css('opacity') == 1 && flagHidden) {
            closeTooltip();
        }
    });

}