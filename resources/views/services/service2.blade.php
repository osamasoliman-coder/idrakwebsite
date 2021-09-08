@extends('layouts.app')
@section('content')

    <div class="container-fluid" style="margin-top: 150px;">

        <div class="section-title">
            <h2>OUR SERVICES</h2>
        </div>


        <div class="row service2">
            <div class="col-md-4 col-sm-12">
                <img class="img-service" src="{{asset('assets/img/website/services/service2.png')}}" alt="">
            </div>
            <div class="col-md-8 col-sm-12 dd" style="margin-top: 50px;">
                <h5 style="color: black">SPORT MARKETING</h5>
                <p class="margin-top-remove">Build a relationship that drives growth. We provide custom sports marketing and consultancy services for corporate clients.</p>

                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Sports Consulting</p>
                <p style="font-size: 13px;">Advisory services for corporate clients seeking exposureand relationships in sports.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Sports Marketing</p>
                <p style="font-size: 13px;">Customized sports marketing solutions for athletes, sports teams and brands.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Social Media</p>
                <p style="font-size: 13px;">Content production and social media management services for companies and professional athletes to elevate the brand and enhance its reach.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Business Development</p>
                <p style="font-size: 13px;">Build long-term sport market strategies and relationships.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Sports Sponsorships</p>
                <p style="font-size: 13px;">Develop strategic partnerships for brands through attractive sponsorship properties.</p>

            </div>
        </div>
    </div>
@endsection
