@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="text-white text-center py-5" style="background: linear-gradient(90deg, #11998e, #38ef7d);">
        <div class="container">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead mb-0">We’d love to hear from you. Get in touch with our team today.</p>
        </div>
    </section>



    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow border-0">
                        <div class="card-body p-5">
                            <h4 class="fw-bold mb-4 text-center">Send Us a Message</h4>
                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label fw-bold">Message</label>
                                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success px-5">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="text-white py-5" style="background: linear-gradient(90deg, #38ef7d, #11998e);">
        <div class="container text-center">
            <h4 class="fw-bold mb-3">Our Office</h4>
            <p class="mb-2">123 Safari Street, Ashgabat, Turkmenistan</p>
            <p class="mb-2">Email: info@safari.com</p>
            <p class="mb-0">Phone: +993 65 123456</p>
        </div>
    </section>
@endsection
