@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>All Posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Comments</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>                
                <td>{{ $post->body }}</td>
                <td>
                    @if ($post->comments)
                        <ul>
                            @foreach ($post->comments as $comment)
                                <li>{{ $comment->content }}</li>
                            @endforeach
                        </ul>
                    @else
                        No comments
                    @endif
                </td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                    <a href="{{ route('comments.create', $post->id) }}" class="btn btn-success">Add Comment</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
