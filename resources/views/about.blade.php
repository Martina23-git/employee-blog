@extends('layouts.main')

@section('container')
<header class="masthead" style="background-image: url('{{ asset('assets/img/about-bg.jpg') }}')"> 
    <div class="container position-relative px-4 px-lg-5"> 
        <div class="row gx-4 gx-lg-5 justify-content-center"> 
            <div class="col-md-10 col-lg-8 col-xl-7 text-center"> 
                <div class="page-heading"> 
                    <h1>About Employee Blog</h1> 
                    <span class="subheading">Information media and documentation of employee activities</span> 
                </div> 
            </div> 
        </div> 
    </div>
</header>

<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>
                    <strong>Blog Karyawan</strong> merupakan website dinamis yang dikembangkan menggunakan <strong>Laravel Framework</strong> sebagai bagian dari tugas UAS.
                </p>
                <p>
                    Berbeda dengan versi sebelumnya yang bersifat statis, sistem ini kini mendukung pengelolaan data melalui database, memungkinkan skalabilitas konten yang lebih baik.
                </p>
                <p>
                    Pembuatan website ini bertujuan untuk memenuhi tugas Ujian Akhir Semester mata kuliah <strong>Pemrograman Web Berbasis Framework</strong> di STMIK TIME.
                </p>
            </div>
        </div>
    </div>
</main>
@endsection