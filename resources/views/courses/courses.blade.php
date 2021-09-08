@extends('home')

@section('content')
    <!-- ======= Courses Section ======= -->
    <section id="team" class="team section-bg" style="background-color: #FFFFFF;margin-top: 70px;">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>OUR COURSES</h2>
            </div>

            <div class="row">

                @foreach ($courses as $course )
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('details',['name'=>$course->name]) }}">
                        <div class="member" style="width:100%;min-width:323px;">
                            <div class="member-img">
                                <img src="{{ asset('images/courses/'.$course->images[0]->url) }}" class="img-fluid" alt="" style="height: 140px;max-height: 150px!important;">
                            </div>
                            <div class="member-info">
                                <h4>{{ $course->name }}</h4>
                                <span>{{ $course->date }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->

@endsection
