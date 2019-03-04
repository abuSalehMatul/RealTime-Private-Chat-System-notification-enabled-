@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="columns">
            @foreach ($buyers as $buyer)
                <figure>
                <a href="{{ URL('buy/'.$buyer->id) }}">
                        <img src="{{ asset('uploads/buyer/' . $buyer->buyer_featured_image) }}">
                        <figcaption><strong>{{ $buyer->buyer_pro_title }}</strong></figcaption>
                        <figcaption class="mt-2"><small class="text-muted">{{ date('M j, Y', strtotime($buyer->created_at)) }}</small></figcaption>
                        <figcaption class="float-left"><small class="text-muted"><strong>Buy</strong></small></figcaption>
                    </a>
                </figure>
                @endforeach
                @foreach ($sellers as $seller)
                <figure>
                <a href="{{ URL('sell/'.$seller->id) }}">
                        <img src="{{ asset('uploads/seller/' . $seller->seller_featured_image) }}">
                        <figcaption><strong>{{ $seller->seller_pro_title }}</strong></figcaption>
                        <figcaption class="mt-2"><small class="text-muted">{{ date('M j, Y', strtotime($seller->created_at)) }}</small></figcaption>
                        <figcaption class="float-left"><small class="text-muted"><strong>Sell</strong></small></figcaption>
                    </a>
                </figure>
                @endforeach
                @foreach ($articles as $article)
                <figure>
                <a href="{{ route('article.show', $article->id) }}">
                        <img src="{{ asset('uploads/article/' . $article->article_featured_image) }}">
                        <figcaption><strong>{{ $article->article_title }}</strong></figcaption>
                        <figcaption class="mt-2"><small class="text-muted">{{ date('M j, Y', strtotime($article->created_at)) }}</small></figcaption>
                        <figcaption class="float-left"><small class="text-muted"><strong>Article</strong></small></figcaption>
                    </a>
                </figure>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
