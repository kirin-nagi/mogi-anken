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
                <a class="category-group__link {{ request('tab') !== 'mylist' ? 'active' : '' }}" href="/">おすすめ</a>
                <a class="category-group__link {{ request('tab') === 'mylist' ? 'active' : '' }}" href="/?tab=mylist">マイリスト</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <div class="product-wrapper">
            @if(isset($products) && $products->count() > 0)
                @foreach ($products as $product)
                <a href="/item/{{ $product->id }}" class="product-link">
                    @if($product->image)
                    <img src="{{ asset($product->image) }}" class="img-content" width="250" />
                    @endif
                    <p>{{$product->name}}</p>
                </a>
                @endforeach
            @else
            <p>まだ商品はありません</p>
            @endif
        </div>
    </div>
</div>


@endsection