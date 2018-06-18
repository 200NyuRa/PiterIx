export default function(options) {
    const $form = $(this);
    const $fields = $form.find('.form__field');

    $fields.on('keyup input change', function () {
        if ($(this).val() !== '' && !$(this).closest('.form__field').hasClass('form__field_full')) {
            $(this).addClass('form__field_full');
        } else if ($(this).val() === '' && $(this).closest('.form__field').hasClass('form__field_full')) {
            $(this).closest('.form__field').removeClass('form__field_full');
        }
    });

    const settings = $.extend({
        ignore: '',
        showErrors: false,
        errorClass: 'i-error',
        validClass: 'i-valid',
        errorPlacement: $.noop
    }, options);

    // init validator
    $form.validate(settings);

    const check = function(e){
        console.log(1);
        $form.validate().element($(e.target));
    };

    const changeEvents = 'change keyup keypress';
    $fields.on(changeEvents, check);
}