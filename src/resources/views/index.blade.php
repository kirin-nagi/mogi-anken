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
    <div class="img__box">
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
    </div>
</div>


@endsection