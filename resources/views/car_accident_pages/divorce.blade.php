@extends("content")

@section("seo")

    <title>Razvod braka | Sporazumni i parnični razvod | Advokat Gotovac Beograd</title>
    <meta name="twitter:title" content="Razvod braka | Advokat Gotovac Beograd">
    <meta property="og:title" content="Razvod braka | Advokat Gotovac Beograd"/>

    <meta property="og:keywords"
          content="razvod braka, sporazumni razvod, tužba za razvod, advokat za razvod, starateljstvo nad detetom, alimentacija, podela imovine, porodično pravo, advokat Beograd"/>
    <meta name="keywords"
          content="razvod braka, sporazumni razvod, tužba za razvod, advokat za razvod, starateljstvo nad detetom, alimentacija, podela imovine, porodično pravo, advokat Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/razvod-braka"/>

    <meta property="og:description"
          content="Razvod braka uz stručnu pravnu pomoć — sporazumni ili po tužbi. Savetovanje o starateljstvu, alimentaciji i podeli imovine. Brzo, diskretno i efikasno. Advokat Gotovac."/>
    <meta name="twitter:description"
          content="Razvod braka: sporazumni ili sudski postupak. Pravna pomoć za starateljstvo, alimentaciju i podelu imovine. Brzo i efikasno uz Advokata Gotovca.">
    <meta name="description"
          content="Razvod braka uz stručnu pravnu pomoć — sporazumni ili po tužbi. Savetovanje o starateljstvu, alimentaciji i podeli imovine. Brzo, diskretno i efikasno. Advokat Gotovac.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.razvod braka") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/advokat-za-razvod-braka" class="h5 text-white" title="Advokat za razvod braka">{{ __("index.razvod braka") }}</a>
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
                                <h2 class="pt-2">{{ __("index.razvod braka") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/razvod.jpg")}}"  alt="Svadja partnera u braku"
                                     title="Svadja partnera u braku" class="img-fluid w-100">
                            </div>

                            {!! __("pages.razvod")  !!}

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
