@extends('app.layout.index')
@section('content')
    <h1 class="title">— Закуски —</h1>
    <div class="catalog container">

        <div class="catalog__item">
            <div class="catalog__top">
                <a class="catalog__link" href="#" title="Мясное ассорти">

                    <img class="catalog__img" src="img/item-1.png" width="200" height="115" alt="Мясное ассорти">
                </a>
            </div>
            <div class="catalog__bottom">

                <a class="catalog__title" href="#" title="Мясное ассорти">Мясное ассорти</a>

                <p class="catalog__text">Буженина, сырокопченая олбаса, грудка цыпленка</p>


                <div class="catalog__number count">
                    <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                    <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                    <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                </div>
                <span class="catalog__price">350 руб.</span>
                <button class="catalog__buy" type="button">Заказать</button>


            </div>
        </div>
        <div class="catalog__item">
            <div class="catalog__top">
                <a class="catalog__link" href="#" title="Мясное ассорти">

                    <img class="catalog__img" src="img/item-2.png" width="200" height="115" alt="Мясное ассорти">
                </a>
            </div>
            <div class="catalog__bottom">

                <a class="catalog__title" href="#" title="Мясное ассорти">Балтийская сельдь</a>

                <p class="catalog__text"></p>


                <div class="catalog__number count">
                    <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                    <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                    <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                </div>
                <span class="catalog__price">250 руб.</span>
                <button class="catalog__buy" type="button">Заказать</button>


            </div>
        </div>

        <div class="catalog__item">
            <div class="catalog__top">
                <a class="catalog__link" href="#" title="Мясное ассорти">

                    <img class="catalog__img" src="img/item-3.png" width="200" height="115" alt="Мясное ассорти">
                </a>
            </div>
            <div class="catalog__bottom">

                <a class="catalog__title" href="#" title="Мясное ассорти"> Лосось слабого посола</a>

                <p class="catalog__text">Сыр Дор Блю, сыр копченый, сыр сулугуни, сыр домашний</p>


                <div class="catalog__number count">
                    <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                    <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                    <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                </div>
                <span class="catalog__price">350 руб.</span>
                <button class="catalog__buy" type="button">Заказать</button>


            </div>
        </div>

        <div class="catalog__item">
            <div class="catalog__top">
                <a class="catalog__link" href="#" title="Мясное ассорти">

                    <img class="catalog__img" src="img/item-4.png" width="200" height="115" alt="Мясное ассорти">
                </a>
            </div>
            <div class="catalog__bottom">

                <a class="catalog__title" href="#" title="Мясное ассорти">Ассорти сыров</a>

                <p class="catalog__text">Сыр Дор Блю, сыр копченый, сыр сулугуни, сыр домашний</p>


                <div class="catalog__number count">
                    <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                    <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                    <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                </div>
                <span class="catalog__price">350 руб.</span>
                <button class="catalog__buy" type="button">Заказать</button>


            </div>
        </div>
        <div class="catalog__item">
            <div class="catalog__top">
                <a class="catalog__link" href="#" title="Мясное ассорти">

                    <img class="catalog__img" src="img/item-5.png" width="200" height="115" alt="Мясное ассорти">
                </a>
            </div>
            <div class="catalog__bottom">

                <a class="catalog__title" href="#" title="Мясное ассорти">Сыры Кавказа</a>

                <p class="catalog__text">Чанах, лори, чечил</p>


                <div class="catalog__number count">
                    <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                    <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                    <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                </div>
                <span class="catalog__price">350 руб.</span>
                <button class="catalog__buy" type="button">Заказать</button>


            </div>
        </div>
    </div>
@endsection