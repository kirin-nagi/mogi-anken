@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="detail-content">
    <div class="left-content">
        <img src="{{ asset($product->image) }}" class="img-content" width="500" />
    </div>
    <div class="right-content">
        <div class="product-item">
            <h1>{{ $product->name }}</h1>
            <h4>{{ $product->brand }}</h4>
            <p class="product-price">￥{{ $product->price }}(税込)</P>
        </div>
        <div class="like-comment__item">
            @if($product->likes->where('user_id',Auth::id())->count())
            <form action="{{ route('unlike', ['item_id' => $product->id]) }}" method="post">
                @csrf
                <button type="submit" class="like-link">
                    <span class="heart text-red-400">♥</span><br>
                    <span class="like-count">{{ $product->likes->count() ?: '' }}</span>
                </button>
            </form>
            @else
            <form action="{{ route('like', ['item_id' => $product->id]) }}"  method="post">
                @csrf
                <button type="submit" class="like-link">
                    <span class="heart text-white-400">♡</span><br>
                    <span class="like-count">{{ $product->likes->count() ?: '' }}</span>
                </button>
            </form>
            @endif
            <div class="comment-count__item">
                @php
                    $commentsCount = $product->comments->count();
                @endphp
                <span class="comment text-white-400">💭</span><br>
                <span class="comment-count">{{ $commentsCount }}</span>
            </div>
        </div>
        <div class="form-button">
            <a class="form__button-submit" href="{{ route('merchandise.purchase', ['item_id'=> $product->id]) }}">購入手続きへ</a>
        </div>
        <div class="detail__subtitle">
            <h2>商品説明</h2>
            <div class="description-item">
            <p class="product-condition">{{ $product->condition }}</p>
            <p class="product-description">{{ $product->description }}</P>
            </div>
        </div>
        <div class="detail__subtitle">
            <h2>商品の情報</h2>
            <div class="category-group">
            <h4>カテゴリー</h4>
            @foreach($product->categories as $category)
                <p class="category-name">{{ $category->category_name }}</p>
            @endforeach
            </div>
            <div class="condition-group">
                <h4>商品の状態</h4>
                <p class="condition-item">{{ $product->condition }}</p>
            </div>
        </div>
        <div class="comment__group">
            @php
            $commentsCount = $product->comments->count();
            @endphp
            <div class="comment-count">
                <h3> コメント ( {{ $commentsCount }} ) </h3>
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