@extends('user.layouts.master')

@section('page_title','Downloads')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Downloads</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Downloads</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
    <br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($pdf_downloads as $data)
                    <div class="row">

                        <div class="col-md-4">
                            <img src="{{$data['photo_url']}}" alt="" class="img-responsive" style="width:350px; height:200px;">
                        </div>
                        <div class="col-md-8">
                            <h2>
                            {{$data['name']}}
                            </h2><br>
                            <p>
                            {!! $data['description'] !!}
                            </p>
                            <a href="{{$data->pdf_url}}" target="_blank" class="button_all"> PDF Downloads</a>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    {{$downloads->links()}}
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection