<!-- プロフィール画面 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<dic class="profile-form__content">
    <div class="profile-form__heading">
        <div class="icon">
            <div class="circle">

            </div>
            <h2> ユーザー名</h2>
            <div class="form" action="/mypage" method="get">
                @csrf
                <div class="form__button">
                    <button class="form__button-submit" type="submit">プロフィールを編集</button>
                </div>
            </div>
        </div>
    </div>
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header">
                    <a class="category-table__header">出品した商品</a>
                    <a class="category-table__header">購入した商品</a>
                </th>
            </tr>
        </table>
    </div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
</div>
@endsection