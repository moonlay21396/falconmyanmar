@extends('user.layouts.master')

@section('page_title','FALCON | About')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>About Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">About Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <style>
        h4.about_font{
           
        }
    </style>
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <h4 class="about_font">{!! $about_data->about_us !!}</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-6 col-sm-12">
                    <div class="subtittle">
                        <h2>Vision</h2>
                    </div>
                    <p>{!! $about_data->vision !!}</p>
                </div>
                <div class="who_we_area col-md-6 col-sm-12">
                    <div class="subtittle">
                        <h2>Mission</h2>
                    </div>
                    <p>{!! $about_data->mission !!}</p>
                </div>
                <div class="who_we_area col-md-12 col-sm-12">
                    
                    <br>
                </div>
                <style>
                    /* .who_we_are div span{
                        font-size: 18px!important;
                    }
                    .who_we_are span div span{
                        font-size: 19px!important;
                    } */
                </style>
                <div class="row about_row">
                    <div class="col-md-1"></div>
            <div class="who_we_are col-md-5">
                    <img src="{{asset('images/cns-2.jpg')}}" alt="" class="img-responsive" style="width:100%!important;box-shadow:0px 0px 3px #ececec;">   
                    </div>
                     <div class="who_we_are col-md-6">
                        <div class="">
                            <h1>Value</h1>
                        </div>
                        <span>
                            {!! $about_data->value !!}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- call Area -->
    <section class="call_min_area">
        <div class="container">
            <h2>+959 964911300</h2>
            <p>Contact With Us. We are one of the best services companies.</p>
            <div class="call_btn">
                <a href="{{url('contact')}}" class="button_all">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- End call Area -->

    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>{!! $about_data->our_feature !!}</h4>
            </div>
            <br>
            <div class="feature_row row">
                <div class="col-md-12 feature_content">
                    <div class="subtittle">
                        <h1>WHY CHOOSE US</h1>
                        <h5>{!! $about_data->why_choose_us_text !!}</h5>
                    </div>
                </div>
                @foreach($whychooseus_data as $data)
                    <div class="col-md-4 feature_content">
                        <div class="media">
                            <div class="media-left">
                                <a>
                                    <i class="
                                    @php
                                        if ($data->fontawesome == null)
                                            {
                                                echo 'fa fa-wrench';
                                            }
                                        else
                                            {
                                                echo $data->fontawesome;
                                            }
                                    @endphp
" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <a>{{$data->title}}</a>
                                <p>
                                    {!! $data->text !!}
{{--                                    {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($data->text)),150)}}--}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>

            </div>
        </div>
    </section>
    <!-- End Our Features Area -->



    <!-- Our Team Area -->
    <section class="our_team_area" style="margin-top:-450px";>
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Team</h2>
            </div>
            <div class="row team_row">
                @foreach($our_team as $data)
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team_membar">
                            <img src="{{$data->photo_url}}" alt="" class="img-fluid" style="width: 100%;">
                            <div class="team_content">
                                <ul>
                                    <li><a href="{{$data->fb_link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                                <a class="name">{{$data->name}}</a>
                                <h6>{{$data->position}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Team Area -->

    @endsection