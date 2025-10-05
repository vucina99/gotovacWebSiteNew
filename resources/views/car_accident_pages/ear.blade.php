@extends("content")

@section("seo")

    <title>Evropski izveštaj | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Evropski izveštaj | Advokat Gotovac Beograd">
    <meta property="og:title" content="Evropski izveštaj | Advokat Gotovac Beograd"/>


    <meta property="og:keywords"
          content="evropski izveštaj, evropski izvestaj obrazac, saobraćajna nezgoda, kako popuniti evropski izveštaj, evropski izveštaj uputstvo prijava osiguranju, advokat za saobraćaj, sudar evropski izveštaj"/>
    <meta name="keywords" content="evropski izveštaj, evropski izvestaj obrazac, saobraćajna nezgoda, kako popuniti evropski izveštaj, evropski izveštaj uputstvo prijava osiguranju, advokat za saobraćaj, sudar evropski izveštaj">

    <link rel="canonical" href="https://advokatigotovac.com/evropski-izvestaj"/>

    <meta property="og:description"
          content="Praktičan vodič kroz Evropski izveštaj: kada se koristi, kako ga ispravno popuniti, koje dokaze prikupiti i kako ostvariti naknadu štete. Saveti advokata iz Beograda."/>
    <meta name="twitter:description"
          content="Praktičan vodič kroz Evropski izveštaj: kada se koristi, kako ga ispravno popuniti, koje dokaze prikupiti i kako ostvariti naknadu štete. Saveti advokata iz Beograda.">
    <meta name="description"
          content="Praktičan vodič kroz Evropski izveštaj: kada se koristi, kako ga ispravno popuniti, koje dokaze prikupiti i kako ostvariti naknadu štete. Saveti advokata iz Beograda.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.evropski izvestaji") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/evropski-izvestaj" class="h5 text-white" title="Evropski izveštaj">{{ __("index.evropski izvestaji") }}</a>
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
                                        <h2 class="pt-2">{{ __("index.evropski izvestaji") }}</h2>
                                    </div>
                                    <div class="w-100">
                                        <img src="{{asset("img/pages/eu_izvestaj.webp")}}"  alt="Popunjavanje evropskog izveštaja o saobraćajnoj nezgodi"
                                             title="Evropski izveštaj – pomoć pri popunjavanju i prijavi saobraćajne nezgode" class="img-fluid">
                                    </div>
                                    <p>
                                        {!! __("pages.evropski izvestaj strana")  !!}
                                    </p>

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
