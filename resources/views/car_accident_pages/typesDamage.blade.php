@extends("content")

@section("seo")

    <title>Vrste štete u saobraćajnim nezgodama | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Vrste štete u saobraćajnim nezgodama | Advokat Gotovac Beograd">
    <meta property="og:title" content="Vrste štete u saobraćajnim nezgodama | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="materijalna šteta na vozilu, izgubljene plate, gubitak buduće zarade, bol i patnja, medicinski računi, gubitak uživanja u životu, naknada štete, advokat Beograd"/>
    <meta name="keywords"
          content="materijalna šteta na vozilu, izgubljene plate, gubitak buduće zarade, bol i patnja, medicinski računi, gubitak uživanja u životu, naknada štete, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/vrste-saobracajnih-steta"/>

    <meta property="og:description"
          content="Koje sve štete možete naplatiti posle udesa: popravka ili total, izgubljene plate i buduća zarada, bol i patnja, medicinski i banjski troškovi, umanjenje OŽA."/>
    <meta name="twitter:description"
          content="Vrste štete posle saobraćajne nezgode: materijalna šteta na vozilu, izgubljene plate, gubitak buduće zarade, bol i patnja, medicinski troškovi i gubitak uživanja u životu.">
    <meta name="description"
          content="Vrste štete u saobraćajnim nezgodama: popravka/total šteta vozila, izgubljene plate i buduća zarada, bol i patnja, medicinski troškovi i umanjenje opšte životne aktivnosti.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.vrste štete") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/vrste-saobracajnih-steta" class="h5 text-white" title="Vrste štete za žrtve saobraćajne nezgode">{{ __("index.vrste štete") }}</a>
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
                                <h2 class="pt-2">{{ __("index.vrste štete") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/vrste_stete.png")}}"  alt="Slika čoveka koji je na štakama"
                                     title="Oosoba koja je izgubila mogučnost uživanja u životu " class="img-fluid">
                            </div>

                            {!! __("pages.vrste štete strana")  !!}

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
