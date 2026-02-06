<h2>Edit Artikel</h2>

<form method="POST" action="/admin/posts/{{ $post->id }}">
@csrf
@method('PUT')
<input type="text" name="title" value="{{ $post->title }}"><br><br>
<textarea name="content">{{ $post->content }}</textarea><br><br>
<button type="submit">Update</button>
</form>
