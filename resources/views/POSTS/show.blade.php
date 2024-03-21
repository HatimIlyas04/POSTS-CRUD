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
    <div class="mb-4">
        <a href="{{ route('comments.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Comment
        </a>
    </div>
    
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
