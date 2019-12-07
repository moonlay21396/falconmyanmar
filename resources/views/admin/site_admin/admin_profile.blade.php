@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Member')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('nav_bar_text')
   Edit Profile
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
  {{-- @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">User Information</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>                       
                         <form id="update_profile" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <input type="hidden" name="id" id="id" value="{{$user->id}}">
                            <div class="col-md-6 pt-2 pb-2 mx-auto card" style="margin-top:30px;">
                                                   
                                    <div class="form-group">
                                        <label style="color:black;" for="update_name" class="col-form-label">Name:</label><br>
                                        <input type="text" class="form-control" id="update_name" name="name" value="{{$user->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label style="color:black;" for="update_email" class="col-form-label">Email:</label><br>
                                        <input type="email" class="form-control" id="update_email" name="email" value="{{$user->email}}">
                                    </div><br>
                                    
                                    <div class="form-group new_pass_input" style="display : none;">
                                        <div class="form-label-group">
                                        <input type="password" class="form-control" placeholder="New Password" name="new_password" autocomplete="off"> </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary float-left" onclick="change_pass()">Change Password</button>
                                    </div>
        
                                    <input type="submit" name="submit" class="rounded-0 btn btn-md btn-info" value="Change">                          
                            </div>
                        </form>                    
                </div>  
            </div>               
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            $('#update_profile').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
                ({
                    type: 'POST',
                    url: "{{url('admin/update_profile')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        //alert(data);
                        //$("#text").summernote('reset');
                        // $('#edit_modalBox').modal('hide');
                        toastr.success('Update data successful');
                        // load();
                    }
                });
                return false;
            });
        });

        var click=1;
        var change_pass=function(){
            if(click % 2 == 0){
            $(".new_pass_input").hide();
            $(".new_pass_input input[type='password']").removeAttr('required');
            }else{
            $(".new_pass_input").show();
            $(".new_pass_input input[type='password']").attr('required',true);
            }
            click++;
        }

    </script>
@endsection

