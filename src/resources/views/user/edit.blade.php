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
    <label for="upload" class="custom-upload">画像を選択する</label>
<input type="file" id="upload" class="hidden" accept="image/*">
</div>
