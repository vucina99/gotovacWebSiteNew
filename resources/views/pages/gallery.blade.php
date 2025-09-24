@extends("content")

@section("seo")

    <title>Galerija | Advokatska kancelarija Gotovac</title>
    <meta name="twitter:title" content=">Galerija slika | Advokatska kancelarija Gotovac">
    <meta property="og:title" content=">Galerija slika | Advokatska kancelarija Gotovac"/>


    <meta property="og:keywords"
          content="galerija slika advokatska kancelarija, slike advokat Beograd, Gotovac i saradnici, kancelarija Gotovac Beograd, advokat Beograd, advokatske usluge Beograd"/>
    <meta name="keywords" content="galerija slika advokatska kancelarija, slike advokat Beograd, Gotovac i saradnici, kancelarija Gotovac Beograd, advokat Beograd, advokatske usluge Beograd">

    <link rel="canonical" href="https://advokatigotovac.com/galerija"/>

    <meta property="og:description"
          content="Pogledajte galeriju advokatske kancelarije Gotovac i saradnici iz Beograda. Fotografije prostora, tima i atmosfere našeg pravnog tima"/>
    <meta name="twitter:description"
          content="Pogledajte galeriju advokatske kancelarije Gotovac i saradnici iz Beograda. Fotografije prostora, tima i atmosfere našeg pravnog tima">
    <meta name="description"
          content="Pogledajte galeriju advokatske kancelarije Gotovac i saradnici iz Beograda. Fotografije prostora, tima i atmosfere našeg pravnog tima">

    <meta name="robots" content="index, follow">

@endsection
@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.galerija")}}</h1>
                        <a href="/" class="h5 text-white" title="Početna strana">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white" title="Galerija slika kancelarije Gotovac">{{__("index.galerija")}}</a>
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
                <h5 class="fw-bold text-primary text-uppercase">{{__("index.galerija")}}</h5>
                <h2 class="mb-0"> {{__("index.galerija podnaslov")}}</h2>
            </div>
            <br>
            <div class="d-flex flex-wrap justify-content-center g-5 mb-5 mt-3">
                @for ($i = 1; $i <= 24; $i++)
                    @php
                        $abs = public_path("img/gallery/kancelarija_{$i}.jpg");
                    @endphp
                    @if (file_exists($abs))
                        <div class="gallery-box">
                            <a href="{{ asset("img/gallery/kancelarija_{$i}.jpg") }}"
                               class="glightbox"
                               data-gallery="kancelarija"
                            >
                                <img src="{{ asset("img/gallery/kancelarija_{$i}.jpg") }}"
                                     class="img-fluid rounded"
                                     alt="Kancelarija fotografija  {{ $i }}" title="Kancelarija fotografija  {{ $i }}">
                            </a>
                        </div>
                    @endif
                @endfor


            </div>
        </div>
    </div>


    @include("sections.insurances")

@endsection
