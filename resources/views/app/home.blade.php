@extends('app.layout.index')
@section('content')
    <div class="menu menu--index container">
        @php /** @var \App\Models\Shop\Category $category */ @endphp
        @foreach($categories as $category)
            <a class="menu__item" href="{{ $category->link }}" title="Холодные закуски и салаты">
                <svg width="64" height="61">
                    <use xlink:href="img/sprite_auto.svg#icon-soup"></use>
                </svg>
                <span>{{ $category->title }}</span>
            </a>
        @endforeach
    </div>
@endsection