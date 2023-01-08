@php /** @var \App\Models\Shop\Category $category */ @endphp

@extends('app.layout.index')
@section('content')
    <h1 class="title">— {{ $category->title }} —</h1>
    <div class="catalog container">
        @php /** @var \App\Models\Shop\Product $product */ @endphp
        @foreach($products as $product)
            <div class="catalog__item">
                <div class="catalog__bottom">
                    <a class="catalog__title" href="{{ $product->link }}" title="Мясное ассорти">{{ $product->title }}</a>

                    <form method="POST" action="{{ route('basket.add', $product) }}">
                        @csrf
                        <div class="catalog__number count">
                            <button class="count__more count__button" type="button" onclick="this.nextElementSibling.stepUp()">+</button>
                            <input class="count__number" type="number" value="1" name="quantity" min="1" max="100" readonly="">
                            <button class="count__less count__button" type="button" onclick="this.previousElementSibling.stepDown()">-</button>
                        </div>
                        <span class="catalog__price">{{ $product->price }} руб.</span>
                        <button class="catalog__buy" type="submit">Заказать</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection