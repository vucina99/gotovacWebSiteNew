@extends("content")


@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.kontaktirajte nas")}}</h1>
                        <a href="/" class="h5 text-white">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white">{{__("index.kontakt")}}</a>
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
                <h5 class="fw-bold text-primary text-uppercase">{{__("index.kontakt")}}</h5>
                <h1 class="mb-0"> {{__("index.kontakt podnaslov")}}</h1>
            </div>
            <br>
            <div class="row g-5 mb-5 mt-3">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mb-0 ">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.lokacija kancelarije")}} (SR)</h5>
                            <h4 class="text-primary mb-0">Španskih boraca 24v Beograd</h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.lokacija kancelarije")}} (RS)</h5>
                            <h4 class="text-primary mb-0">Svetog Save 56 Zvornik</h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa  fa-mobile text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.broj telefona")}} (SR)</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+381653338933" class="mb-0 text-primary">+381
                                    65/333-8933</a></h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-mobile text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.broj telefona")}} (RS)</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+38756210752" class="mb-0 text-primary">+38756210752</a>
                            </h4>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-telephone  text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.broj telefona")}} (SR)</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+381116906807" class="mb-0 text-primary">+381116906807</a></h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-telephone  text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.broj telefona")}} (RS)</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+38765325077" class="mb-0 text-primary">+38765325077</a>
                            </h4>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.email adresa")}} (SR)</h5>
                            <h4 class="text-primary mb-0"><a href="mailto:advgotovac@gmail.com"
                                                             class="mb-0 text-primary">advgotovac@gmail.com</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-0 mt-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__("index.email adresa")}} (RS)</h5>
                            <h4 class="text-primary mb-0"><a href="mailto:jovangotovac@gmail.com"
                                                             class="mb-0 text-primary">jovangotovac@gmail.com</a></h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s"  id="contact-form">
                    <form method="post" action="/contact">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4 @error('name') border-1 is-invalid @enderror"  name="name" placeholder="{{__("index.vase ime")}}"  value="{{ old('name') }}"
                                       style="height: 55px;">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4  @error('email') border-1 is-invalid @enderror" name="email"  placeholder="{{__("index.vas email")}}" value="{{ old('email') }}"
                                       style="height: 55px;">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4 @error('subject') border-1 is-invalid @enderror" name="subject" placeholder="{{__("index.vas subject")}}"  value="{{ old('subject') }}"
                                       style="height: 55px;">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3  @error('message') border-1 is-invalid @enderror" name="message" rows="4"
                                          placeholder="{{__("index.vasa poruka")}}" ></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">{{__("index.posalji poruku")}}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3302942790683!2d20.415630175685653!3d44.81483537107076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a656f9b3fbb9d%3A0x6f323017b4f9faca!2sLAW%20OFFICE%20Advokatska%20kancelarija%20Gotovac%20Beograd!5e0!3m2!1ssr!2srs!4v1684945912625!5m2!1ssr!2srs"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include("sections.insurances")
    <!-- Vendor End -->

@endsection
