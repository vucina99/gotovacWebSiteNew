@extends("content")

@section("seo")

    <title>Štete na vozilima | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Štete na vozilima | Advokat Gotovac Beograd">
    <meta property="og:title" content="Štete na vozilima | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="štete na vozilima, procena štete, totalna šteta, kasko štete, rupe na kolovozu, štete na autoputu, štete od divljači, pad drveta, advokat Beograd, naknada štete"/>
    <meta name="keywords" content="štete na vozilima, procena štete, totalna šteta, kasko štete, rupe na kolovozu, štete na autoputu, štete od divljači, pad drveta, advokat Beograd, naknada štete">

    <link rel="canonical" href="https://advokatigotovac.com/stete-na-vozilima"/>

    <meta property="og:description"
          content="Štete na vozilima: kako do pravične naknade – totalna šteta, kasko, rupe na kolovozu, autoput, divljač i pad drveta. Besplatne konsultacije – Advokat Gotovac."/>
    <meta name="twitter:description"
          content="Štete na vozilima: procena i naplata štete (totalna, kasko, rupe, autoput, divljač, pad drveta). Besplatne konsultacije – Advokat Gotovac Beograd.">
    <meta name="description"
          content="Štete na vozilima: ostvarite naknadu štete uz stručnu procenu i zastupanje – totalna šteta, kasko, rupe na kolovozu, autoput, divljač i pad drveta. Besplatne konsultacije.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.stete na vozilima") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/stete-na-vozilima" class="h5 text-white" title="Štete na vozilima">{{ __("index.stete na vozilima") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 pt-0 wow contact-container fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0 pt-0">

            <br>

            <div class="container ">
                <div class="row g-5">
                    <!-- Blog list Start -->
                    <div class="col-lg-8 ">
                        <div class="row g-5">
                            <div class="section-title saobracajke position-relative pb-3 " style="max-width: 600px;">
                                <h2 class="pt-2">{{ __("index.stete na vozilima") }}</h2>
                            </div>
                            {!! __("pages.stete na vozilima strana")  !!}
                        </div>
                    </div>
                    <!-- Blog list End -->

                    <!-- Sidebar Start -->
                    <div class="col-lg-4">

                        <!-- Category Start -->
                        @include("car_accident_pages.navigation")

                    </div>

                    <br>

                </div>
            </div>


        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include("sections.insurances")
    <!-- Vendor End -->

@endsection
