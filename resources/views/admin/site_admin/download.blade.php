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
    PDF
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
                                            Name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            PDF
                                        </th>
                                        <th>Action</th>
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
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create PDF</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form id="insert_download" class="md-form" enctype="multipart/form-data">
                              {{csrf_field()}}

                              <div class="row">
                                  <div class="col-md-6 imgUp">
                                      <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="name">Name</label>
                                          <textarea name="name" id="name" rows="1" required class="form-control"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <textarea name="des" rows="8" class="form-control" id="des" required></textarea>
                                      </div>
                                  </div><br><br><br>
                                  <div class="col-md-12">
                                    <label class="btn btn-primary upload_btn">
                                        Upload PDF<input type="file" id="upload_pdf" accept="application/pdf" name="pdf" class="uploadFile img" value="Upload File" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                  </div>
                              </div>

                              <button type="submit" class="btn btn-success pull-right" id="btn_submit">Create</button>
                              <div class="clearfix"></div>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
                <div class="modal fade" id="edit_modalBox">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit PDF</h4>
                                <button data-dismiss="modal" class="close">&times;</button>
                            </div>
                            <div class="modal-body">

                            <form id="update_download">
                              {{csrf_field()}}

                              <div class="row">
                                  <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                  <div class="col-md-6 imgUp">
                                      <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn">
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="update_name">Name</label>
                                          <textarea name="name" id="update_name" rows="1" class="form-control"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <textarea name="des" rows="8" class="form-control" id="update_des"></textarea>
                                      </div>
                                  </div><br><br><br>
                                  <div class="col-md-12">
                                    <label class="btn btn-primary upload_btn">
                                        Upload PDF<input type="file" id="update_pdf" accept="application/pdf" name="pdf" class="uploadFile img" value="Upload File" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                  </div>
                              </div>

                              <button type="submit" class="btn btn-success pull-right" id="btn_submit">Update</button>
                              <div class="clearfix"></div>
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

        $(document).ready( function () {
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
                $('#update_download')[0].reset();
            }

            load();

            function load(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_pdf')}}",

                  cache: false,
                  success: function(data){
                    var data_return=JSON.parse(data);
                    // console.log(data);
                    t.clear();
                    var no = 1;
                    for(var i = 0;i<data_return.length;i++){
                        t.row.add( [
                            no++,
                            '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                            data_return[i]['name'],
                             data_return[i]['description'].replace(/(<([^>]+)>)/ig,"").length > 40 ? data_return[i]['description'].replace(/(<([^>]+)>)/ig,"").substring(0,40)+'.....' : data_return[i]['description'],
                            '<a target="_blank" class="btn btn-success" href="'+data_return[i]['pdf_url']+'">pdf</a>',
                            '<button class="btn btn-info btn-sm" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'+
                            '<button class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')">Delete</button>'
                        ] ).draw( false );
                    }

                      $('#insert_download')[0].reset();
                    //   $('#image').attr('src','http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');

                  }
                });
            }

            $('#insert_download').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/download')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                    // alert(data);
                    // $("#des").summernote('reset');
                    $('#modalBox').modal('hide');
                    toastr.success('Insert pdf successful');
                    load();
                  }
                });
                return false;
            });

            delete_data=function(id){
            if(confirm('Are you sure You want to delete!')==true){
                $.ajax({
                        type: "POST",
                        url: "../delete/pdf/"+id,

                        cache: false,
                        success: function(data){
                            toastr.success('Delete pdf data successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

            edit_data=function(id){

                $.ajax({
                  type: "POST",
                //   url: "../edit/download/"+id,
                   url:"{{url('edit/download')}}/"+id,

                  cache: false,
                  success: function(data){
                    reset();
                    var download=JSON.parse(data);

                    console.log(download);
                    $('#id_edit').val(download['id']);
                    // $('#image').attr("src", download['photo_url']);
                    $("#imgs").attr("src", download['photo_url']);
                    $('#update_name').val(download['name']);
                    $('#update_des').summernote({
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
                        $('#update_des').summernote('code',download['description']);
                    $('#update_pdf').val(download['pdf_url']);
                    $('#edit_modalBox').modal('show');
                  }
                });
            }

            $('#update_download').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
    		        ({
    		            type: 'POST',
    		            url: "{{url('update/download')}}",
    		            data:updateData,
    		            cache:false,
    		            processData: false,
        				    contentType: false,
    		            success: function(data){
                        console.log(data);
                        //alert(data);
    		            $('#edit_modalBox').modal('hide');
                            toastr.success('Update PDF data successful');
          				  	load();
          				  }
    		        });
    		        return false;
              });

            //   windowOpen=function(pdf_url){
            //     window.open("pdf_url","_blank","fullscreen=yes");return false;
            //   }

            // start summernote

            $("#des").summernote({
                height : "150px",
                placeholder: 'Text',
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });
        });
    </script>
@endsection