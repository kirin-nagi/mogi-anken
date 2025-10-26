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
            <img src="{{ asset($product->image) }}" class="img-content" width="400" />
        </div>
        <div class="right-content">
            <h1>{{ $product->name }}</h1>
            <h4>{{ $product->brand }}</h4>
            <h2>{{ $product->price }}</h2>
            <a href="javascript:void(0);" class="like-link" data-post-id="{{ $product->id }}">
                <span class="star {{ isset($like) && $like ? 'text-red-400' : 'text-white-400' }}">
                    ☆
                </span>
                <span class="like-count">{{ $product->likes->count() ?: '' }}
                </span>
            </a>
            <form class="form" action="/purchase/{item_id}" method="post">
                @csrf
                <button class="form__button-submit" type="submit">購入手続きへ
                </button>
            </form>
            <div class="detail__subtitle">
                <h2>商品説明</h2>
                <h4>{{ $product->condition }}</h4>
                <h4>{{ $product->description }}</h4>
            </div>
            <div class="detail__subtitle">
                <h2>商品の情報</h2>
                <h4>カテゴリー</h4>
                {{ $categories->category_name}}
                <h4>商品の状態</h4>
                <h4>{{ $product->condition }}</h4>
            </div>
            <div class="comment__group">
                @forelse($product->comments as $comment)
                <div class="comment__group-show">
                    <p>{{ $comment->user->name }}: {{ $comment->comment }}</p>
                @empty
                    <p>コメントはまだありません</p>
                @endforelse
                </div>
                <form action="/item/{{ $product->id }}/comment" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="comment__group-title">
                        <span class="comment__group--item">
                            商品へのコメント
                        </span>
                    </div>
                    <div class="comment__group-content">
                        <div class="comment__input--textarea">
                            <textarea name="comment"></textarea>
                        </div>
                    </div>
                </form>
                <div class="comment__button">
                    <form method="post" action="{{ route('sell.store') }}">
                        <button class="comment__button-submit" type="submit">コメントを送信する</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection