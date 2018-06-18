<!-- Modal Login-->
<div class="modal modal_login" data-type="login">
    <div class="modal__overlay"></div>
    <div class="modal__content">
        <i class="modal__close">
            <i class="modal__close__icon"></i>
        </i>
        <div class="modal__heading">
            <h2>Авторизация</h2>
        </div>
        <div class="modal__inner">
            <div class="modal__form">
                <form action="data/submit.php" class="form" novalidate="novalidate">
                    <div class="form__item">
                        <div class="form__label-headline">
                            <label class="form__label" for="username">Username</label>
                            <a href="#" class="form__headline-link link">Lost Username?</a>
                        </div>
                        <div class="form__field-wrapper">
                            <input type="text" id="username" class="form__field" name="username" >
                        </div>
                    </div>
                    <div class="form__item form__item_indent-big">
                        <div class="form__label-headline">
                            <label class="form__label" for="password">Password</label>
                            <a href="#" class="form__headline-link link">Lost Password?</a>
                        </div>
                        <div class="form__field-wrapper">
                            <input type="text" id="password" class="form__field" name="Password" >
                        </div>
                    </div>
                    <button class="form__submit button" type="submit" data-data="" data-type="request"  data-id="1">Заказать звонок</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login-->