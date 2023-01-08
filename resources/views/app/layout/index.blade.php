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
                        <use xlink:href="/img/sprite_auto.svg#icon-burger"></use>
                    </svg>
                </button>
                <button class="header__cross hidden" type="button">
                    <svg width="22" height="22">
                        <use xlink:href="/img/sprite_auto.svg#icon-cross"></use>
                    </svg>
                </button>
                <nav class="nav hidden">
                    <button class="nav__cross" type="button">
                        <svg width="30" height="30">
                            <use xlink:href="/img/sprite_auto.svg#icon-cross"></use>
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
        </div>
        <a class="header__logo header__logo--index" href="/" title="Две вилки">
            <svg width="77" height="88">
                <use xlink:href="/img/sprite_auto.svg#icon-logo"></use>
            </svg>
        </a>
        <div class="header__right">
            <a class="header__order" href="{{ route('basket') }}" title="Ваш заказ">
                <svg class="header__order-svg" width="63" height="56">
                    <use xlink:href="/img/sprite_auto.svg#icon-order"></use>
                </svg>
                <svg class="header__order-svg header__order-svg-hover" width="72" height="67">
                    <use xlink:href="/img/sprite_auto.svg#icon-order-opened"></use>
                </svg>
                <div class="header__order-text">Ваш заказ <span>0 руб.</span></div>
            </a>
        </div>
    </div>
</header>
<main class="main">
    <div class="container">
        @if ($errors->any())
            <style>
                .alert {
                    position: relative;
                    padding: .75rem 1.25rem;
                    margin-bottom: 1rem;
                    border: 1px solid transparent;
                    border-radius: .25rem;
                }
                .alert-danger {
                    color: #721c24;
                    background-color: #f8d7da;
                    border-color: #f5c6cb;
                }
            </style>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @yield('content')
</main>
</body>

</html>
