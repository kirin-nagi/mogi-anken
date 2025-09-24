<!-- 商品出品画面-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell__content">
    <div class="sell__heading">
        <h2>商品の出品</h2>
    </div>
    <div class="sell-image__table">
        <table class="sell-table__inner">
            <tr class="sell-table__row">
                <th class="sell-table__header">
                    <h3>商品画像<h3>
                </th>
            </tr>
        </table>
        <div style="border: gray dotted 4px;  padding: 15px;">
            <label for="upload">画像を選択する
                <input type="file" id="upload" class="hidden" accept="image/*">
            </label>
        </div>
    </div>
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header">
                    <h2>商品の詳細</h2>
                </th>
            </tr>
            <tr class="category-table__row">
                <th class="category-table__heading">カテゴリー</th>
                <select name="category">
                <option value="">
                </select>
                <th class="category-table__heading">商品の状態</th>
            </tr>
            <div class="sell-form__content">
                <div class="sell-form__heading">
                    <h2>商品名と説明</h2>
                </div>
                <form class="form">
                    <div class="form__group">
                        <div class="form__group
                    </div>
                </form>
            </div>
        </table>
    </div>
</div>
@endsection