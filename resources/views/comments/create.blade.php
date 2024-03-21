<form action="{{ route('comments.store') }}" method="POST" class="mb-4" style="max-width: 500px; margin: 0 auto;">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <textarea name="content" class="w-full border p-2 mb-2" rows="3" style="resize: none;" placeholder="Write your comment here..."></textarea>
    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" style="display: block; width: 100%;">Add Comment</button>
</form>

