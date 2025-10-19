@extends("content")

@section("seo")

    <title>Advokat za saobraćajke | Advokatska kancelarija Gotovac</title>
    <meta name="twitter:title" content="Advokat za saobraćajke | Advokatska kancelarija Gotovac">
    <meta property="og:title" content="Advokat za saobraćajke | Advokatska kancelarija Gotovac"/>

    <meta property="og:keywords"
          content="advokat za saobraćajke, saobraćajne nezgode, naknada štete, advokat Beograd, udes, telesne povrede, odšteta, sudski veštak, bez avansa"/>
    <meta name="keywords"
          content="advokat za saobraćajke, saobraćajne nezgode, naknada štete, advokat Beograd, udes, telesne povrede, odšteta, sudski veštak, bez avansa">

    <link rel="canonical" href="https://advokatigotovac.com/advokat-za-saobracajke"/>

    <meta property="og:description"
          content="Advokat za saobraćajke u Beogradu: od 1996, ~96% uspeha (procena), bez avansa – naplata po uspehu. Maksimalna odšteta za vozila, povrede i izgubljenu zaradu."/>
    <meta name="twitter:description"
          content="Saobraćajna nezgoda? Gotovac – advokat za saobraćajke: 1996+, ~96% uspeha (procena), bez avansa. Maksimalna odšteta za vozila i telesne povrede.">
    <meta name="description"
          content="Advokat za saobraćajke u Beogradu: 1996+, ~96% uspeha (procena), bez avansa – naplata po uspehu. Maksimalna odšteta: vozila, povrede, izgubljena zarada.">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{ __("index.advokat za saobracajke") }}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/advokat-za-saobracajke" class="h5 text-white" title="advokat za saobracajke Vladan Gotovac">{{ __("index.advokat za saobracajke") }}</a>
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
                                <h2 class="pt-2">{{ __("index.advokat za saobracajke") }}</h2>
                            </div>
                            <div class="w-100">
                                <img src="{{asset("img/pages/stete.jpg")}}" alt="Dva oštećena automobila nakon sudara, dok žena pored vozila poziva pomoć telefonom."
                                     title="Štete na vozilima – naknada materijalne štete nakon saobraćajne nezgode." class="img-fluid">
                            </div>

                            {!! __("pages.advokat za saobracajke strana")  !!}

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
