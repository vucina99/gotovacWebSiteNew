@extends("content")

@section("seo")

    <title>Kašnjenje leta na aerodromu | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Kašnjenje leta na aerodromu | Advokat Gotovac Beograd">
    <meta property="og:title" content="Kašnjenje leta na aerodromu | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="kašnjenje leta, EU 261/2004, prava putnika, naknada štete, uskraćeno ukrcavanje, otkazivanje leta, povraćaj karte, Air Serbia, advokat Beograd"/>
    <meta name="keywords" content="kašnjenje leta, EU 261/2004, prava putnika, naknada štete, uskraćeno ukrcavanje, otkazivanje leta, povraćaj karte, Air Serbia, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/kasnjenje-leta-na-aerodromu"/>

    <meta property="og:description"
          content="Kašnjenje leta: vaša prava po EU 261/2004 — kompenzacija 250/400/600 €, pomoć oko povraćaja karte, smeštaja i obroka. Besplatne konsultacije – Advokat Gotovac."/>
    <meta name="twitter:description"
          content="Kašnjenje leta: saznajte svoja prava po EU 261/2004 i ostvarite 250/400/600 € kompenzacije. Pomoć sa povraćajem karte, smeštajem i obrocima. Besplatne konsultacije.">
    <meta name="description"
          content="Kašnjenje leta: vaša prava po EU 261/2004 — kompenzacija 250/400/600 €, pomoć oko povraćaja karte, smeštaja i obroka. Besplatne konsultacije – Advokat Gotovac.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.kasnjenje leta") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kasnjenje-leta-na-aerodromu" class="h5 text-white" title="Kasnjenje leta na aerodromu">{{ __("index.kasnjenje leta") }}</a>
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
                                <h2 class="pt-2">{{ __("index.kasnjenje leta") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/airport.jpg")}}"  alt="Slika kašnjenja aviona na aerodromu"
                                     title="Devojka koja gleda u red letova" class="img-fluid">
                            </div>

                                {!! __("pages.kasnjenje leta strana")  !!}

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
