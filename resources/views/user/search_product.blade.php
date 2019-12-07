@extends('user.layouts.master')

@section('page_title','FALCON | Products')

@section('content')
    
    <!-- Our Available Products Area -->
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Products</h2>
            </div>
            <div class="row team_row" style="padding-top: 50px;">
                 @foreach($search as $search_data)
                <div class="col-md-3 col-sm-6 wow fadeInUp">
                   <div class="team_membar">
                        <img src="{{asset('/upload/product/'.$search_data->photo)}}" alt="">
                        <div class="team_content" style="height: 120px;">
                            <ul>
                                <li><a href="{{url('/view_detail'.'/'.$search_data['id'])}}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        
                        <a href="{{url('/view_detail'.'/'.$search_data['id'])}}" class="name">{{$search_data->title}}</a>
                        
                        </div>
                   </div>
                </div>
                 @endforeach
            </div>
           

<!-- -----------------------next row----------------- -->


        </div>
    </section>

@endsection