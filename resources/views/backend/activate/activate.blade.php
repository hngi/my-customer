@extends('layout.authbase')
@section("custom_css")
    <link href="/backend/assets/build/css/intlTelInput.css" rel="stylesheet" type="text/css"/>

@stop



@section('content')

    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4 bg-white">
                <div class=" m-h-100">
                    <div class="account-pages pt-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-12 p-5">
                                            <div class="mx-auto mb-5">
                                                <a href="{{-- route('home') --}}">
                                                    <img src="{{ ('/frontend/assets/images/fulllogo.png') }}" alt=""
                                                         height="auto"/> </a>
                                            </div>

                                            <h6 class="h5 mb-0 mt-4">Verify Code</h6>
                                            <p class="text-muted mt-1 mb-5">
                                                Please enter the 6-digit code we sent on your number as SMS
                                            </p>

                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach

                                                </div>
                                            @endif

                                            <form action="{{url('/auth/verify')}}" method="post"
                                                  class="authentication-form">
                                                @csrf
                                                <div class="form-group mt-4">
                                                    <label class="form-control-label">Enter 6 digit code</label>
                                                    <a href="{{url('/auth/verify-email')}}"
                                                       class="float-right text-muted text-unline-dashed ml-1"
                                                       id="resend_code">resubmit
                                                        code</a>
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="token" id="code"
                                                               placeholder="X X X X X X">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit"
                                                            id="verify">
                                                        Verify
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted">Back to <a href="{{-- route('logout') --}}"
                                                                     class="text-primary font-weight-bold ml-1">Login</a>
                                    </p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end col -->
                        <!-- end row -->
                        <!-- end container -->
                    </div>
                    <!-- end page -->


                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover"
                 style="background-image: url(/backend/assets/images/login.svg);">

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
