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
        <form action="/item/{{ $product->id }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <a href="javascript:void(0);" class="like-link" onclick="this.closest('form').submit();">
                <span class="star text-black-400">★</span><br>
                <span class="link-count">{{ $product->likes->count() ?: '' }}</span>
            </a>
        </form>
        @else
        <form action="/item/{{ $product->id }}" method="post" style="display:inline;">
            @csrf
            <a href="javascript:void(0);" class="like-link" onclick="this.closest('form'.submit();">
                <span class="star text-white-400">☆</span><br>
                <span class="like-count">{{ $product->likes->count() ? $product->likes->count : '' }}</span>
            </a>
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
            {{ $product->condition }}
            {{ $product->description }}
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
            @forelse($product->comments as $comment)
            <div class="comment__group-show" style="display: flex; align-items: center; gap: 8px; margin-bottom: 10px;">
                <div class="comment-count">
                    {{ $commentsCount}}
                </div>
                @if(!empty($comment->user->profile_image))
                <img src="{{ asset($comment->user->profile_image) }}"
                style="width:35px; height:35px; border-radius:50%; object-fit:cover;">
                @else
                <div style="width: 50px; height: 50px; background-color: #9e9d9dff; border-radius: 50%; margin: 20px;"></div>
                @endif
                <div class="comment__body">
                    <p class="comment__name">{{ $comment->user->name }}</p>
                    <p class="comment__text">{{ $comment->comment }}</p>
                </div>
            </div>
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