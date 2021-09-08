<header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ route('home.index') }}">
                <img src="{{ asset('assets/img/website/logo.png') }}" alt="" style="width: 70px;height: 70px;">
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                <li class="drop-down"><a href="#">Services</a>
                    <ul>
                        <li><a href="{{ route('service.one') }}"><p style="font-size: 11px;">SPORT CLUBS & RECREATION FACILITY MANAGEMENT</p></a></li>
                        <li><a href="{{ route('service.two') }}"><p style="font-size: 11px;">SPORT MARKETING</p></a></li>
                        <li><a href="{{ route('service.three') }}"><p style="font-size: 11px;">SPORTS TRAINING & CONSULTATIONS</p></a></li>
                        <li><a href="{{ route('service.four') }}"><p style="font-size: 11px;">SPORT BROKERAGE</p></a></li>
                        <li><a href="{{ route('service.five') }}"><p style="font-size: 11px;">SPORTS SERVICES & CONTRACTING</p></a></li>
                        <li><a href="{{ route('service.six') }}"><p style="font-size: 11px;">SPORTS EVENT MARKETING & MANAGEMENT</p></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('courses') }}">Courses</a></li>
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->


    </div>
</header><!-- End Header -->
