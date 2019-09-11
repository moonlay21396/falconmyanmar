@extends('user.layouts.master')

@section('page_title','FALCON | Projects')

@section('content')

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="{{asset('images/user_image/images/slider-1.jpg')}}" data-src="{{asset('images/user_image/images/slider-1.jpg')}}">
                <div class="camera_caption">
                    <div class="container">

                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">MRT Underground Stations</h3>

                    </div>
                </div>
            </div>
            <div data-thumb="{{asset('images/user_image/images/slider-2.jpg')}}" data-src="{{asset('images/user_image/images/slider-2.jpg')}}">
                <div class="camera_caption">
                    <div class="container">

                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Theme Park Resort</h3>

                    </div>
                </div>
            </div>
            <div data-thumb="{{asset('images/user_image/images/slider-1.jpg')}}" data-src="{{asset('images/user_image/images/slider-1.jpg')}}">
                <div class="camera_caption">
                    <div class="container">

                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Shopping Centre/Retail Shop</h3>

                    </div>
                </div>
            </div>
            <div data-thumb="{{asset('images/user_image/images/slider-2.jpg')}}" data-src="{{asset('images/user_image/images/slider-2.jpg')}}">
                <div class="camera_caption">
                    <div class="container">

                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Airport</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Our Theme Part Resort Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Theme Park Resort</h2>

            </div>
            <div class="row latest_blog">
                <center>
                    @foreach($projects_data as $data)
                        <div class="col-md-4 col-sm-6 blog_content">
                            <img src="{{$data->photo_url}}" alt="" class="img-fluid" style="width: 100%; height: 200px;">
                            <div style="padding-top: 10px; font-style: bold; text-align: center; ">{{$data->name}}</div>
                        </div>
                        @endforeach
                </center>
            </div>
        </div>
    </section>
    <!-- End Our Theme Part Resort Area -->


    <!-- Shopping Centre/Retail Shop Area -->
    <section class="latest_blog_area" style="background-color: #3a3b3d;">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="color: #fff">Shopping Centre/Retail Shop</h2>

            </div>
            <div class="row latest_blog">
                <center>
                    @foreach($project_data as $data)
                        <div class="col-md-3 col-sm-6 blog_content">
                            <img src="{{$data->photo_url}}" alt="" class="img-fluid" style="width: 100%; height: 150px;">
                            <div style="padding-top: 10px; font-style: bold; color: #fff; text-align: center; ">{{$data->name}}</div>
                        </div>
                        @endforeach
                </center>
            </div>
        </div>
    </section>
    <!-- End Our Theme Part Resort Area -->

    <!-- Our Theme Part Resort Area -->
{{--    <section class="latest_blog_area">--}}
{{--        <div class="container">--}}
{{--            <div class="tittle wow fadeInUp">--}}
{{--                <h2>Government Property</h2>--}}
{{--            </div>--}}
{{--            <div class="row latest_blog">--}}
{{--                <center>--}}
{{--                    <div class="col-md-6 col-sm-6 blog_content">--}}
{{--                        <img src="{{asset('images/user_image/images/cns-1.jpg')}}" alt="">--}}
{{--                        <div style="padding-top: 10px; font-style: bold; text-align: center; ">Jabatan BOMBA</div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-sm-6 blog_content">--}}
{{--                        <img src="{{asset('images/user_image/images/cns-2.jpg')}}" alt="">--}}
{{--                        <div style="padding-top: 10px; font-style: bold; text-align: center; ">TNB Substation</div>--}}
{{--                    </div>--}}
{{--                </center>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Our Theme Part Resort Area -->

    @endsection
