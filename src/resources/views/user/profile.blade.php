<!-- プロフィール画面 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<dic class="profile-content">
    <div class="profile-heading">
        <div class="icon">
            <div class="circle__img">
                <img src='/storage/img/furima-aikon.png' width="125">
            </div>
            <h2> ユーザー名</h2>
            <div class="profile__button">
                <button class="profile__button-submit" type="submit">プロフィールを編集</button>
            </div>
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
    <div class="box-wrapper">
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
        <div class="box">商品画像</div>
    </div>
</div>
@endsection