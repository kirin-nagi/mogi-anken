<!-- 購入した商品 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="category-content">
    <div class="category-group__inner">
        <div class="category-group__row">
            <div class="category-group__header">
                <a class="category-group__link" href="/mypage?page=sell">出品した商品</a>
                <a class="category-group__link" href="/mypage?page=buy">購入した商品</a>
            </div>
        </div>
    </div>
</div>


@endsection