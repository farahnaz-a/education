@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Courses
@endsection

{{-- Menu Active --}}
@section('contacts')
    active
@endsection

{{-- Main Content --}}
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Contact</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Contact Information Start -->
    <div class="section section-padding-02">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Contact Info Wrapper Start -->
                    <div class="contact-info-wrapper">
                        <div class="row gx-0">
                            <div class="col-md-4">
                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5 class="title">Telephone</h5>
                                        <p><a href="">{{ generalsettings()->phone }}</a></p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                            </div>
                            <div class="col-md-4">
                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5 class="title">Our Mail</h5>
                                        <p><a href="">{{ generalsettings()->email }}</a></p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                            </div>
                            <div class="col-md-4">
                                <!-- Single Contact Info Start -->
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5 class="title">Location</h5>
                                        <p>{{ ucfirst(generalsettings()->address) }}.</p>
                                    </div>
                                </div>
                                <!-- Single Contact Info End -->
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info Wrapper End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information End -->

    <!-- Contact Form Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2 class="title"><span>Get Support</span> from our Team</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Start -->
                    <div class="contact-form-wrapper">
                        <form action="{{ route('contacts.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Your Name*">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Your Email*">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Your Phone*">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input id="subject" name="subject" type="text" class="form-control" placeholder="Subject*">
                                        @error('subject')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea id="message" name="message" class="form-control" placeholder="Write A Massage*"></textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning">{{ session('warning') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form text-center">
                                        <button type="submit" id="submit" class="btn btn-primary btn-hover-heading-color">Send Message</button>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection

{{-- Js --}}
@section('js')

    {{-- Conatct form --}}
    {{-- <script>

        $(document).ready(function(){
            $('#submit').click(function() {

                let name      = $('#name').val();
                let phone     = $('#phone').val();
                let email     = $('#email').val();
                let subject   = $('#subject').val();
                let message   = $('#message').val();

                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('contacts.store') }}",
                    data: {
                        name    : name,
                        email   : email,
                        phone   : phone,
                        subject : subject,
                        message : message,
                    },
                    
                    success: function (data) {
                    $('#success').html('You are subscribed');
                    $('#error').css('display', 'none');
                    },
                    
                });

            });

        });

    </script> --}}
@endsection