@extends("content")

@section("seo")

    <title>Kalkulator trudničke naknade | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Kalkulator trudničke naknade | Advokat Gotovac Beograd">
    <meta property="og:title" content="Kalkulator trudničke naknade | Advokat Gotovac Beograd"/>


    <meta property="og:keywords"
          content="kalkulator trudničke naknade, advokat za trudničko bolovanje Beograd, naknada zarade u trudnoći, trudnička naknada obračun, advokatska kancelarija Gotovac i saradnici"/>
    <meta name="keywords" content="kalkulator trudničke naknade, advokat za trudničko bolovanje Beograd, naknada zarade u trudnoći, trudnička naknada obračun, advokatska kancelarija Gotovac">

    <link rel="canonical" href="https://advokatigotovac.com/kalkulator-trudnicke-naknade"/>

    <meta property="og:description"
          content="Kalkulator trudničke naknade – advokatska kancelarija Gotovac i saradnici iz Beograda. Brzo i jednostavno izračunajte vašu trudničku naknadu"/>
    <meta name="twitter:description"
          content="Kalkulator trudničke naknade – advokatska kancelarija Gotovac i saradnici iz Beograda. Brzo i jednostavno izračunajte vašu trudničku naknadu">
    <meta name="description"
          content="Kalkulator trudničke naknade – advokatska kancelarija Gotovac i saradnici iz Beograda. Brzo i jednostavno izračunajte vašu trudničku naknadu">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.za trudnice")}}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white" title="Kalkulator za trudničku naknadu">{{__("index.za trudnice")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 pt-0 wow contact-container fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 pt-0">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{__("index.za trudnice")}}</h5>
                <h2 class="mb-0"> {{__("index.za trudnice podnaslov")}}</h2>
            </div>
            <br>
            <div class="row g-5 mb-5 mt-3">

                <maternity-calculator :translate="@js(__('index'))"></maternity-calculator>

            </div>

        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include("sections.insurances")
    <!-- Vendor End -->

@endsection
