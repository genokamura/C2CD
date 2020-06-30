@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">出品確認画面</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('product.store') }}">
                  @csrf
                    <div class="pl-2 text-center mb-4">
                        <img src="http://127.0.0.1:8000/{{ $post_data['read_temp_path'] }}" width="200" height="200">
                    </div>
                    <div class="pl-2">
                      <span id="product_name">商品名 : </span>
                      {{ $post_data['product_name'] }}
                    </div>
                    <div class="pl-2">
                      <span id="price">価格 : </span>
                      {{ $post_data['price'] }}円
                    </div>
                    <div class="pl-2">
                      <span id="amount">数量 : </span>
                      {{ $post_data['amount'] }}個
                    </div>
                    <div class="pl-2">
                      <span id="category_id">カテゴリー : </span>
                      {{ $post_data['category_id'] }}
                    </div>
                    <div class="pl-2">
                      <span id="describe">詳細 : </span>
                      {{ $post_data['describe'] }}
                    </div>

                    <button type="submit" class="btn btn-primary ml-2 mt-3">{{ __('出品') }}</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
