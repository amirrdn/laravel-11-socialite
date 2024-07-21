@extends('layouts.app')

@section('content')
<div class="mt-4">
    <h2>Recent Articles</h2>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
    </ul>
</div>
@endsection