@extends('app.layout.index')
@section('content')
    <h1 class="title"><span>— Ваш заказ —</span><span>— Оформление заказа —</span></h1>
    <div class="catalog catalog--order container">
        @foreach($items as $item)
            <div class="catalog__item-order">
                <div class="catalog__item">
                    <div class="catalog__bottom">
                        <div class="catalog__bottom-left"><a class="catalog__title" href="#" title="Мясное ассорти">{{ $item->basketable->title }}</a>
                            <div class="catalog__number count">
                                <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                                <input class="count__number" type="number" value="{{ $item->quantity }}" name="basic" min="0" max="100" readonly="">
                                <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                            </div>
                        </div>
                        <span class="catalog__price">{{ $item->getPrice() }} руб.</span>
                    </div>

                </div>
                <form method="POST" action="{{ route('basket.remove', $item) }}">
                    @method('DELETE')
                    @csrf
                    <button class="catalog__delete" type="submit">
                        <svg width="23" height="23">
                            <use xlink:href="/img/sprite_auto.svg#icon-delete"></use>
                        </svg>
                    </button>
                </form>
            </div>
        @endforeach
        <div class="catalog__final">
            <span class="catalog__final-price">Итого: 700 руб.</span>
            <button class="catalog__final-button" type="button">Перейти к оформлению</button>
        </div>
    </div>
@endsection
