<!-- 商品出品画面-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell__content">
    <div class="sell__heading">
        <h1>商品の出品</h1>
    </div>
    <form method="post" action="{{route('mypage.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="sell__title">
            <h3>商品画像</h3>
            <div style="border: gray dotted 1px;  padding: 50px;">
                <input type="file" id="image" name="image" class="image-upload">
                <label for="image" class="image-label">
                画像を選択する
                </label>
                <img id="preview" style="display:none; width:200px; margin-top:10px;">
            </div>
            <div class="sell__error">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="sell__title">
            <h2>商品の詳細</h2>
            <div class="sell__subtitle">
                <h3>カテゴリー</h3>
                <label><input type="checkbox" value="ファッション" name="category_name[]"><span>ファッション</span></label>
                <label><input type="checkbox" value="家電" name="category_name[]"><span>家電</span></label>
                <label><input type="checkbox" value="インテリア" name="category_name[]"><span>インテリア</span></label>
                <label><input type="checkbox" value="レディース" name="category_name[]"><span>レディース</span></label>
                <label><input type="checkbox" value="メンズ" name="category_name[]"><span>メンズ</span></label>
                <label><input type="checkbox" value="コスメ" name="category_name[]"><span>コスメ</span></label>
                <label><input type="checkbox" value="本" name="category_name[]"><span>本</span></label>
                <label><input type="checkbox" value="ゲーム" name="category_name[]"><span>ゲーム</span></label>
                <label><input type="checkbox" value="スポーツ" name="category_name[]"><span>スポーツ</span></label>
                <label><input type="checkbox" value="キッチン" name="category_name[]"><span>キッチン</span></label>
                <label><input type="checkbox" value="ハンドメイド" name="category_name[]"><span>ハンドメイド</span></label>
                <label><input type="checkbox" value="アクセサリー" name="category_name[]"><span>アクセサリー</span></label>
                <label><input type="checkbox" value="おもちゃ" name="category_name[]"><span>おもちゃ</span></label>
                <label><input type="checkbox" value="ベビー・キッズ" name="category_name[]"><span>ベビー・キッズ</span></label>
            </div>
            <div class="sell__error">
                @error('category_name[]')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="sell__subtitle">
            <h3>商品の状態</h3>
            <div class="sell-search__item">
                <select class="sell-search__item-select" name="condition">
                    <option hidden>選択してください</option>
                    <option value="良好">良好</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="状態が悪い">状態が悪い</option>
                </select>
            </div>
            <div class="sell__error">
                @error('condition')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="sell__title">
            <h2>商品名と説明</h2>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" />
                    </div>
                    <div class="sell__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ブランド名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="brand" />
                    </div>
                    <div class="sell__error">
                        @error('brand')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品の説明</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="description"></textarea>
                    </div>
                    <div class="sell__error">
                        @error('description')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">販売価格</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="price" id="priceInput" placeholder="￥"  />
                    </div>
                    <div class="sell__error">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('image');
    const preview = document.getElementById('preview');

    if (imageInput && preview) {

        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
    }
});
</script>
@endsection