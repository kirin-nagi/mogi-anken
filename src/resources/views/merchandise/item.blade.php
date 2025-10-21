<!-- 商品詳細画面 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="detail-content">
    <form action="/item/{item_id}" method="post">
        @csrf
        <div class="left-content">
            <img src="{{ asset($product->image) }}" class="img-content" width="250" />
        </div>
        <div class="right-content">
            <h1>{{ $product->name }}</h1>
            <h4>{{ $product->brand }}</h4>
            <h2>{{ $product->price }}</h2>
            <a href="javascript:void(0);" class="like-link" data-post-id="{{ $product->id }}">
                <span class="star {{ isset($like) && $like ? 'text-red-400' : 'text-white-400' }}">
                    ☆
                </span>
                <span class="like-count">{{ $product->likes->count() ?: '' }}</span>
            </a>
            <!
            <form class="form" action="/purchase/{item_id}" method="post">
                @csrf
                <button class="form__button-submit" type="submit">購入手続きへ</button>
            </form>
        </div>
        <div class="detail__subtitle">
            <h2>商品説明</h2>

            <h4>{{ $product->condition }}</h4>
            <h4>{{ $product->description }}</h4>
            </div>
        <div class="detail__subtitle">
            <h2>商品の情報</h2>
             
            <h4>カテゴリー</h4>
            <!-- カテゴリーで選んだものが入る -->
            <h4>商品の状態</h4>
            <!-- 商品の状態で選んだものが入る -->
        </div>
        <div class="comment__group">
            <!-- 入力したコメント情報 -->
            @forelse($product->comments as $comment)
            <div class="comment__group-show">
                <time class="text-secondary">
                    {{ $comment->user->name }}
                    {{ optional ($comment)->id }}
                </time>
            @empty
                <p>コメントはまだありません</p>
            @endforelse
            </div>
            <div class="comment__group-title">
                <span class="comment__group--item">商品へのコメント</span>
            </div>
            <div class="comment__group-content">
                <div class="comment__input--textarea">
                    <textarea name="content"></textarea>
                </div>
            </div>
            <div class="comment__button">
                <button class="comment__button-submit" type="submit">コメントを送信する</button>
            </div>
        </div>
    </form>
</div>
@endsection