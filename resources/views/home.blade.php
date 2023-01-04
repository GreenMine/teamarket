<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Две вилки">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Две вилки</title>

    @vite(['resources/css/style.min.css', 'resources/js/main.js'])
</head>

<body>
<header class="header header--index">
    <div class="container">
        <div class="header__left">
            <div class="header__burger-container">
                <button class="header__burger" type="button">
                    <svg width="20" height="22">
                        <use xlink:href="img/sprite_auto.svg#icon-burger"></use>
                    </svg>
                </button>
                <button class="header__cross hidden" type="button">
                    <svg width="22" height="22">
                        <use xlink:href="img/sprite_auto.svg#icon-cross"></use>
                    </svg>
                </button>
                <nav class="nav hidden">
                    <button class="nav__cross" type="button">
                        <svg width="30" height="30">
                            <use xlink:href="img/sprite_auto.svg#icon-cross"></use>
                        </svg>
                        <span>Меню</span>
                    </button>

                    <div class="nav__list-menu hidden">
                        <a class="nav__link-menu" href="#" title="">Холодные закуски и салаты</a>
                        <a class="nav__link-menu" href="#" title="">Супы</a>
                        <a class="nav__link-menu" href="#" title="">Горячие блюда</a>
                        <a class="nav__link-menu" href="#" title="">Гарниры и соусы</a>
                        <a class="nav__link-menu" href="#" title="">Выпечка</a>
                        <a class="nav__link-menu" href="#" title="">Десерты</a>
                        <a class="nav__link-menu" href="#" title="">Напитки</a>
                        <a class="nav__link-menu" href="#" title="">Винная карта</a>
                    </div>
                    <div class="nav__list">
                        <a class="nav__link" href="#" title="">Акции</a>
                        <a class="nav__link" href="#" title="">Доставка</a>
                        <a class="nav__link" href="#" title="">Банкеты</a>
                        <a class="nav__link" href="#" title="">Отзывы</a>
                        <a class="nav__link" href="#" title="">Доставка</a>
                    </div>
                </nav>
            </div>
            <a class="header__tel" href="#" title="+7800000000">+7(800)000 00 00</a>
        </div>
        <a class="header__logo header__logo--index" href="#" title="Две вилки">
            <svg width="77" height="88">
                <use xlink:href="img/sprite_auto.svg#icon-logo"></use>
            </svg>
        </a>
        <div class="header__right">
            <a class="header__order" href="#" title="Ваш заказ">
                <svg class="header__order-svg" width="63" height="56">
                    <use xlink:href="img/sprite_auto.svg#icon-order"></use>
                </svg>
                <svg class="header__order-svg header__order-svg-hover" width="72" height="67">
                    <use xlink:href="img/sprite_auto.svg#icon-order-opened"></use>
                </svg>
                <div class="header__order-text">Ваш заказ <span>0 руб.</span></div>
            </a>
        </div>
    </div>
</header>
<main class="main">
    <div class="menu menu--index container">
        <a class="menu__item" href="#" title="Холодные закуски и салаты">

            <svg width="58" height="45">
                <use xlink:href="img/sprite_auto.svg#icon-salad"></use>
            </svg>
            <span>Холодные закуски и салаты</span>
        </a>
        <a class="menu__item" href="#" title="Супы">

            <svg width="64" height="61">
                <use xlink:href="img/sprite_auto.svg#icon-soup"></use>
            </svg>
            <span>Супы</span>
        </a>

        <a class="menu__item" href="#" title="Горячие блюда">

            <svg width="77" height="57">
                <use xlink:href="img/sprite_auto.svg#icon-meat"></use>
            </svg>
            <span>Горячие блюда</span>
        </a>
        <a class="menu__item" href="#" title="Гарниры и соусы">

            <svg width="65" height="45">
                <use xlink:href="img/sprite_auto.svg#icon-pasta"></use>
            </svg>
            <span>Гарниры и соусы</span>
        </a>
        <a class="menu__item" href="#" title="Выпечка">

            <svg width="44" height="28">
                <use xlink:href="img/sprite_auto.svg#icon-pastry"></use>
            </svg>
            <span>Выпечка</span>
        </a>
        <a class="menu__item" href="#" title="Десерты">

            <svg width="27" height="31">
                <use xlink:href="img/sprite_auto.svg#icon-desert"></use>
            </svg>
            <span>Десерты</span>
        </a>
        <a class="menu__item" href="#" title="Напитки">

            <svg width="49" height="52">
                <use xlink:href="img/sprite_auto.svg#icon-drink"></use>
            </svg>
            <span>Напитки</span>
        </a>
        <a class="menu__item" href="#" title="Винная карта">

            <svg width="23" height="43">
                <use xlink:href="img/sprite_auto.svg#icon-wine"></use>
            </svg>
            <span>Винная карта</span>
        </a>
    </div>
</main>
<footer class="footer footer--index">
    <div class="footer__container container">
        <div class="footer__left">
            <a class="footer__logo" href="" title="">
                <svg width="48" height="54">
                    <use xlink:href="img/sprite_auto.svg#icon-logo"></use>
                </svg>
            </a>
            <div class="footer__mini-container">
                <div class="footer__address"> Санкт-Петербург, ш. Революции 86 К2</div>
                <a class="footer__tel" href="tel:+70000000000">+7 (800) 000-00-00</a>
            </div>

        </div>
        <div class="footer__right">
            <nav class="footer__nav">
                <a class="footer__link" href="#" title="Акции">Акции</a>
                <a class="footer__link" href="#" title=" Доставка">Доставка</a>
                <a class="footer__link" href="#" title="Банкеты">Банкеты</a>
                <a class="footer__link" href="#" title="Отзывы">Отзывы</a>
                <a class="footer__link" href="#" title="Контакты">Контакты</a>
            </nav>
        </div>

    </div>
</footer>
</body>

</html>
