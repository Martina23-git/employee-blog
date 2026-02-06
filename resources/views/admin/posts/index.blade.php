<h2>Daftar Artikel</h2>

<a href="/admin/posts/create">+ Tambah Artikel</a>

<ul>
@foreach($posts as $post)
    <li>
        {{ $post->title }}
        | <a href="/admin/posts/{{ $post->id }}/edit">Edit</a>
        | 
        <form action="/admin/posts/{{ $post->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
