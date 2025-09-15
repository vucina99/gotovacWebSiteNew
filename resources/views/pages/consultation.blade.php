@extends("content")


@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.konsultacije")}}</h1>
                        <a href="/" class="h5 text-white">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white">{{__("index.konsultacije")}}</a>
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
                <h5 class="fw-bold text-primary text-uppercase">{{__("index.konsultacije")}}</h5>
                <h1 class="mb-0"> {{__("index.konsultacije podnaslov")}}</h1>
            </div>
            <br>

            <div class="row g-5 my-3 contact-form">
                <consultation-form :translate="@js(__('index'))" lang="{{app()->getLocale()}}"></consultation-form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include("sections.insurances")
    <!-- Vendor End -->

@endsection
