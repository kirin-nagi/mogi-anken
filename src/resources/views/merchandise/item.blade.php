<!-- 商品詳細画面 -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="detail-content">
    <form action="/item/{{ $product->id }}" method="post" class="form-content">
        @csrf
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
            <form action="/item?{{ $product->id }}" method="post" style="display:inline;">
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
                        <div class="comment__error">
                            @error('comment')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </form>
                <div class="comment__button">
                    <form action="/item/{{ $product->id }}/comment" method="post" class="form__comment">
                        @csrf
                        <button class="comment__button-submit" type="submit">コメントを送信する</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection