@extends('user.layouts.master')

@section('page_title','FALCON | Products')

@section('content')

    <div style="padding-top: 50px;"></div>
    <div class="container">

        <div class="row ">
            <div class="col-md-9 rightborder" >
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{$product_detail['photo_url']}}" width="300px" height="300px" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$product_detail['title']}}</h3>
                        <hr>
                        <p>
                            Category: {{$product_detail->category_id}}
                        </p>
{{--                            <br>  Tags: <a href="#">Fire Extinguisher</a> , <a href="#">Home Safety Kit</a></p>--}}
                        <hr>
                        <p>
                            {!! $product_detail->detail !!}
                        </p><br>
                        <a href="{{$product_detail->pdf_url}}" target="_blank" class="button_all btn-sm pull-right">Download PDF</a>
                    </div>
                </div>

                <!-- ---------------Start View Details Table------------- -->
                <div class="row">

                    <div style="padding-top: 50px;"></div>

                    <h3 style="padding-left: 30px;">Product Description</h3>

                    <div style="padding : 30px;">
                        <table class="table table-responsive table-hover">
                            <thead>
                            <tr>
                                <th colspan="2">TECHNICAL DATA</th>
                            </tr>
                            </thead>
                            <tbody>
                                {!! $product_detail->summertable !!}
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <hr>
                    </div>
                </div>

{{--                <div class="row">--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-4"  style="padding: 20px;">--}}
{{--                            <strong>Related</strong>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <a href="#">2 kg Fire Extinguisher</a><br>--}}
{{--                        <p>May 25, 2017</p>--}}
{{--                        <p>Similar post</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <a href="#">4 kg Fire Extinguisher</a><br>--}}
{{--                        <p>May 25, 2017</p>--}}
{{--                        <p>Similar post</p>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <a href="#">6 kg Fire Extinguisher</a><br>--}}
{{--                        <p>May 25, 2017</p>--}}
{{--                        <p>Similar post</p>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <hr>--}}

{{--                <div class="row">--}}
{{--                    <!-- Our Available Products Area -->--}}
{{--                    <section class="our_team_area">--}}

{{--                        <div class="tittle wow fadeInUp">--}}
{{--                            <h2>Related Products</h2>--}}
{{--                        </div>--}}
{{--                        <div class="row team_row" style="padding-top: 30px;padding: 20px;">--}}
{{--                            <div class="col-md-4 col-sm-6 wow fadeInUp">--}}
{{--                                <div class="team_membar">--}}
{{--                                    <img src="images/extinguisher/extinguisher.png" alt="">--}}
{{--                                    <div class="team_content">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                        <a href="#" class="name">1 Kg Fire Extinguisher</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--                                <div class="team_membar">--}}
{{--                                    <img src="images/extinguisher/extinguisher.png" alt="">--}}
{{--                                    <div class="team_content">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                        <a href="3" class="name">2 Kg Fire Extinguisher</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                                <div class="team_membar">--}}
{{--                                    <img src="images/extinguisher/extinguisher.png" alt="">--}}
{{--                                    <div class="team_content">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="view-details.html"><i class="fa fa-plus" aria-hidden="true"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                        <a href="#" class="name">4 Kg Fire Extinguisher</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}


{{--                    </section>--}}
{{--                    <!-- End Our Available Products Area -->--}}
{{--                </div>--}}


                <!--  ------------------End View Details Table------------------   -->

            </div>

            <div class="col-md-3">
                <div class="row" style="padding-left: 30px;">

{{--                    <div class="input-group md-form form-sm form-2 pl-0">--}}
{{--                        <input class="my-0 py-1 red-border" type="text" placeholder=" Search" aria-label="Search" style="height: 35px;">--}}

{{--                        <span class="btn glyphicon glyphicon-search" style="font-size: 18px;"></span>--}}
{{--                    </div><br>--}}

                    <!-- searchForm -->




                    <h5 style="font-size: 20px;">Product Categories</h5><br>

                    @foreach($categories as $category)
                        <a href="{{url('/products'.'/'.$category->id)}}" style="color: #010101;display: block;border-top: 1px solid #ccc;padding-top: 10px;padding-bottom: 10px;">
                            {{$category->name}}
                        </a>
                    @endforeach

                    <br>

                </div>
            </div>
        </div>

    </div>

@endsection