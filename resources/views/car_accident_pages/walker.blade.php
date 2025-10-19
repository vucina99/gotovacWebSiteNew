@extends("content")

@section("seo")

    <title>Nezgode sa pešacima | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Nezgode sa pešacima | Advokat Gotovac Beograd">
    <meta property="og:title" content="Nezgode sa pešacima | Advokat Gotovac Beograd"/>


    <meta name="keywords" content="nezgode sa pešacima, advokat za pešake Beograd, saobraćajne nesreće, povrede pešaka, naknada štete u saobraćaju, pravna pomoć Beograd">
    <meta property="og:keywords" content="nezgode sa pešacima, advokat za pešake Beograd, saobraćajne nesreće, povrede pešaka, naknada štete u saobraćaju, pravna pomoć Beograd"/>

    <link rel="canonical" href="https://advokatigotovac.com/nezgode-sa-pesacima"/>

    <meta name="description" content="Nezgode sa pešacima: ključni koraci posle nesreće, prikupljanje dokaza i ostvarivanje naknade štete uz pomoć advokata u Beogradu">
    <meta property="og:description" content="Nezgode sa pešacima: ključni koraci posle nesreće, prikupljanje dokaza i ostvarivanje naknade štete uz pomoć advokata u Beogradu">
    <meta name="twitter:description" content="Nezgode sa pešacima: ključni koraci posle nesreće, prikupljanje dokaza i ostvarivanje naknade štete uz pomoć advokata u Beogradu">


    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.nezgode sa pesacima") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/nezgode-sa-pesacima" class="h5 text-white" title="Nezgode sa pešacima">{{ __("index.nezgode sa pesacima") }}</a>
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
                                <h2 class="pt-2">{{ __("index.nezgode sa pesacima") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/pesak.jpg")}}" alt="Povređeni pešak sedi na trotoaru nakon saobraćajne nezgode"
                                     title="Nezgode sa pešacima – naknada štete i pravna pomoć povređenim pešacima" class="img-fluid">
                            </div>
                                {!! __("pages.nezgode sa pesacima strana")  !!}
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
