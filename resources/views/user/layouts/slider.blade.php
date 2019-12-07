<section class="slider_area row m0">
    <div class="slider_inner">
        {{-- {{asset('/upload/banner'.$banner[0]['photos'])}} --}}
        <div data-thumb="{{asset('/upload/banner/'.$banner[0]['photos'])}}" data-src="{{asset('/upload/banner/'.$banner[0]['photos'])}}">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated" style="color: #fff">Welcome to our</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"  style="color: #fff;padding-top:0;margin-top:0;padding-buttom:0;margin-buttom:0;">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                    <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #fff;padding:0 auto;margin:0 auto;padding-buttom:0;margin-buttom:0;">{!! $banner[0]->description !!}</p>
                </div>
            </div>
        </div>
        <div data-thumb="{{asset('/upload/banner/'.$banner[1]['photos'])}}" data-src="{{asset('/upload/banner/'.$banner[1]['photos'])}}">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated"  style="color: #fff">Welcome to our</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"  style="color: #fff;padding:0 auto;margin:0 auto;padding-buttom:0;margin-buttom:0;">FALCON, Engineering Co, Ltd.</h3>
                    <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #fff;padding:0 auto;margin:0 auto;padding-buttom:0;margin-buttom:0;">{!! $banner[1]->description !!}</p>
                </div>
            </div>
        </div>
        <div data-thumb="{{asset('/upload/banner/'.$banner[2]['photos'])}}" data-src="{{asset('/upload/banner/'.$banner[2]['photos'])}}">
            <div class="camera_caption">
                <div class="container">
                    <h5 class=" wow fadeInUp animated"  style="color: #fff">Welcome to our</h5>
                    <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"  style="color: #fff;padding:0 auto;margin:0 auto;padding-buttom:0;margin-buttom:0;">FALCON, Engineering Co, Ltd.</h3>
                    <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #fff;padding:0 auto;margin:0 auto;padding-buttom:0;margin-buttom:0;">{!! $banner[2]->description !!}</p>

                </div>
            </div>
        </div>
    </div>
</section>