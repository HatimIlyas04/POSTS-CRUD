@extends('LAYOUTS.master')

@section('content')
<div class="container mt-5">
    <h2>Post Details</h2>
    <div class="mb-3">
        <strong>Title:</strong> {{ $post->title }}
    </div>
    <div class="mb-3">
        <strong>Body:</strong> {{ $post->body }}
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
