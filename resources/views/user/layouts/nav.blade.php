<nav class="navbar navbar-default header_aera" id="main_navbar">
    <div class="container">
        <!-- searchForm -->
        <div class="searchForm">
        <form action="{{url('/search_product')}}" class="row m0" method="post">
            {{csrf_field()}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                </div>
            </form>
        </div><!-- End searchForm -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <style>
                    @media(max-width: 991px){
                        .navbar-brand img{
                            width:40%;
                            margin-top: -20px!important;
                        }
                    }
                </style>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/user_image/images/logo_only.png')}}" alt="" width="60%" style="margin-top:-40px;"></a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-10 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li class="dropdown submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products</a>
                        <ul class="dropdown-menu other_dropdwn">
                            @foreach($categories as $category)
                                <li><a href="{{url('/products'.'/'.$category->id)}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{url('/projects')}}">Our Projects</a></li>
                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                    <li><a href="{{url('/downloads')}}">Downloads</a></li>
                    <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container -->
</nav>
