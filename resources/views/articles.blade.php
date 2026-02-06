@extends('layouts.main')

@section('container')
<header class="masthead" style="background-image: url('{{ asset('assets/img/articel.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5 text-center text-white">
        <h1>Daftar Artikel</h1>
        <span class="subheading">Kumpulan pengalaman karyawan</span>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            @foreach ($posts as $post)
                <div class="post-preview">
    <a href="/articles/{{ $post->slug }}">
        <span class="badge bg-primary mb-2">{{ $post->category }}</span>
        <h2 class="post-title">{{ $post->title }}</h2>
        <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
    </a>
    <p class="post-meta">
        Ditulis oleh <strong>{{ $post->author }}</strong> • {{ $post->author_role }} • {{ $post->published_at }}
    </p>
</div>
                <hr class="my-4" />
            @endforeach
        </div>
    </div>
</div>
@endsection