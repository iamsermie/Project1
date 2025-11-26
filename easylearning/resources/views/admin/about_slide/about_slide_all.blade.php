@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">About Slide Edit</h4>

                                        <form method="post" action="{{ route('about.update') }}" enctype="multipart/form-data">
                                            @csrf

                                        <input type="hidden" name="id" value="{{ $aboutslide->id }}">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="title" id="title" type="text" placeholder="" value="{{ $aboutslide->title }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="short_title" id="short_title" type="text" placeholder="" value="{{ $aboutslide->short_title }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                            <div class="col-sm-10">
                                                <textarea required="" name="short_description" class="form-control" row='5'>
                                                    {{ $aboutslide->short_description }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                            <div class="col-sm-10">
                                                 <textarea id="elm1" name="long_description"> {{ $aboutslide->long_description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="about_image" id="image" type="file" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">

                                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty ($aboutslide->about_image))? url($aboutslide->about_image):url('upload/no_image.jpg') }}">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About Page">
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
