@extends('admin.layouts.site_admin.site_admin_design')

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
    Products
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Add</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Model No.
                                    </th>
                                    <th>
                                        Part No.
                                    </th>
                                    <th></th>
                                    <th></th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Product</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="insert_product" enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{--                                                <label for="title">Title</label>--}}
                                                <textarea name="title" id="title" class="form-control" rows="1" placeholder="Title" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                @foreach ($category as $data)
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="category_id[]" class="custom-control-input" id="customCheck{{$data->id}}" value="{{$data->id}}">
                                                                <label class="custom-control-label" for="customCheck{{$data->id}}">{{$data->name}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="model_no" id="model_no" class="form-control" rows="1" placeholder="Model No." required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="part_no" id="part_no" class="form-control" rows="1" placeholder="Part No." required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="capacity" id="capacity" class="form-control" rows="1" placeholder="Capacity" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="type_of_extinguishant" id="type_of_extinguishant" class="form-control" rows="1" placeholder="Type of Extinguishant" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="type" id="type" class="form-control" rows="1" placeholder="Type" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="pressurised_agent" id="pressurised_agent" class="form-control" rows="1" placeholder="Pressurised Agent" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="working_pressure" id="working_pressure" class="form-control" rows="1" placeholder="Working Pressure" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="test_pressure" id="test_pressure" class="form-control" rows="1" placeholder="Test Pressure" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="temperature_range" id="temperature_range" class="form-control" rows="1" placeholder="Temperatrue Range" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="discharge_time" id="discharge_time" class="form-control" rows="1" placeholder="Discharge Time" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="overall_height" id="overall_height" class="form-control" rows="1" placeholder="Overall Height" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="cylinder_diameter" id="cylinder_diameter" class="form-control" rows="1" placeholder="Cylinder Diameter" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="full_weight" id="full_weight" class="form-control" rows="1" placeholder="Full Weight" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="body_material" id="body_material" class="form-control" rows="1" placeholder="Body Material" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="finishing" id="finishing" class="form-control" rows="1" placeholder="Finishing" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="class_of_fire" id="class_of_fire" class="form-control" rows="1" placeholder="Class of Fire" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="fire_rating" id="fire_rating" class="form-control" rows="1" placeholder="Fire Rating" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="manufactured_and_approved" id="manufactured_and_approved" class="form-control" rows="1" placeholder="Manufactured and Approved" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="throw_range_discharge" id="throw_range_discharge" class="form-control" rows="1" placeholder="Thow Range Discharge" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="des">Description</label> --}}
                                        <textarea name="detail" rows="8" class="form-control" id="summernote" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                        <form id="update_data">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{--                                                <label for="title">Title</label>--}}
                                                <textarea name="title" id="update_title" class="form-control" rows="1" placeholder="Title" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="model_no" id="update_model_no" class="form-control" rows="1" placeholder="Model No." required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="part_no" id="update_part_no" class="form-control" rows="1" placeholder="Part No." required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="capacity" id="update_capacity" class="form-control" rows="1" placeholder="Capacity" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="type_of_extinguishant" id="update_type_of_extinguishant" class="form-control" rows="1" placeholder="Type of Extinguishant" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="type" id="update_type" class="form-control" rows="1" placeholder="Type" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="pressurised_agent" id="update_pressurised_agent" class="form-control" rows="1" placeholder="Pressurised Agent" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="working_pressure" id="update_working_pressure" class="form-control" rows="1" placeholder="Working Pressure" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="test_pressure" id="update_test_pressure" class="form-control" rows="1" placeholder="Test Pressure" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="temperature_range" id="update_temperature_range" class="form-control" rows="1" placeholder="Temperatrue Range" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="discharge_time" id="update_discharge_time" class="form-control" rows="1" placeholder="Discharge Time" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="overall_height" id="update_overall_height" class="form-control" rows="1" placeholder="Overall Height" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="cylinder_diameter" id="update_cylinder_diameter" class="form-control" rows="1" placeholder="Cylinder Diameter" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="full_weight" id="update_full_weight" class="form-control" rows="1" placeholder="Full Weight" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="body_material" id="update_body_material" class="form-control" rows="1" placeholder="Body Material" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="finishing" id="update_finishing" class="form-control" rows="1" placeholder="Finishing" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="class_of_fire" id="update_class_of_fire" class="form-control" rows="1" placeholder="Class of Fire" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="fire_rating" id="update_fire_rating" class="form-control" rows="1" placeholder="Fire Rating" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="manufactured_and_approved" id="update_manufactured_and_approved" class="form-control" rows="1" placeholder="Manufactured and Approved" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                                <label for="title">Title</label>--}}
                                        <textarea name="throw_range_discharge" id="update_throw_range_discharge" class="form-control" rows="1" placeholder="Thow Range Discharge" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label for="des">Description</label> --}}
                                        <textarea name="detail" rows="8" class="form-control" id="update_detail" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {

            var t=$("#datatable").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            });
            function reset(){
                $('#update_data')[0].reset();
            }

            load();

            function load(){
                $.ajax({
                    type: "POST",
                    url: "{{url('get_all_product')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        //console.log(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add( [
                                no++,
                                '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data_return[i]['title'],
                                data_return[i]['model_no'],
                                data_return[i]['part_no'],
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>',
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                            ] ).draw( false );
                        }

                        $('#insert_product')[0].reset();
                        $('#image').attr('src','{{asset('images/default.jpg')}}');

                    }
                });
            }

            $('#insert_product').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/product')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        console.log(data);
                        $("#summernote").summernote('reset');
                        $('#modalBox').modal('hide');
                        toastr.success('Insert product data successful');
                        load();
                    }
                });
                return false;
            });

            edit_data=function(id){

                $.ajax({
                    type: "POST",
                    url: "edit/product/"+id,

                    cache: false,
                    success: function(data){
                        reset();
                        var product=JSON.parse(data);

                        //console.log(product);
                        $("#imgs").attr("src", product['photo_url']);
                        $('#id_edit').val(product['id']);
                        $('#update_title').val(product['title']);
                        $('#update_model_no').val(product['model_no']);
                        $('#update_part_no').val(product['part_no']);
                        $('#update_capacity').val(product['capacity']);
                        $('#update_type_of_extinguishant').val(product['type_of_extinguishant']);
                        $('#update_type').val(product['type']);
                        $('#update_pressurised_agent').val(product['pressurised_agent']);
                        $('#update_working_pressure').val(product['working_pressure']);
                        $('#update_test_pressure').val(product['test_pressure']);
                        $('#update_temperature_range').val(product['temperature_range']);
                        $('#update_discharge_time').val(product['discharge_time']);
                        $('#update_overall_height').val(product['overall_height']);
                        $('#update_cylinder_diameter').val(product['cylinder_diameter']);
                        $('#update_full_weight').val(product['full_weight']);
                        $('#update_body_material').val(product['body_material']);
                        $('#update_finishing').val(product['finishing']);
                        $('#update_class_of_fire').val(product['class_of_fire']);
                        $('#update_fire_rating').val(product['fire_rating']);
                        $('#update_manufactured_and_approved').val(product['manufactured_and_approved']);
                        $('#update_throw_range_discharge').val(product['throw_range_discharge']);
                        $('#update_detail').summernote({
                            height : "150px",
                            toolbar: [
                                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['view', ['fullscreen', 'codeview', 'help']],
                            ],
                        });
                        $('#update_detail').summernote('code',product['detail']);

                        $('#edit_modalBox').modal('show');
                    }
                });
            }

            $('#update_data').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
                ({
                    type: 'POST',
                    url: "{{url('update/product')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        //alert(data);
                        $("#summernote").summernote('reset');
                        $('#edit_modalBox').modal('hide');
                        toastr.success('Update product data successful');
                        load();
                    }
                });
                return false;
            });

            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                        type: "POST",
                        url: "delete/product/"+id,

                        cache: false,
                        success: function(data){
                            toastr.success('Delete product data successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }



            // start summernote
            $("#summernote").summernote({
                height : "150px",
                placeholder: 'Detail',
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });
            $(document).on('click','.note-btn',function(){
                $(".note-group-select-from-files label").text("Upload image");
                $(".note-group-select-from-files label").attr('class','btn btn-primary');
                $(".note-group-select-from-files label").attr("for","photo_summernote");
                $(".note-group-select-from-files input:file").attr("id","photo_summernote");
            });

        });
    </script>
@endsection