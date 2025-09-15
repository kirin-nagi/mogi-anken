<!-- 商品一覧画面（トップ） -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="category-table">
    <table class="category-table__inner">
        <tr class="category-table__row">
            <th class="category-table__header">
                <a class="category-table__header">おすすめ</a>
                <a class="category-table__header">マイリスト</a>
            </th>
        </tr>
    </table>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
    <div class="box">商品画像</div>
</div>


@endsection