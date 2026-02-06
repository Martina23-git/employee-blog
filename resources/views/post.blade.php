@extends('layouts.main')

@section('container')
<header class="masthead" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading text-center text-white">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->subtitle }}</h2>
                    <span class="meta">
                        Ditulis oleh <strong>{{ $post->author }}</strong> • 
                        {{ $post->author_role }} • 
                        {{ $post->published_at }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <span class="badge bg-primary mb-3">{{ $post->category }}</span>
                
                <div class="article-body">
                    {!! nl2br(e($post->body)) !!}
                </div>

                <div class="mt-5">
                    <a href="/articles" class="btn btn-secondary text-uppercase">← Kembali ke Daftar Artikel</a>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection