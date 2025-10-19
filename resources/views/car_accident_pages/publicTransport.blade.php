@extends("content")

@section("seo")

    <title>Štete u javnom prevozu | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Štete u javnom prevozu | Advokat Gotovac Beograd">
    <meta property="og:title" content="Štete u javnom prevozu | Advokat Gotovac Beograd"/>

    <meta name="keywords" content="štete u javnom prevozu, povreda putnika, advokat Beograd, naknada štete autobus, GSP nezgoda, osiguranje putnika, taxi povrede, rent a car nesreće">
    <meta property="og:keywords" content="štete u javnom prevozu, povreda putnika, advokat Beograd, naknada štete autobus, GSP nezgoda, osiguranje putnika, taxi povrede, rent a car nesreće"/>

    <link rel="canonical" href="https://advokatigotovac.com/stete-javni-prevoz"/>

    <meta name="description" content="Štete u javnom prevozu: saznajte svoja prava, korake nakon povrede i kako ostvariti naknadu štete po dve polise osiguranja. Besplatne konsultacije – Advokat Gotovac.">
    <meta property="og:description" content="Štete u javnom prevozu: povrede putnika, prava na naknadu i postupak za ostvarivanje odštete po dve polise osiguranja. Besplatne konsultacije – Advokat Gotovac.">
    <meta name="twitter:description" content="Povreda u javnom prevozu? Otkrijte kako doći do pravične naknade štete po dve polise osiguranja. Besplatne konsultacije – Advokat Gotovac.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.stete u javnom prevozu") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/stete-javni-prevoz" class="h5 text-white" title="Štete u javnom prevozu">{{ __("index.stete u javnom prevozu") }}</a>
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
                                <h2 class="pt-2">{{ __("index.stete u javnom prevozu") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/bus.png")}}"   alt="Muškarac u autobusu drži povređenu nogu nakon saobraćajne nezgode"
                                     title="Štete u javnom prevozu – naknada štete putnicima povređenim u saobraćajnoj nezgodi" class="img-fluid">
                            </div>
                            {!! __("pages.stete u javnom prevozu strana")  !!}
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
