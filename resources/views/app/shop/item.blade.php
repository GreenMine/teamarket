@extends('app.layout.index')
@section('content')
    <div class="catalog container">
        <a href="{{ route('shop', $item) }}">Link to product</a>
        {{ $item->title  }}
    </div>
@endsection
