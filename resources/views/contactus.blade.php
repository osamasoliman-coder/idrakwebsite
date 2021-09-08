@extends('layouts.app')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background-color: #FAF6EE ">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GET IN TOUCH</h2>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info" style="padding: 30px;">
                        <h5 style="text-align: center;margin-bottom: 25px;">CONTACT US ON:</h5>
                        <div class="address">
                            <i class="icofont-google-map icons-contact"></i>
                            <p style="color: #303642">Abu Dhabi – U.A.E</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope icons-contact"></i>

                            <p style="color: #303642">info@idraksport.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone icons-contact"></i>

                            <p style="color: #303642">+971 56 666 52 94</p>
                            <p style="color: #303642">+971 56 666 52 94</p>
                        </div>

                        <div class="data" style="margin-bottom: 30px;margin-top: 15px;">
                            <a href="">
                                <i class="icofont-instagram social-data-contact"></i>
                            </a>
                            <a href="">
                                <i class="icofont-twitter social-data-contact"></i>
                            </a>
                            <a href="">
                                <i class="icofont-facebook social-data-contact"></i>
                            </a>

                            <a href="">

                                <p class="website-title-contact">@idraksport</p>
                            </a>

                        </div>
                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{ route('send.mail') }}" method="post">
                        @csrf
                        @if(Session::has('success_message'))
                        <div class="alert alert-success" style="margin-top: 15px;">
                            <strong>Success</strong> {{Session::get('success_message')}}
                        </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="background-color: #F1E6D2;color: white;"  required/>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email"  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="background-color: #F1E6D2;color: white;"  required/>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="background-color: #F1E6D2;color: white" required></textarea>
                            @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>

                        <div class="text-center"><button type="submit" style="background-color: #CDA45E;color: white;width: 100%;">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
