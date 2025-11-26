@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Home Slide Edit</h4>

                                        <form method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                                            @csrf

                                        <input type="hidden" name="id" value="{{ $homeslide->id }}">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="title" id="title" type="text" placeholder="" value="{{ $homeslide->title }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="short_title" id="short_title" type="text" placeholder="" value="{{ $homeslide->short_title }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="video_url" id="video_url" type="text" placeholder="" value="{{ $homeslide->video_url }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="home_slide" id="image" type="file" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">

                                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty ($homeslide->home_slide))? url($homeslide->home_slide):url('upload/no_image.jpg') }}">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Home Page Slide">
                                            </form>
                                        <!-- end row -->
                                    </div>

                                </div>
                            </div> <!-- end col -->
                        </div>
                    <!-- end row -->



                    </div>
                    </div>

<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
