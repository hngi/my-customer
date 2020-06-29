@extends('layout.base')

@section("custom_css")
    <link href="/frontend/assets/css/add-assistant.css" rel="stylesheet" type="text/css"/>
    
@stop

    @section('content')

    <!-- Start Content-->
    <div class="container-fluid h-100">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                </nav>
                <h4 class="mb-1 mt-0">Enter new contact</h4>
            </div>
        </div>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="mb-3 header-title mt-0">Complaint Form</h4> --}}

                        <form class="mt-4 mb-3 form-horizontal">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-3 col-form-label">Name</label> <br> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter name here">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="role" class="col-3 col-form-label">Role</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter role">
                                </div>
                            </div>
                            <br>  
                            <div class="form-group row mb-3">
                                <label for="address" class="col-3 col-form-label">Address</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter Address">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="number" class="col-3 col-form-label">Phone Number</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter phone number">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-3 col-form-label">Email</label> <br>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter email">
                                </div>
                            </div>
                            <br>
                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>  <!-- end card-body -->
                </div>
            </div>
            <!-- end col -->
    </div> <!-- container-fluid -->

    @endsection
