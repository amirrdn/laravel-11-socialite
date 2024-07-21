@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h2>Articles</h2>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-3">
                    <a href="{{ route('articles.show', Str::slug($article->title)) }}">
                    <div class="card">
                        @if ($article->image)
                            <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ str_replace('&nbsp;', '',strip_tags(Str::limit($article->content, 200, '...'))) }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection