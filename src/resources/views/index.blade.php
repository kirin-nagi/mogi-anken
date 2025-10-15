<!-- 商品一覧画面（トップ） -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="category-content">
    <div class="category-group__inner">
        <div class="category-group__row">
            <div class="category-group__header">
                <a class="category-group__link" href="/">おすすめ</a>
                <a class="category-group__link" href="/?tab=mylist">マイリスト</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <div class="product-wrapper">
            @foreach ($products as $product)
            <a href="/item/{{ $product->id }}" class="product-link">
                <img src="{{ asset($product->image) }}" class="img-content" width="250" />
                <p>{{$product->name}}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>


@endsection