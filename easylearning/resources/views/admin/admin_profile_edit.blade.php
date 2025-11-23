@extends('admin.admin_master')
@section('admin')

<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Edit Profile Page</h4>

                                        <form>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="name" id="name" type="text" placeholder="" value="{{ $editData->name }}" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="" value="{{ $editData->email }}" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="username" id="username" type="text" placeholder="" value="{{ $editData->username }}" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="profile_image" id="profile_image" type="file" placeholder=""  id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">

                                                <img class="rounded avatar-lg" src="{{ asset ('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                                            </form>
                                        <!-- end row -->
                                    </div>

                                </div>
                            </div> <!-- end col -->
                        </div>
                    <!-- end row -->



                    </div>
                    </div>



@endsection
