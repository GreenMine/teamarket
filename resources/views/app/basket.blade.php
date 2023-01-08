@extends('app.layout.index')
@section('content')
    <h1 class="title"><span>— Ваш заказ —</span><span>— Оформление заказа —</span></h1>
    <div class="catalog catalog--order container">
        @php /** @var \App\Models\BasketItem $item */ @endphp
        @foreach($items as $item)
            <div class="catalog__item-order">
                <div class="catalog__item">
                    <div class="catalog__bottom">
                        <div class="catalog__bottom-left"><a class="catalog__title" href="{{ $item->basketable->link }}" title="Мясное ассорти">{{ $item->basketable->title }}</a>
                            <form method="POST" class="catalog__number count" action="{{ route('basket.update', $item) }}">
                                @method('PATCH')
                                @csrf
                                <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp();this.parentElement.submit()">+</button>
                                <input class="count__number" type="number" value="{{ $item->quantity }}" name="quantity" min="0" max="100" readonly="">
                                <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown();this.parentElement.submit()">-</button>
                            </form>
                        </div>
                        <span class="catalog__price">{{ $item->price }} руб.</span>
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
            <span class="catalog__final-price">Итого: {{ $totalPrice }} руб.</span>
            <button class="catalog__final-button" type="button" disabled>Перейти к оформлению</button>
        </div>
    </div>
@endsection
