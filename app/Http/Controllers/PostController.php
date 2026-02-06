<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import model Post agar bisa mengambil data dari tabel posts
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Mengambil semua data post dari database
        $posts = Post::latest()->get();

        // Mengirim data ke file view resources/views/articles.blade.php
        return view('articles', [
            'title' => 'Daftar Artikel',
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
{
    return view('post', [
        'title' => 'Detail Artikel',
        'post' => $post // Mengirimkan data 1 artikel saja
    ]);
}
}