@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-primary">{{ $article->title }}</h2>

            @if ($article->image)
                <div class="article-image mb-3">
                    <img src="{{ $article->image }}" class="img-fluid rounded shadow" alt="{{ $article->title }}">
                </div>
            @endif
            <div class="article-content bg-light p-4 rounded shadow-sm">
                <p class="lead">{{ $article->text }}</p>
                <div>
                    {!! $article->content !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sidebar bg-white p-4 rounded shadow-sm">
                <h4 class="text-secondary">Latest Articles</h4>
                <ul class="list-unstyled">
                    @foreach($latestArticles as $latestArticle)
                        <li class="mb-2">
                            <a href="{{ route('articles.show', Str::slug($latestArticle->title)) }}" class="text-dark">
                                @if ($latestArticle->image)
                                    <img src="{{ $latestArticle->image }}" class="img-thumbnail mr-2" alt="{{ $latestArticle->title }}" style="width: 50px; height: 50px;">
                                @endif
                                {{ str_replace('&nbsp;', '',strip_tags(Str::limit($latestArticle->title, 30, '...'))) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-primary mt-3">Back to Articles</a>
</div>
@endsection