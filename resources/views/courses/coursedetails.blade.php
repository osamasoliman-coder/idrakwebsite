@extends('home')

@section('content')
    <!-- ======= Courses Section ======= -->
    <section id="team" class="team section-bg" style="background-color: #FFFFFF;margin-top: 70px;">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
            </div>

            <div class="row">

                @foreach ($images as $image )
                <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="imggg" style="padding: 10px;" data-aos="zoom-in-left">
                        <a href="{{asset('images/courses/'.$image->url)}}" data-lightbox="portfolio" class="venobox"
                           data-gall="gallery-item">
                            <img class="img-fluid popup" src="{{asset('images/courses/'.$image->url)}}" alt="image"
                                 style="  border-radius: 25px!important; box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);height: 250px;width: 100%;">
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

            <p style="text-align: center;">
                {{$images->links("pagination::bootstrap-4")}}
            </p>
        </div>
    </section><!-- End Team Section -->

@endsection
