<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" target="_blank" class="simple-text logo-normal">
            FalconMyanmar
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item @if($url=="product") active @endif">
                <a class="nav-link" href="{{url('admin')}}">
                    <i class="material-icons">event</i>
                    <p>Add Product</p>
                </a>
            </li>
            <li class="nav-item @if($url=="project") active @endif">
                <a class="nav-link" href="{{url('admin/project')}}">
                    <i class="material-icons">event</i>
                    <p>Add Project</p>
                </a>
            </li>
            <li class="nav-item @if($url=="about") active @endif">
                <a class="nav-link" href="{{url('admin/about')}}">
                    <i class="material-icons">event</i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item @if($url=="our_team") active @endif">
                <a class="nav-link" href="{{url('admin/our_team')}}">
                    <i class="material-icons">event</i>
                    <p>Our Team</p>
                </a>
            </li>
            <li class="nav-item @if($url=="why_choose_us") active @endif">
                <a class="nav-link" href="{{url('admin/why_choose_us')}}">
                    <i class="material-icons">event</i>
                    <p>Why Choose Us</p>
                </a>
            </li>
            <li class="nav-item @if($url=="slide_photo") active @endif">
                <a class="nav-link" href="{{url('admin/slide_photo')}}">
                    <i class="material-icons">event</i>
                    <p>Add Slide Photo</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>