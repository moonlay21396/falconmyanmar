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
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
                <h4>{!! $about_data->about_us !!}</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-4 col-sm-12">
                    <div class="subtittle">
                        <h2>Vision</h2>
                    </div>
                    <p>{!! $about_data->vision !!}</p>
                </div>
                <div class="who_we_area col-md-4 col-sm-12">
                    <div class="subtittle">
                        <h2>Mission</h2>
                    </div>
                    <p>{!! $about_data->mission !!}</p>
                </div><div class="who_we_area col-md-4 col-sm-12">
                    <div class="subtittle">
                        <h2>Value</h2>
                    </div>
                    <p>{!! $about_data->value !!}</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- call Area -->
    <section class="call_min_area">
        <div class="container">
            <h2>+880 123 456 789</h2>
            <p>Contact With Us. We are the top Construction Company. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="call_btn">
                <a href="#" class="button_all">GET IN TOUCH</a>
                <a href="#" class="button_all">QUICK QUOTE</a>
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
            <div class="feature_row row">
                <div class="col-md-12 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
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

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>Booking now if you need build your dream home.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->


    <!-- Our Team Area -->
    <section class="our_team_area">
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