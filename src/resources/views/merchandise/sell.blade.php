<!-- 商品出品画面-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell__content">
    <div class="sell__content">
        <div class="sell-form__heading">
            <h1>商品の出品</h1>
        </div>
        <div class="sell__subtitle">
            <h3>商品画像</h3>
        </div>
        <div style="border: gray dotted 1px;  padding: 50px;">
            <label for="upload" class="custom-upload">画像を選択する
                <input type="file" id="upload" class="hidden" accept="image/*">
            </label>
        </div>
            <div class="sell__title">
                <h2>商品の詳細</h2>
            </div>
            <div class="sell__subtitle">
                <h3>カテゴリー</h3>
            </div>
            <label><input type="checkbox" value="ファッション" name="category"><span>ファッション</span></label>
            <label><input type="checkbox" value="家電" name="category"><span>家電</span></label>
            <label><input type="checkbox" value="インテリア" name="category"><span>インテリア</span></label>
            <label><input type="checkbox" value="レディース" name="category"><span>レディース</span></label>
            <label><input type="checkbox" value="メンズ" name="category"><span>メンズ</span></label>
            <label><input type="checkbox" value="コスメ" name="category"><span>コスメ</span></label>
            <label><input type="checkbox" value="本" name="category"><span>本</span></label>
            <label><input type="checkbox" value="ゲーム" name="category"><span>ゲーム</span></label>
            <label><input type="checkbox" value="スポーツ" name="category"><span>スポーツ</span></label>
            <label><input type="checkbox" value="キッチン" name="category"><span>キッチン</span></label>
            <label><input type="checkbox" value="ハンドメイド" name="category"><span>ハンドメイド</span></label>
            <label><input type="checkbox" value="アクセサリー" name="category"><span>アクセサリー</span></label>
            <label><input type="checkbox" value="おもちゃ" name="category"><span>おもちゃ</span></label>
            <label><input type="checkbox" value="ベビー・キッズ" name="category"><span>ベビー・キッズ</span></label>
            <div class="sell__subtitle">
                <h3>商品の状態</h3>
            </div>
            <div class="sell-search">
                <div class="sell-search__item">
                    <select class="sell-search__item-select">
                        <option hidden>選択してください</option>
                        <option value="良好">良好</option>
                        <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                        <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                        <option value="状態が悪い">状態が悪い</option>
                    </select>
                </div>
            </div>
            <div class="sell__title">
                <h2>商品名と説明</h2>
            </div>
            <form class="form" action="/sell" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="name" name="name" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ブランド名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="brand" name="brand" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品の説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">販売価格</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="price" name="price" placeholder="￥"  />
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">出品する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection