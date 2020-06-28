@extends('layout.base')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('backend/assets/css/store_list.css')}}">
@stop
    @section('content')
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <a href="/admin/stores" class="btn btn-primary">Go Back</a>
                        </nav>
                        <h4 class="mt-2">Create A Store</h4>
                    </div>
                </div>

                <div class="row">
                     <div class="col-lg-10">
                         <div class="card">
                            <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="store name">Store Name</label>
                                            <input type="text" class="form-control"  placeholder="XYZ Stores">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputTagline">Tagline</label>
                                            <input type="text" class="form-control" id="inputTagline" placeholder="Your Perfect Stay One Click away....">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="+1(234) 567-8907">
                                          </div>
                                        <div class="form-group col-md-6" >
                                            <label for="inputEmailAddress"> Email Address (optional) </label>
                                            <input type="email" class="form-control" placeholder="you@example.com">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Address</label>
                                          <input type="text" class="form-control"  placeholder="123 Abby Avenue">
                                        </div>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                           <a href="/admin/stores" class="text-white">Create Store</a> 
                                        </button>
                                      </form>
                                </div>
                             </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

@endsection

@section("javascript")
   <script src="/backend/assets/build/js/intlTelInput.js"></script>
   <script>
   var input = document.querySelector("#phone");
   window.intlTelInput(input, {
       // any initialisation options go here
   });
   </script>    
@stop