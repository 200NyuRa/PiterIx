<!DOCTYPE html>
<html lang="ru">
<? include('../includes/template/head.php'); ?>
<body>

	<!_ Page _>
	<div class="page" id="root">
		<header class="header">
            <div class="header__container">
                <div class="header__contant">
                    <div class="header__logo">
                        <img class="header__logo-img" src="./images/logo.svg" alt="logo Piter ix">
                    </div>

                    <div class="header__mobile-menu">
                        <div class="header__mobile-menu-inner">
                            <div class="header__top">
                                <div class="header__contacts">
                                    <a href="tel:+78126121104" class="header__contact-link header__contact-link_tel">+7 812 612-11-04</a>
                                    <a href="mailto:info@piter-ix.ru" class="header__contact-link">info@piter-ix.ru</a>
                                </div>

                                <div class="header__block">
                                    <div class="header__lang">
                                        <a class="header__lang-link header__lang-link_active" href="#">ru</a>
                                        <a class="header__lang-link" href="#">en</a>
                                    </div>
                                    <div class="header__social">
                                        <ul class="social">
                                            <li class="social__item">
                                                <a href="#" class="social__link social__link_vk"></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link social__link_fb"></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="#" class="social__link social__link_tw"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header__bottom">
                                <div class="header__menu menu menu_header">
                                    <ul class="menu__nav menu__nav">
                                        <li class="menu__item">
                                            <a href="#" class="menu__link">О сети</a>
                                        </li>
                                        <li class="menu__item">
                                            <a href="#" class="menu__link">Участники</a>
                                        </li>
                                        <li class="menu__item">
                                            <a href="#" class="menu__link">Техника</a></li>
                                        <li class="menu__item">
                                            <a href="#" class="menu__link">Цены</a>
                                        </li>
                                        <li class="menu__item">
                                            <a href="#" class="menu__link">Контакты</a>
                                        </li>
                                    </ul>
                                    <a class="menu__connect-link" href="#" data-open-modal="true" data-type="connect">Подключиться</a>
                                </div>

                                <div class="header__block-user">
                                    <a class="header__login" href="#" data-open-modal="true" data-type="login">
                                        <span class="header__login-text">Войти</span>
                                    </a>
                                </div>
                            </div>
                            <i class="header__close-mobile">
                                <i class="header__close-mobile-icon"></i>
                            </i>
                        </div>
                    </div>

                    <div class="header__menu-btn">
                        <div class="hamburger">
                            <div class="hamburger__inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<main class="main">
            <section class="section">
                <header class="section__headline headline">
                    <div class="headline__container">
                        <div class="headline__decor"></div>
                        <div class="headline__inner">
                            <h1 class="headline__title">Участники</h1>
                        </div>
                    </div>
                </header>

                <div class="section__container">
                    <div class="section__content-block">
                        <div class="section__column section__column_6 text">
                            <p>MSK-IX ускоряет коммуникации между интернет-компаниями, предоставляя нейтральную
                                платформу Internet eXchange для обмена IP-трафиком между сетями и&nbsp;глобальную
                                распределенную сеть DNS-серверов для поддержки корневых доменных зон.</p>
                        </div>
                        <div class="section__column section__column_6 text">
                            <p>Более 500 организаций используют сервисы MSK-IX для развития сетевого присутствия в&nbsp;10&nbsp;городах.
                                К&nbsp;MSK-IX подключены операторы связи, социальные сети, поисковые системы,
                                видеопорталы, провайдеры облачных сервисов, корпоративные и&nbsp;научно-образовательные
                                сети.</p>
                        </div>
                    </div>

                    <div class="participant">
                        <div class="participant__list">
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Санкт-
                                        Перербург</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&minus;</td>
                                                <td class="table__td table__td_caption">Open</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&minus;</td>
                                                <td class="table__td table__td_caption">Open</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&minus;</td>
                                                <td class="table__td table__td_caption">Open</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&minus;</td>
                                                <td class="table__td table__td_caption">Open</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">42149</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Open</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Москва</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Close</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Selective</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Воронеж</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Close</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Selective</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Орёл</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Close</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Selective</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Самара</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Close</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Selective</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="participant__item">
                                <div class="participant__item-head">
                                    <div class="participant__item-name">Саратов</div>
                                    <div class="participant__item-info">
                                        <span class="participant__caption">Участиников</span>
                                        <span class="participant__item-quantity">&nbsp;</span>
                                        <div class="participant__item-toggle">
                                            <div class="participant__toggle-icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="participant__item-body">
                                    <div class="participant__item-content">
                                        <table class="participant__table table table_participant">
                                            <tr class="table__head">
                                                <th class="table__th">Организация</th>
                                                <th class="table__th">ASN/IP</th>
                                                <th class="table__th table__th_center">RS роутсерверы</th>
                                                <th class="table__th">ТП пиринговой компании</th>
                                                <th class="table__th">Контакты</th>
                                            </tr>
                                            <tr class="table__row">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16
                                                </td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Close</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="mailto:info@arbital.ru">info@arbital.ru</a>
                                                </td>
                                            </tr>
                                            <tr class="table__row table__row_no-border">
                                               <td class="table__td table__td_head-mobile">ServiceTelecom</td>
                                                <td class="table__td table__td_caption table__td_uppercase">
                                                    3267<br/>
                                                    31.44.186.16</td>
                                                <td class="table__td table__td_bold table__td_existence">&plus;</td>
                                                <td class="table__td table__td_caption">Selective</td>
                                                <td class="table__td table__td_caption">
                                                    <a class="link" href="#"> a.karyakin@s-inform.ru </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
		<footer class="footer">
            <div class="footer__container">
                <div class="footer__top">
                    <ul class="menu__nav">
                        <li class="menu__item">
                            <a href="#" class="menu__link menu__link_underline">О сети</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link menu__link_underline">Участники</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link menu__link_underline">Техника</a></li>
                        <li class="menu__item">
                            <a href="#" class="menu__link menu__link_underline">Цены</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link menu__link_underline">Контакты</a>
                        </li>
                    </ul>
                    <a class="menu__connect-link" href="#" data-open-modal="true" data-type="connect">Подключиться</a>
                </div>
                <div class="footer__bottom">
                    <div class="footer__copyright">
                        ©2018 Piter ix
                    </div>
                    <div class="footer__social">
                        <ul class="social">
                            <li class="social__item">
                                <a href="#" class="social__link social__link_vk"></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link_fb"></a>
                            </li>
                            <li class="social__item">
                                <a href="#" class="social__link social__link_tw"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <?php include('../includes/blocks/modal-login.php'); ?>
        <?php include('../includes/blocks/modal-connect.php'); ?>
	</div>
	<!_/Page _>

	<!_ JS _>
	<? include('../includes/template/scripts.php'); ?>
	<!_/JS _>

</body>
</html>
