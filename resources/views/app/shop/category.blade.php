@extends('app.layout.index')
@section('content')
    <h1 class="title">— {{ $category->title }} —</h1>
    <div class="catalog container">
        @foreach($products as $product)
            <div class="catalog__item">
                <div class="catalog__top">
                    <a class="catalog__link" href="{{ route('shop', $product) }}" title="Мясное ассорти">

                        <img class="catalog__img" src="img/item-1.png" width="200" height="115" alt="Мясное ассорти">
                    </a>
                </div>
                <div class="catalog__bottom">
                    <a class="catalog__title" href="{{ route('shop', $product) }}" title="Мясное ассорти">{{ $product->title }}</a>

                    <div class="catalog__number count">
                        <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                        <input class="count__number" type="number" value="1" name="basic" min="0" max="100" readonly="">
                        <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                    </div>
                    <span class="catalog__price">{{ $product->price }} руб.</span>
                    <button class="catalog__buy" type="button">Заказать</button>


                </div>
            </div>
        @endforeach
    </div>
@endsection