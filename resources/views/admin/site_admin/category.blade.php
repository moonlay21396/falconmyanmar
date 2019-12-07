@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Category')
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
     Category
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
                                    <thead class="text-primary">
                                    <th width="8%">
                                        No
                                    </th>
                                    <th width="18%">
                                        Name
                                    </th>
                                    <th width="30%">Action</th>
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

                {{--****************start model--}}  
    <div class="modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_category" class="md-form" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" value="" name="cat_id">
                        
                        <div class="row">
                           <div class="col-md-12">
                           <div class="form-group">
                                <label for="cat_name" class="col-form-label">Name:</label><br>
                                <input type="text" class="form-control" id="cat_name" name="name" required rows="1">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0 pull-right" id="btn_submit">Create</button>
                           </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                         
                        <!-- <input type="submit" value="Create" class="btn btn-success"> -->
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    {{--**********************end model--}}

               <!-- Edit Modal -->
    <div class="modal" id="edit_modalBox">
         <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Change Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_category" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}

                    <input type="hidden" name="id" id="id_edit">
                    <div class="form-group">
                        <label for="update_name" class="col-form-label">Name:</label><br>
                        <textarea class="form-control" id="update_name" name="name" rows="1"></textarea>
                    </div>             
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <input type="submit" class="btn btn-info rounded-0" value="Change">
                    </div>
                </form>

            </div>
        </div>
    </div>
        <!--End of Edit Modal -->

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
                $('#update_category')[0].reset();
            }

            // main_load();
            load();

            function load(){
                $.ajax({
                    type: "get",
                    url: "{{url('get_all_category')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        console.log(data_return);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add([
                                no++,
                                data_return[i]['name'],
                                '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'+
                                '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                            ]).draw( false );
                        }

                        $('#insert_category')[0].reset();
                    }
                });
            }

            $('#insert_category').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('admin/insert_category')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        // alert('itwork');
                        //console.log(data);
                        $('#modalBox').modal('hide');
                        toastr.success('Create successful');
                        load();
                    }
                });
                return false;
            });


            edit_data=function(id){

                $.ajax({
                    type: "get",
                    url: "../edit/category/"+id,

                    cache: false,
                    success: function(data){
                        reset();
                        var cat=JSON.parse(data);

                        console.log(cat);
                        $('#id_edit').val(cat['id']);
                        $('#update_name').val(cat['name']);

                        $('#edit_modalBox').modal('show');
                    }
                });
            }

            $('#update_category').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
                ({
                    type: 'POST',
                    url: "{{url('update/category')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //console.log(data);
                        //alert(data);
                        $('#edit_modalBox').modal('hide');
                        toastr.success('Update successful');
                        load();
                    }
                });
                return false;
            });

            delete_data=function(id){
            var delete_url="{{url('/admin/delete/category')}}/"+id;
            var url="{{url('admin/delete/cat_product')}}/"+id;
                $.ajax({
                    url : url,
                    type : "get",
                    dataType : "json"
                    }).done(function(response){
                        if(confirm(`This category has ${response} company. Are you sure you want to delete?`)){
                            $.ajax({
                            url : delete_url,
                            type : "post",
                            data : {'_method' : 'delete'},
                            dataType : "json"
                            }).done(function(response){
                            toastr.success("Delete Data Successful!");
                            load();
                            
                            }).fail(function(error){
                            console.log(error);
                            });
                        }

                    }).fail(function(error){
                    console.log(error);
                    });
                 }
        });
    </script>
@endsection
