@extends("content")

@section("seo")

    <title>Povrede i štete na motociklima | Advokat Gotovac Beograd</title> <meta name="twitter:title" content="Povrede i štete na motociklima | Advokat Gotovac Beograd"> <meta property="og:title" content="Povrede i štete na motociklima | Advokat Gotovac Beograd"/>

    <meta property="og:keywords" content="povrede motociklista, štete na motociklima, nezgoda motocikl, advokat za motocikle, naknada štete, procena štete, sudski veštak, osiguranje, Beograd, Republika Srbija, Republika Srpska"/>
    <meta name="keywords" content="povrede motociklista, štete na motociklima, nezgoda motocikl, advokat za motocikle, naknada štete, procena štete, sudski veštak, osiguranje, Beograd, Republika Srbija, Republika Srpska">

    <link rel="canonical" href="https://advokatigotovac.com/stete-na-motociklima"/>

    <meta property="og:description" content="Nezgoda na motociklu? Ostvarite maksimalnu naknadu: materijalna i nematerijalna šteta, procena veštaka i zastupanje protiv osiguranja. Besplatne konsultacije."/>
    <meta name="twitter:description" content="Nezgoda na motociklu? Maksimalna naknada štete uz tim veštaka i advokata. Materijalna/ nematerijalna šteta, pomoć u sporu sa osiguranjem. Besplatne konsultacije.">
    <meta name="description" content="Povrede i štete na motociklima: prava posle nezgode, procena štete, životna renta i zastupanje protiv osiguranja. Advokat Gotovac Beograd – besplatne konsultacije.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.motocikli") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/stete-na-motociklima" class="h5 text-white" title="Štete na motociklima">{{ __("index.motocikli") }}</a>
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
                            <div class="section-title saobracajke position-relative pb-3  " style="max-width: 600px;">
                                <h2 class="pt-2">{{ __("index.motocikli") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/motor.png")}}"  alt="Oštečeni motor na autoputu"
                                     title="Oštečeni motor na autoputu" class="img-fluid">
                            </div>

                            {!! __("pages.motocikli strana")  !!}
                            <p class="fst-italic text-primary"> <i class="bi text-primary bi-info-circle"></i> {{ __("index.copy") }}</p>

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
