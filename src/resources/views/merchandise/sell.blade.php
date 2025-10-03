<!-- 商品出品画面-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell__content">
    
            <div class="sell-form__content">
                <div class="sell-form__heading">
                    <h1>商品の出品</h1>
                </div>
                <div class="sell-form__subtitle">
                    <h3>商品画像</h3>
                </div>
                <div style="border: gray dotted 4px;  padding: 15px;">
                    <label for="upload">画像を選択する
                        <input type="file" id="upload" class="hidden" accept="image/*">
                    </label>
                </div>
                <div class="sell-form__title">
                    <h2>商品の詳細</h2>
                </div>
                <div class="sell-form__title">
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