@extends("content")

@section("seo")

    <title>Smrtni slučajevi | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Smrtni slučajevi | Advokat Gotovac Beograd">
    <meta property="og:title" content="Smrtni slučajevi | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="smrtni slučajevi, naknada štete zbog smrti, duševni bolovi, troškovi sahrane, izgubljeno izdržavanje, advokat Beograd, osiguranje štete"/>
    <meta name="keywords" content="smrtni slučajevi, naknada štete zbog smrti, duševni bolovi, troškovi sahrane, izgubljeno izdržavanje, advokat Beograd, osiguranje štete">

    <link rel="canonical" href="https://advokatigotovac.com/smrtni-slucajevi"/>

    <meta property="og:description"
          content="Prava porodice nakon smrtnog slučaja u saobraćaju: naknada za duševne bolove, troškovi sahrane i izgubljeno izdržavanje. Besplatne konsultacije – Advokat Gotovac."/>
    <meta name="twitter:description"
          content="Smrtni slučajevi u saobraćaju: kako ostvariti pravičnu naknadu za duševne bolove, troškove sahrane i izgubljeno izdržavanje. Besplatne konsultacije – Advokat Gotovac.">
    <meta name="description"
          content="Smrtni slučajevi u saobraćaju: vodič kroz naknadu štete za porodicu – duševni bolovi, sahrana i izgubljeno izdržavanje. Besplatne konsultacije – Advokat Gotovac.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.smrtni slucajevi") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/smrtni-slucajevi" class="h5 text-white" title="Smrtni slučajevi">{{ __("index.smrtni slucajevi") }}</a>
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
                                <h2 class="pt-2">{{ __("index.smrtni slucajevi") }}</h2>
                            </div>
                                {!! __("pages.smrtni slucajevi strana")  !!}
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
