@extends('user.layouts.master')

@section('page_title','FALCON | Products')

@section('content')

    <div style="padding-top: 50px;"></div>
    <div class="container">

        <div class="row ">
            <div class="col-md-9 rightborder" >
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('/upload/product/'.$product_detail->photo)}}" width="300px" height="300px" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{$product_detail->title}}</h3>
                        <hr>
                        <p>Categories:
{{--                            <br>  Tags: <a href="#">Fire Extinguisher</a> , <a href="#">Home Safety Kit</a></p>--}}
                        <hr>
                        <p>
                            {!! $product_detail->detail !!}
                        </p>
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
                            <tr>
                                <td>Model No.</td>
                                <td>{{$product_detail->model_no}}</td>
                            </tr>
                            <tr>
                                <td>Part No.</td>
                                <td>{{$product_detail->part_no}}</td>
                            </tr>
                            <tr>
                                <td>Capacity</td>
                                <td>{{$product_detail->capacity}}</td>
                            </tr>
                            <tr>
                                <td>Type of Extinguishant</td>
                                <td>{{$product_detail->type_of_extinguishant}}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{$product_detail->type}}</td>
                            </tr>
                            <tr>
                                <td>Pressurised Agent</td>
                                <td>{{$product_detail->pressurised_agent}}</td>
                            </tr>
                            <tr>
                                <td>Working Pressure</td>
                                <td>{{$product_detail->working_pressure}}</td>
                            </tr>
                            <tr>
                                <td>Test Pressure</td>
                                <td>{{$product_detail->test_pressure}}</td>
                            </tr>
                            <tr>
                                <td>Temperature Range</td>
                                <td>{{$product_detail->temperature_range}}</td>
                            </tr>
                            <tr>
                                <td>Discharge Time (approx.)</td>
                                <td>{{$product_detail->discharge_time}}</td>
                            </tr>
                            <tr>
                                <td>Overall Height</td>
                                <td>{{$product_detail->overall_height}}</td>
                            </tr>
                            <tr>
                                <td>Cylinder Diameter</td>
                                <td>{{$product_detail->cylinder_diameter}}</td>
                            </tr>
                            <tr>
                                <td>Approx. Full Weight</td>
                                <td>{{$product_detail->full_weight}}</td>
                            </tr>
                            <tr>
                                <td>Body Material</td>
                                <td>{{$product_detail->body_material}}</td>
                            </tr>
                            <tr>
                                <td>Finishing</td>
                                <td>{{$product_detail->finishing}}</td>
                            </tr>
                            <tr>
                                <td>Class of Fire</td>
                                <td>{{$product_detail->class_of_fire}}</td>
                            </tr>
                            <tr>
                                <td>Fire Rating</td>
                                <td>{{$product_detail->fire_rating}}</td>
                            </tr>
                            <tr>
                                <td>Manufactured & Approved</td>
                                <td>{{$product_detail->manufactured_and_approved}}</td>
                            </tr>
                            <tr>
                                <td>Throw Range Discharge</td>
                                <td>{{$product_detail->throw_range_discharge}}</td>
                            </tr>

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