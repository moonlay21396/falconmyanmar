@extends('user.layouts.master')

@section('page_title','FALCON | Products')

@section('content')

    <!-- Our Available Products Area -->
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>{{$category_name}}</h2>
            </div>
            <div class="row team_row" style="padding-top: 50px;">
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team_membar">
                            <img src="{{$product['photo_url']}}" alt="">
                            <div class="team_content" style="height: 120px;">
                                <ul>
                                    <li><a href="{{url('/view_detail'.'/'.$product['id'])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="3" class="name">{{$product['title']}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- -----------------------next row----------------- -->

{{--            <div class="row team_row" style="padding-top: 50px;">--}}
{{--                <div class="col-md-3 col-sm-6 wow fadeInUp">--}}
{{--                    <div class="team_membar">--}}
{{--                        <img src="{{asset('images/user_image/images/extinguisher/extinguisher.png')}}" alt="">--}}
{{--                        <div class="team_content" style="height: 120px;">--}}
{{--                            <ul>--}}
{{--                                <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
{{--                            <a href="#" class="name">1 Kg Fire Extinguisher</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                    <div class="team_membar">--}}
{{--                        <img src="{{asset('images/user_image/images/extinguisher/extinguisher.png')}}" alt="">--}}
{{--                        <div class="team_content" style="height: 120px;">--}}
{{--                            <ul>--}}
{{--                                <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
{{--                            <a href="3" class="name">2 Kg Fire Extinguisher</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                    <div class="team_membar">--}}
{{--                        <img src="{{asset('images/user_image/images/extinguisher/extinguisher.png')}}" alt="">--}}
{{--                        <div class="team_content" style="height: 120px;">--}}
{{--                            <ul>--}}
{{--                                <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
{{--                            <a href="#" class="name">4 Kg Fire Extinguisher</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">--}}
{{--                    <div class="team_membar">--}}
{{--                        <img src="{{asset('images/user_image/images/extinguisher/extinguisher.png')}}" alt="">--}}
{{--                        <div class="team_content" style="height: 120px;">--}}
{{--                            <ul>--}}
{{--                                <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
{{--                            <a href="#" class="name">2 Kg Portable CO2 Fire Extinguisher</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </section>
    <!-- End Our Available Products Area -->

    @endsection