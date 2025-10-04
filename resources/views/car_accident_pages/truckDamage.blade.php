@extends("content")

@section("seo")

    <title>Štete na kamionima | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Štete na kamionima | Advokat Gotovac Beograd">
    <meta property="og:title" content="Štete na kamionima | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="štete na kamionima, udes kamiona, naknada štete kamion, procena štete, totalna šteta kamion, kasko osiguranje, izgubljena dobit, sudski veštak, advokat Beograd"/>
    <meta name="keywords" content="štete na kamionima, udes kamiona, naknada štete kamion, procena štete, totalna šteta kamion, kasko osiguranje, izgubljena dobit, sudski veštak, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/stete-na-kamionima"/>

    <meta property="og:description"
          content="Štete na kamionima: pravična naknada – totalna/kasko šteta, izgubljena dobit (lucrum cessans), procena sudskih veštaka i zastupanje protiv osiguranja. Besplatne konsultacije."/>
    <meta name="twitter:description"
          content="Povreda ili šteta na kamionu? Procena, naplata, izgubljena dobit i zastupanje protiv osiguravača. Advokat Gotovac Beograd – besplatne konsultacije.">
    <meta name="description"
          content="Štete na kamionima: kako do maksimalne naknade – totalna i kasko šteta, izgubljena dobit, veštačenje (AUDATEX) i pravna zaštita. Besplatne konsultacije.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.na kamionima") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/stete-na-kamionima" class="h5 text-white" title="Štete na kamionima">{{ __("index.na kamionima") }}</a>
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
                            <div class="section-title saobracajke position-relative pb-3" style="max-width: 600px;">
                                <h2 class="pt-2">{{ __("index.na kamionima") }}</h2>
                            </div>
                            {!! __("pages.stete na kamionima strana")  !!}
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
