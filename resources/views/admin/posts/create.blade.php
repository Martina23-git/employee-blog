<h2>Tambah Artikel</h2>

<form method="POST" action="/admin/posts">
@csrf
<input type="text" name="title" placeholder="Judul"><br><br>
<textarea name="content" placeholder="Isi artikel"></textarea><br><br>
<button type="submit">Simpan</button>
</form>
