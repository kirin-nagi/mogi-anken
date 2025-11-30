@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-content">
    <div class="profile-heading">
        <div class="icon">
            <div class="circle__img">
                @if($address->image == null)
                <div style="width: 100px; height: 100px; background-color: #9e9d9dff; border-radius: 50%; margin: 20px auto;"></div>
            @else
                <img src="/storage/{{ $address->image}}" width="125">
            @endif
            </div>
            <h2>{{ $user->name }}</h2>
            <form action="/mypage/profile" method="get">
                <button class="profile__button-submit" type="submit">プロフィールを編集</button>
            </form>
        </div>
    </div>
    <div class="category-content">
        <table class="category-group__inner">
            <tr class="category-group__row">
                <th class="category-group__header">
                    <a class="category-group__link" href="/mypage?page=sell">出品した商品</a>
                    <a class="category-group__link" href="/mypage?page=buy">購入した商品</a>
                </th>
            </tr>
        </table>
    </div>
    <div class="product-content">
        <div class="product-wrapper">
            @if($products && $products->count() > 0)
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