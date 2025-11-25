<!-- マイリスト -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset ('css/index.css') }}">
@endsection

@section('content')
<div class="category-content">
    <div class="category-group__inner">
        <div class="category-group__row">
                <a class="category-group__link active" href="{{ route('index') }}">おすすめ</a>
                <a class="category-group__link" href="/?tab=mylist">マイリスト</a>
            </div>
        </div>
    </div>
    <div class="mylist-content">
        <div class="mylist-wrapper">
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
