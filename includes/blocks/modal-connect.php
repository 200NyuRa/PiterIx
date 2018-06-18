<!-- Modal Connect-->
<div class="modal" data-type="connect">
    <div class="modal__overlay"></div>
    <div class="modal__content">
        <i class="modal__close">
            <i class="modal__close__icon"></i>
        </i>
        <div class="modal__heading">
            <h2>Подключиться</h2>
        </div>
        <div class="modal__inner">
            <div class="modal__form">
                <form action="data/submit.php" class="form" novalidate="novalidate">
                    <div class="form__item">
                        <label class="form__label" for="connectEmail">Email</label>
                        <div class="form__field-wrapper">
                            <input type="text" id="connectEmail" class="form__field" name="name" required>
                        </div>
                    </div>
                    <div class="form__item">
                        <label class="form__label" for="connectLocation">Место подключения</label>
                        <div class="form__choice-panel">
                            <div class="form__choice-point">
                                <input type="radio" class="form__radio" name="connectLocation" value="connectLocation1" id="connectLocation1" checked>
                                <label class="form__choice-label" for="connectLocation1">Санкт-<br/>Петербург</label>
                            </div>
                            <div class="form__choice-point">
                                <input type="radio" class="form__radio" name="connectLocation" value="connectLocation2" id="connectLocation2">
                                <label class="form__choice-label" for="connectLocation2">Москва</label>
                            </div>
                            <div class="form__choice-point">
                                <input type="radio" class="form__radio" name="connectLocation" value="connectLocation3" id="connectLocation3">
                                <label class="form__choice-label" for="connectLocation3">Франкфурт</label>
                            </div>
                            </div>
                        </div>
                    <div class="form__item form__item_indent-big">
                        <label class="form__label" for="numberAS">Номер AS</label>
                        <input type="text" class="form__field" name="numberAS" id="numberAS" required="">
                    </div>
                    <button class="form__submit button" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Connect-->