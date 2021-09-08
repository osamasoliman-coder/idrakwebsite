@extends('layouts.app')
@section('content')

    <div class="container-fluid" style="margin-top: 150px;">

        <div class="section-title">
            <h2>OUR SERVICES</h2>
        </div>


        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="{{asset('assets/img/website/services/serviceone.png')}}" alt=""
                     style="width: 100%;height: 650px;margin-top: 20px;">
            </div>
            <div class="col-md-8 col-sm-12" style="margin-top: 50px;">
                <h5 style="color: black">SPORT CLUBS & RECREATION FACILITY MANAGEMENT</h5>
                <p style="font-size: 13px;">Idrak Sport provides comprehensive services for sports facilities implementing latest methods in management that contribute to the development of the facilities. Our team has great experience in the sports Industry and they will work hard to achieve your goals. We offer various services in line with your business requirements, including:</p>

                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Management services</p>
                <p style="font-size: 13px;">After a comprehensive study of the facility, our team will prepare business and marketing plans, develop work-flow mechanisms, administrative controls, and employment proposals, which will contribute to the development and growth of the facility.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Project consultancy</p>
                <p style="font-size: 13px;">Do you have a project idea and want to implement it? <br>
                    After defining the facility's concept, operational & technical requirements and investment projections. Our team will provide you with detailed feasibility study, analyzing market and competitors and full implementation mechanisms.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Layout analysis & design</p>
                <p style="font-size: 13px;">We offer full fit out and setup for sports and facilities, our team will provide you with the prospective designs that suits the available spaces with a commitment to achieving the required flow of movement within the facility.</p>

                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Manpower supply</p>
                <p style="font-size: 13px;">We will supply you with highly professional personnel in the Sports & Recreation industry that will meet your standers, and help you achieve your business growth.</p>


                <p style="font-weight: bold;"><img src="{{asset('assets/img/website/simple.png')}}" alt="">Machinery supply</p>
                <p style="font-size: 13px;">Idrak Sport provides services of supplying high-quality sports equipment and training devices at competitive prices. We can also supply all operational equipment such as monitoring devices, safety equipment, or any other equipment that the facility may need.</p>

            </div>
        </div>
    </div>
@endsection
