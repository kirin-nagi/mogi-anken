<!-- 商品詳細画面 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="detail-content">
    <div class="left-content">
        <img src="{{ asset($product->image) }}" class="img-content" width="600" />
    </div>
    <div class="right-content">
        <div class="product-item">
            <h1>{{ $product->name }}</h1>
            <h4>{{ $product->brand }}</h4>
            <h2>{{ $product->price }}</h2>
        </div>
        @if(isset($like) && $like)
        <form action="{{ route('unlike', ['item_id' => $product->id]) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="like-link">
                <span class="star text-black-400">♥</span><br>
                <span class="like-count">{{ $product->likes->count() ?: '' }}</span>
            </button>
        </form>
        @else
        <form action="{{ route('like', ['item_id' => $product->id]) }}"  method="post" style="display:inline;">
            @csrf
            <button type="submit" class="like-link">
                <span class="star text-white-400">♡</span><br>
                <span class="like-count">{{ $product->likes->count() ?: '' }}</span>
            </button>
        </form>
        @endif
        <form class="form" action="/purchase/{{ $product->id }}" method="post">
            @csrf
            <div class="form-button">
                <button class="form__button-submit" type="submit">購入手続きへ</button>
            </div>
        </form>
        <div class="detail__subtitle">
            <h2>商品説明</h2>
            <div class="condition-item">
            {{ $product->condition }}
            {{ $product->description }}
            </div>
        </div>
        <div class="detail__subtitle">
            <h2>商品の情報</h2>
            <h4>カテゴリー</h4>
            @foreach($product->categories as $category)
                {{ $category->category_name }}
            @endforeach
            <div class="condition-group">
                <h4>商品の状態</h4>
                {{ $product->condition }}
            </div>
        </div>
        <div class="comment__group">
            @php
            $commentsCount = $product->comments->count();
            @endphp
            <div class="comment-count">
                <h3> コメント ( {{ $commentsCount}} ) </h3>
            </div>
            @forelse($product->comments as $comment)
            <div class="comment__group-show">
                <div class="comment__heading">
                    @if(!empty($comment->user->address) && !empty($comment->user->address->image))
                    <img src="{{ asset('storage/' . $comment->user->address->image) }}" class="comment__icon" style="width: 50px; height: 50px; border-radius: 50%; margin: 20px;">
                    @else
                    <div style="width: 50px; height: 50px; background-color: #9e9d9dff; border-radius: 50%; margin: 20px;"></div>
                    @endif
                    <div class="comment__body">
                        <p class="comment__name">{{ $comment->user->name }}</p>
                    </div>
                </div>
                <p class="comment__text">{{ $comment->comment }}</p>
                @empty
                    <p>コメントはまだありません</p>
                @endforelse
            </div>
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
                <div class="comment__error">
                    @error('comment')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="comment__button">
                <button class="comment__button-submit" type="submit">コメントを送信する</button>
            </div>
        </form>
    </div>
</div>
@endsection