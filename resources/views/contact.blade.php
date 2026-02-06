@extends('layouts.main')

@section('container')
<header class="masthead" style="background-image: url('{{ asset('assets/img/contact-bg.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                <div class="page-heading">
                    <h1>Contact</h1>
                    <span class="subheading">Get in touch with Employee Blog</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <p>Jika Anda memiliki pertanyaan atau ingin berbagi pengalaman kerja, silakan hubungi kami.</p>

            <ul class="list-unstyled mb-4">
                <li class="mb-2"><i class="fas fa-envelope me-2"></i> <strong>Email:</strong> employee@company.com</li>
                <li class="mb-2"><i class="fas fa-phone me-2"></i> <strong>Phone:</strong> +62 812 3456 7890</li>
                <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> <strong>Address:</strong> Medan, Indonesia</li>
            </ul>

            <hr class="my-4" />

            <h5>Send Us a Message</h5>
            <form id="contactForm">
                @csrf <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Your Name" required />
                    <label for="name">Your Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="Your Email" required />
                    <label for="email">Your Email</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" placeholder="Your Message" style="height: 10rem" required></textarea>
                    <label for="message">Your Message</label>
                </div>
                <button class="btn btn-primary text-uppercase" type="submit" disabled>Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection