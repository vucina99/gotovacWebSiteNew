@extends("content")

@section("seo")

    <title>Mesečna renta | Advokat Gotovac</title>
    <meta name="twitter:title" content="Mesečna renta | Advokat Gotovac">
    <meta property="og:title" content="Mesečna renta | Advokat Gotovac"/>

    <meta property="og:keywords"
          content="mesečna renta,izgubljena zarada, kapitalizacija rente, aktuar, medicinsko veštačenje, umanjenje radne sposobnosti, naknada štete, saobraćajna nezgoda, advokat Beograd"/>
    <meta name="keywords"
          content="mesečna renta,izgubljena zarada, kapitalizacija rente, aktuar, medicinsko veštačenje, umanjenje radne sposobnosti, naknada štete, saobraćajna nezgoda, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/mesecna-renta"/>

    <meta property="og:description"
          content="Kako naplatiti izgubljenu zaradu i mesečnu rentu posle nezgode: veštačenja (aktuar, medicina rada), kapitalizacija rente i maksimalna odšteta. Besplatne konsultacije."/>
    <meta name="twitter:description"
          content="Izgubljena zarada i mesečna renta: kada pripadaju, kako se obračunavaju, kapitalizacija rente i potrebna veštačenja. Besplatne konsultacije – Advokat Gotovac.">
    <meta name="description"
          content="Izgubljena zarada i mesečna renta nakon saobraćajne nezgode: obračun, aktuar i medicina rada, kapitalizacija rente i maksimalna odšteta. Besplatne konsultacije.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.renta") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/mesecna-renta" class="h5 text-white" title="Mesečna renta">{{ __("index.renta") }}</a>
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
                                <h2 class="pt-2">{{ __("index.renta") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/renta.jpg")}}"  alt="Slika mesečne rente"
                                     title="Čovek koji plaća rentu" class="img-fluid">
                            </div>

                            {!! __("pages.renta strana")  !!}
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
