@extends('user.layouts.master')

@section('page_title','FALCON | Home')

@section('content')

    <!-- Slider area -->
@section('slider')
        @include('user.layouts.slider')
    @endsection
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
            <div class="row builder_all">

                <div class="col-md-4 col-lg-4 col-sm-6 builder">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <h4>One-Stop-Shop</h4>
                    <p>Not many fire protection equipment suppliers carry a comprehensive product range at competitive prices. We do.  Just one call to us solves all your fire safety needs. </p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 builder">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h4>Proactive</h4>
                    <p>We do not just rest on our laurels.  We constantly have our finger on the pulse of the latest fire protection technology which we can adopt for further improvements on our products. </p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 builder">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <h4>Quality Control</h4>
                    <p>Even though our products are certified to have complied with the strictest international quality standards, constant in-house quality control is practised to give our customers 100% assurance of quality. </p>
                </div>

                <br><br>

                <div class="col-md-6 col-lg-6 col-sm-6 builder">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <h4>Strict Compliance</h4>
                    <p>All our products fulfil the most stringent international standards and carry the requisite approvals from BOMBA, Malaysia. </p>
                </div>

                <div class="col-md-6  col-lg-6 col-sm-6 builder">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <h4>On-Time Delivery</h4>
                    <p>We spare no effort in meticulously maintaining our inventory at optimum levels.  This is to ensure timely delivery to our customers, all the time.  Our after-sales service personnel also constantly seek for feedback from our customers so that we can address any areas which we are lacking.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- What ew offer Area -->
    <section class="what_we_area row" >
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="color: #ffffff">OUR PROJECTS</h2>

            </div>
            <div class="row construction_iner">
                @foreach($projects_data as $data)
                    <div class="col-md-4 col-sm-6 construction">
                        <div class="cns-img">
                            <img src="{{$data->photo_url}}" alt="" class="img-fluid" style="width: 100%; height: 250px;">
                        </div>
                        <div class="cns-content">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <a href="#">{{$data->name}}</a>
                            <p>
                                {{str_limit(preg_replace("/&#?[a-z0-9]{2,8};/i","",strip_tags($data->description)),100)}}
                            </p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- End What we offer Area -->
    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Accreditation</h2>
                <h4>{!! $about_data->our_accreditation !!}</h4>
            </div>
            <div class="partners">
                @foreach($slide_photo as $data)
                    <div class="item"><img src="{{asset('upload/slide_photo/'.$data->photo)}}" alt="" class="img-fluid" style="width: 100%; height: 100px;"></div>
                    @endforeach
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4>Want to know us more?</h4>
                        <p>Drop us a line anytime, and one of our customer service reps will respond to you as soon as possible.</p>
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="#" class="button_all">Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    @endsection
