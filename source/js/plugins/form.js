export default function(options) {
    const $form = $(this);
    const $fields = $form.find('.form__field');
    const $choicePannel = $form.find('.form__choice-panel');

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
        $form.validate().element($(e.target));
    };

    const changeEvents = 'change keyup keypress';

    $fields.on(changeEvents, check);

    //clearForm
    $form.on('clearForm', () => {

        if($fields.length) {
            $.each($fields, (i, field) => {
                if($(field).val() !== '') $(field).val('');
            });
        }

        if($choicePannel.length) {
            $choicePannel.find('[type="radio"]').first().prop('checked',true);
        }
    });
};