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
                <a class="category-group__header">おすすめ</a>
                <a class="category-group__header">マイリスト</a>
            </div>
        </div>
    </div>
    <div class="product-contents">
        @foreach ($products as $product)
        <div class="product-content">
            <a href="/item/{item_id}" class="product-link">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
                <p>{{$product->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection