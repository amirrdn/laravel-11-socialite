@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Videos</h2>
    <div class="row">
        @foreach ($videos as $video)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9 mb-3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ getYouTubeVideoId($video->url) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"></iframe>
                        </div>
                        <h5 class="card-title">{{ $video->title }}</h5>
                        <p class="card-text">{{ Str::limit($video->description, 100) }}</p>
                        <div class="card-footer text-muted">
                            <small>Uploaded on {{ $video->created_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection