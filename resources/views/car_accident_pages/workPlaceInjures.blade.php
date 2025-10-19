@extends("content")

@section("seo")

    <title>Povreda na radu | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Povreda na radu | Advokat Gotovac Beograd">
    <meta property="og:title" content="Povreda na radu | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="povreda na radu, naknada štete, odgovornost poslodavca, izgubljena zarada, mesečna renta, kapitalizacija rente, veštačenje, bezbednost na radu, MUP povrede, advokat Beograd"/>
    <meta name="keywords"
          content="povreda na radu, naknada štete, odgovornost poslodavca, izgubljena zarada, mesečna renta, kapitalizacija rente, veštačenje, bezbednost na radu, MUP povrede, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/povrede-na-radu"/>

    <meta property="og:description"
          content="Povreda na radu: ostvarite naknadu štete – izgubljena zarada, mesečna renta i telesne povrede. Objektivna odgovornost poslodavca. Besplatne konsultacije."/>
    <meta name="twitter:description"
          content="Povreda na radu: prava zaposlenih i naplata štete (izgubljena zarada, mesečna renta). Poslodavac odgovara objektivno. Besplatne konsultacije – Advokat Gotovac.">
    <meta name="description"
          content="Povreda na radu: ostvarite naknadu štete – izgubljena zarada, mesečna renta i telesne povrede. Objektivna odgovornost poslodavca. Besplatne konsultacije.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.povrede na radu") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/povrede-na-radu" class="h5 text-white" title="Povrede na radu">{{ __("index.povrede na radu") }}</a>
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
                                <h2 class="pt-2">{{ __("index.povrede na radu") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/povreda.png")}}"  alt="Kolega pomaze kolegi nakon povrede na radu"
                                     title="Situacija povrede na radu" class="img-fluid">
                            </div>

                            {!! __("pages.povrede na radu strana")  !!}
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
