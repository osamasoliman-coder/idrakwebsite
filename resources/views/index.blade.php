@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class=" position-relative" data-aos="fade-up" data-aos-delay="100">
            <img class="hero-img" src="assets//img//website/background.jpeg" alt="" style="width: 100%">
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="about-content" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <img src="assets/img/website/aboutleft.png" alt="" style="width: 100%;height: 490px;" data-aos="fade-right" data-aos-delay="100">
                    </div>
                    <div class="col-md-8 col-sm-12" style="padding-left: 30px;margin-top: 25px;" data-aos="fade-left" data-aos-delay="100">
                        <img class="center" src="assets/img/website/WHO%20WE%20ARE.png" alt="" style="text-align: center;height: 25px;">
                        <p class="desc">Idrak Sport Facility Management is a local company managed by an Emirati team with extensive experience in the sports industry operating from the capital, Abu Dhabi. As a company, we strive to elevate the standard of healthy living within the communities of the region and aim to educate the masses and provide them the guidance and tools towards a healthy lifestyle.
                        </p>
                        <p class="desc"> We pride ourselves in the ability to deliver boundlessly throughout the entire spectrum of the Sports and Fitness Industry. Be it a Sports/Fitness training program or management of a Sports & Recreation facility, we can undertake every aspect from conceptualization till execution, including manpower, equipment and facilities.</p>

                        <div class="row icon-boxes" style="margin-top: 20px;">
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box who-we-are">
                                    <img src="assets/img/website/arrow.png" alt="" style="display:block;margin:auto;">
                                    <p class="description" style="font-size: 13px;">Be the guiding force in the development of a healthy community and promoter of a fit lifestyle.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box who-we-are">
                                    <img src="assets/img/website/lamda.png" alt="" style="display:block;margin:auto;">
                                    <p class="description" style="font-size: 13px;">Becoming the key solution provider in the region within the Sports and Fitness Industry.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="testimonials" class="testimonials" style="background-color: #FAF6EE">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>OUR SERVICES</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #CDA45E">
                                <div class="content">
                                    <h5>SPORT CLUBS & RECREATION FACILITY MANAGEMENT</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>Idrak Sport provides comprehensive services for sports facilities implementing latest methods in management that contribute to the development of the facilities.</p>
                                    <a class="btn" href="{{ route('service.one') }}" style="background-color: #CDA45E;color: white">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #303642">
                                <div class="content">
                                    <h5>SPORT MARKETING</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>We provide custom sports marketing and consultancy services for corporate clients.</p>
                                    <a class="btn" href="{{ route('service.two') }}" style="background-color: #303642;color: white">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #CE8631">
                                <div class="content">
                                    <h5>Sports Training & Consultations</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>Idrak sports offers specialized training programs to certify coaches to help advance their careers.</p>
                                    <a class="btn" href="{{ route('service.three') }}" style="background-color: #CE8631;color: white">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #CDA45E">
                                <div class="content">
                                    <h5>Sports Brokerage</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>Idrak sport provides sports marketing, management and consultancy services for athletes, brands and sports properties.</p>
                                    <a class="btn" href="{{ route('service.four') }}" style="background-color: #CDA45E;color: white;">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #303642">
                                <div class="content">
                                    <h5>Sports Services & Contracting</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>Let us take the hassle, so you can focus on your goals.</p>
                                    <a class="btn" href="{{ route('service.five') }}" style="background-color: #303642;color: white;">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card">
                            <div class="face face1" style="background-color: #F3B453">
                                <div class="content">
                                    <h5>Sports Event Marketing & Management</h5>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>Planning for a sport event? We got you covered.</p>
                                    <a class="btn" href="{{ route('service.six') }}" style="background-color: #F3B453;color: white;">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Courses Section ======= -->
        <section id="team" class="team section-bg" style="background-color: #FFFFFF">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>OUR COURSES</h2>
                </div>

                <div class="row">


                    @if(count($courses)>0)
                        <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="200">
                            <a href="{{ route('details',['name'=>$courses[count($courses)-1]->name]) }}">
                                <div class="member" style="width:100%;min-width:323px;">
                                    <div class="member-img">
                                        <img
                                            src="{{ asset('images/courses/'.$courses[count($courses)-1]->images[0]->url) }}"
                                            class="img-fluid" alt="" style="height: 140px;max-height: 150px!important;">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $courses[count($courses)-1]->name }}</h4>
                                        <span>{{ $courses[0]->date }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif

                    @for( $i=0 ; $i<count($courses)-1; $i++ )
                        @if($i == 2)
                            @break
                        @else
                            <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up"
                                 data-aos-delay="300">
                                <a href="{{ route('details',['name'=>$courses[$i]->name]) }}">

                                    <div class="member" style="width:100%;min-width:323px;">
                                        <div class="member-img">
                                            <img src="{{ asset('images/courses/'.$courses[$i]->images[0]->url) }}"
                                                 class="img-fluid" alt="" style="height: 140px;max-height: 150px!important;">

                                        </div>
                                        <div class="member-info">
                                            <h4>{{ $courses[$i]->name }}</h4>
                                            <span>{{ $courses[$i]->date }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endfor


                </div>


            </div>
        </section><!-- End Team Section -->


        <section style="background-color: #303642">
            <h4 style="color: #F1BC57;text-align: center;">CLICK TO KNOW MORE ABOUT OUR COURSES</h4>
        </section>



        <!-- ======= clients Section ======= -->
        <section id="testimonials" class="testimonials" style="background-color: white">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>OUR CLIENTS</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%201.jpg" alt="">
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%202.jpg" alt="">
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%203.jpg" alt="">
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%204.jpg" alt="">
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%205.jpg" alt="">
                        </div>

                    </div>

                    <div class="testimonial-item">
                        <div class="card card-client">
                            <img src="assets/img/website/client%206.jpg" alt="">
                        </div>

                    </div>



                </div>

            </div>
        </section><!-- End Testimonials Section -->


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

                        <form action="{{ route('send.mail.from.home') }}" method="post">
                            @csrf
                            @if(Session::has('success_message'))
                            <div class="alert alert-success" style="margin-top: 15px;">
                                <strong>Success</strong> {{Session::get('success_message')}}
                            </div>
                            @endif
                            <div class="form-group">
                                <input type="text" name="name" class="form-control"  placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="background-color: #F1E6D2;color: white;"  required/>
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="background-color: #F1E6D2;color: white;"  required/>
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

    </main><!-- End #main -->

@endsection
