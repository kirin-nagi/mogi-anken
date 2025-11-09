<!-- マイリスト -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset ('css/index.css') }}">
@endsection

@section('content')
<div class="category-content">
    <div class="category-group__inner">
        <div class="category-group__row">
            <div class="category-group__header">
                <a class="category-group__link" href="/">おすすめ</a>
                <a class="category-group__link" href="/?tab=mylist">マイリスト</a>
            </div>
        </div>
    </div>
    
</div>
@endsection
