@extends('LAYOUTS.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
<script>
    function confirmSubmit() {
        swal({
            title: "Are you sure?",
            text: "Once submitted, you cannot revert this action!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willSubmit) => {
            if (willSubmit) {
                return true; // Form will be submitted
            } else {
                swal("Action cancelled!", {
                    icon: "info",
                });
                return false; // Form submission cancelled
            }
        });
    }
</script>