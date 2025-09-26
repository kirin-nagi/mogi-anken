<!-- プロフィール編集画面（設定画面）-->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')

<div class="edit-form__content">
    <div class="edit-form__heading">
        <h2>プロフィール設定</h2>
    </div>
    <div class="icon">
    <div class="circle__img">
        <img src='/storage/img/furima-aikon.png' width="125">
    </div>
        <label for="upload" class="custom-upload">画像を選択する
        <input type="file" id="upload" class="hidden" accept="image/*">
        </label>
    </div>

<form class="form" action="/mypage/profile" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">ユーザー名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" />
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="post code" />
            </div>
            <div class="form__error">
                @error('post code')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="address" />
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="building" />
            </div>
            <div class="form__error">
                @error('building')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form" action="/mypage/profile" method="post">
    @csrf
    <div class="form__button">
        <button class="form__button-submit" type="submit">更新する</button>
    </div>
</form>
</div>

@endsection