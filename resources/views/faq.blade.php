@extends('layout.frontbase')
@section("custom_css")
<link href="/frontend/assets/css/faq.css" rel="stylesheet" type="text/css" />
@stop



@section('content')

<!-- top section -->
<section id="main" class="faq-top">
    <div class="container">
        <div class="faq-top__content text-center">
            <h1 class="faq-top__title">Frequently Asked Questions</h1>
            <input type="search" name="search-faq" id="search-faq" class="form-control"
                placeholder="Search for a question" aria-placeholder="Search for a question">
            <button class="faq-top__btn">Search</button>
        </div>
    </div>
    <!-- background vectors -->
    <div class="faq-bg__left">
        <img src="/frontend/assets/img/faq-bg/orange-cutout.png" alt="orange-cutout"
            class="faq-bg__orange-cutout img-fluid">
        <img src="/frontend/assets/img/faq-bg/yellow-cutout.png" alt="yellow-cutout"
            class="faq-bg__yellow-cutout img-fluid">
    </div>
    <div class="faq-bg__right">
        <img src="/frontend/assets/img/faq-bg/blue-cutout.png" alt="blue-cutout"
            class="faq-bg__blue-cutout img-fluid">
        <img src="/frontend/assets/img/faq-bg/orange-triangle-cutout.png" alt="orange-triangle-cutout"
            class="faq-bg__orange-triangle-cutout img-fluid">
    </div>
</section>
<!-- questions in accordion -->
<section class="faq">
    <div class="container faq__accordion">
        <div class="accordion" id="faq__accordion">
            <!-- Question one -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <button class="faq__btn collapsed" type="button" data-toggle="collapse" aria-expanded="true"
                        data-target="#questionOne" aria-expanded="false" aria-controls="questionOne">
                        <h2 class="faq__title mb-0">What is myCustomer?</h2>
                        <i class="fas fa-angle-up"></i>
                    </button>
                </div>
                <!-- Question one body -->
                <div id="questionOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq__accordion">
                    <div class="card-body">
                        <p class="faq__content">myCustomer is solution that helps business owners send overdue invoice
                            reminders,
                            manage debt collection and provides a unique way of pushing unique sales messaging directly
                            to their
                            customers.</p>
                    </div>
                </div>
            </div>

            <!-- Question two -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionTwo"
                        aria-expanded="false" aria-controls="questionTwo">
                        <h2 class="faq__title mb-0">Why should I use myCustomer?</h2>
                        <i class="fas fa-angle-up"></i>
                    </button>
                </div>
                <!-- Question two body -->
                <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq__accordion">
                    <div class="card-body">
                        <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore
                            sustainable VHS.</p>
                    </div>
                </div>
            </div>
            <!-- Question three -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionThree"
                        aria-expanded="false" aria-controls="questionThree">
                        <h2 class="faq__title mb-0">How can I download the app?</h2>
                        <i class="fas fa-angle-up"></i>
                    </button>
                </div>
                <!-- Question three body-->
                <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq__accordion">
                    <div class="card-body">
                        <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore
                            sustainable VHS.</p>
                    </div>
                </div>
            </div>
            <!-- Question four -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionFour"
                        aria-expanded="false" aria-controls="questionFour">
                        <h2 class="faq__title mb-0">Will I need data to make use of the app?</h2>
                        <i class="fas fa-angle-up"></i>
                    </button>
                </div>
                <!-- Question four body -->
                <div id="questionFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq__accordion">
                    <div class="card-body">
                        <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                            truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                            accusamus labore
                            sustainable VHS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section("javascript")


@stop
