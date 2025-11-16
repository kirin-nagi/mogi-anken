<!-- 商品購入  ※request設定-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css.purchase.css') }}">
@endsection

@section('content')
<div class="purchase-content">
    <div class="left-content">
        <img src="{{ asset($product->image) }}" class="img-content" width="500" />
        <div class="product-item">
            <p class="product-name">{{ $product->name }}</p>
            <p class="product-price">{{ $product->price }}</p>
        </div>
        <div class="payment-content">
            <h3>支払い方法</h3>
            <div class="payment-search__item">
                <select class="payment-search__item-select" name="payment">
                    <option hidden>選択してください</option>
                    <option value="コンビニ支払い">コンビニ支払い</option>
                    <option value="カード支払い">カード支払い</option>
                </select>
            </div>
        </div>
        <div class="address-content">
            <div class="address-subtitle">
                <!-- 何かclassを入れてsubtitleを消す -->
                <h3>配送先</h3>
                <h3>変更する</h3>
                <div class="address-item">
                    <p class="address-postcode">{{ $address->postcode }}</p>
                    <p class="address-address">{{ $address->address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>