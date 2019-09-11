@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('nav_bar_text')
    About
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-body">
                            <form id="update_data">
                                {{csrf_field()}}

                                <div class="row">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_about_us
                                            "><b>About Us</b></label><br>
                                            <textarea name="about_us" rows="8" class="form-control" id="update_about_us"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_vision
                                            "><b>Vision</b></label><br>
                                            <textarea name="vision" rows="8" class="form-control" id="update_vision"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_mission
                                            "><b>Mission</b></label><br>
                                            <textarea name="mission" rows="8" class="form-control" id="update_mission"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_value
                                            "><b>Value</b></label><br>
                                            <textarea name="value" rows="8" class="form-control" id="update_value"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_our_feature
                                            "><b>Our Feature</b></label><br>
                                            <textarea name="our_feature" rows="8" class="form-control" id="update_our_feature"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_why_choose_us_text
                                            "><b>Why Choose Us Text</b></label><br>
                                            <textarea name="why_choose_us_text" rows="8" class="form-control" id="update_why_choose_us_text"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_our_accreditation
                                            "><b>Our Accreditation</b></label><br>
                                            <textarea name="our_accreditation" rows="8" class="form-control" id="update_our_accreditation"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                            </form>
                        </div>
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
            function reset(){
                $('#update_data')[0].reset();
            }
            load();

            function load(){
                $.ajax({
                    type: "POST",
                    url: "{{url('get_all_about')}}",

                    cache: false,
                    success: function(data){
                        reset();
                        var data_return=JSON.parse(data);
                        //console.log(data_return);
                        $('#id_edit').val(data_return['id']);
                        $('#update_about_us').summernote('code',data_return['about_us']);
                        $('#update_vision').summernote('code',data_return['vision']);
                        $('#update_mission').summernote('code',data_return['mission']);
                        $('#update_value').summernote('code',data_return['value']);
                        $('#update_our_feature').summernote('code',data_return['our_feature']);
                        $('#update_why_choose_us_text').summernote('code',data_return['why_choose_us_text']);
                        $('#update_our_accreditation').summernote('code',data_return['our_accreditation']);
                    }
                });
            }

            $('#update_data').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
                ({
                    type: 'post',
                    url: "{{url('update/about_data')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //console.log(data);
                        toastr.success('Update data successful');
                        load();
                    }
                });
                return false;
            });
        });

        // start summernote

        $("#update_about_us").summernote({
            height : "150px",
            placeholder: 'About Us',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_vision").summernote({
            height : "150px",
            placeholder: 'Vision',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_mission").summernote({
            height : "150px",
            placeholder: 'Mission',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_value").summernote({
            height : "150px",
            placeholder: 'Value',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_our_feature").summernote({
            height : "150px",
            placeholder: 'Our Feature',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_why_choose_us_text").summernote({
            height : "150px",
            placeholder: 'Why Choose Us',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        $("#update_our_accreditation").summernote({
            height : "150px",
            placeholder: 'Our Accreditation',
            toolbar: [
                ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });
    </script>
@endsection