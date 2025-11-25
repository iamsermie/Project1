@extends('admin.admin_master')
@section('admin')

<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Change Password Page</h4>

                                        @if (count($errors))
                                             @foreach ($errors->all() as $error)
                                             <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                                             @endforeach

                                        @endif

                                        <form method="post" action="{{ route('update.password') }}"><br><br>
                                            @csrf
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="old_password" id="old_password" type="password" placeholder="Enter Old Password" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="new_password" id="new_password" type="password" placeholder="Enter New Password" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm new Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="Confirm New Password" >
                                            </div>
                                        </div>






                                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
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
