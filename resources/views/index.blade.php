@extends("content")


@section("content")
    <div class="container-fluid position-relative p-0" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 header-box">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{__("index.Iskustvo & integritet")}}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{__("index.Advokatska kancelarija Gotovac & Saradnici")}}</h1>
                            <br><br>
                            <a href="quote.html"
                               class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> {{__("index.Naše usluge")}} </a>
                            <a href=""
                               class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">  {{__("index.O nama")}} </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-7.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 header-box">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{__("index.Stručnost & Posvećenost")}}</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{__("index.Naša kancelarija je osnovana 1996 godine")}} </h1>
                            <br><br>
                            <a href="quote.html"
                               class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> {{__("index.Cenovnik")}} </a>
                            <a href=""
                               class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"> {{__("index.Kalkulator")}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Nazad</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Napred</span>
            </button>
        </div>
        <!-- Navbar & Carousel End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-primary p-3"
                                   placeholder="Type search keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pb-2 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn mb-4" data-wow-delay="0.1s">
                        <div class="  d-flex align-items-center blue-papir papir justify-content-center p-4">
                            <div class="bg-white d-flex align-items-center icon justify-content-center rounded mb-2">
                                <i class="fa fa-users  color-light-blue"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">{{__("index.Zadovoljni klijenti")}}</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">18451</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn mb-4" data-wow-delay="0.3s">
                        <div class=" d-flex align-items-center white-papir papir justify-content-center p-4">
                            <div
                                class="bg-light-blue d-flex align-items-center icon justify-content-center rounded mb-2">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="color-light-blue mb-0">{{__("index.Završenih predmeta")}}</h5>
                                <h1 class="mb-0 color-light-blue" data-toggle="counter-up">1660</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn mb-4" data-wow-delay="0.6s">
                        <div class="d-flex align-items-center blue-papir papir justify-content-center p-4">
                            <div class="bg-white d-flex align-items-center justify-content-center icon rounded mb-2">
                                <i class="fa fa-award  color-light-blue"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">{{__("index.Godina postojanja")}}</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">28</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts Start -->


        <!-- About Start -->
        <div class="container-fluid py-5 pt-0 wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">{{__("index.O nama")}}</h5>
                            <h1 class="mb-0">{{__("index.Punih 28 godina")}}</h1>
                        </div>
                        <p class="mb-4">{!! __("index.tekst o nama") !!}</p>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>{{__("index.Online konsultacije")}}
                                </h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>{{__("index.Međunarodno zastupanje")}}
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>{{__("index.24/7 podrška")}}</h5>
                                <h5 class="mb-3"><i
                                        class="fa fa-check text-primary me-3"></i>{{__("index.Pravno savetovanje")}}
                                </h5>
                            </div>
                        </div>

                        <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                           data-wow-delay="0.9s">{{__("index.Kontaktirajte nas")}}</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                 src="img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="cenovnik my-4">
            <div class="w-100 d-flex justify-content-center">
                <a href="" class="wow rollIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    @if(app()->getLocale() === 'sr')
                        <img src="{{asset("img/cenovnik-rs.png")}}">
                    @else
                        <img src="{{asset("img/cenovnik-en.png")}}">
                    @endif


                </a>


            </div>
        </div>


        <!-- Service Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="services">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                    <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <h4 class="mb-3">Cyber Security</h4>
                            <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                                sed</p>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie text-white"></i>
                            </div>
                            <h4 class="mb-3">Data Analytics</h4>
                            <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                                sed</p>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-code text-white"></i>
                            </div>
                            <h4 class="mb-3">Web Development</h4>
                            <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                                sed</p>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fab fa-android text-white"></i>
                            </div>
                            <h4 class="mb-3">Apps Development</h4>
                            <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                                sed</p>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                <i class="fa fa-search text-white"></i>
                            </div>
                            <h4 class="mb-3">SEO Optimization</h4>
                            <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore
                                sed</p>
                            <a class="btn btn-lg btn-primary rounded" href="">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                        <div
                            class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                            <h3 class="text-white mb-3">Call Us For Quote</h3>
                            <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est
                                magna stet eirmod</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Pricing Plan Start -->
        <div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.1s" id="questions">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{__("index.najcesca pitanja")}}</h5>
                    <h1 class="mb-0">{{__("index.najcesca pitanja podnaslov")}}</h1>
                </div>
                <div class="row g-0">
                    <div class="col-12">
                        <div class="accordion accordion-flush faq-body " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseEight" aria-expanded="false"
                                            aria-controls="flush-collapseEight">
                                        {{__("faq.prvo")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">  {!! __("faq.prvo text") !!}</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        {{__("faq.naplata stete")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.naplata stete text") !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                        {{__("faq.naplata potrazivanja")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.naplata potrazivanja text") !!}
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                        {{__("faq.cime se bavi gotovac")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div
                                        class="accordion-body faq-body">  {!! __("faq.cime se bavi gotovac text") !!}</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                        {{__("faq.proces")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.proces text") !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix" aria-expanded="false"
                                            aria-controls="flush-collapseSix">
                                        {{__("faq.postupak")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.postupak text") !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                            aria-controls="flush-collapseSeven">
                                        {{__("faq.neosigurano")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.neosigurano text") !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">
                                        {{__("faq.nepoznato")}}
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body faq-body">
                                        {!! __("faq.nepoznato text") !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Pricing Plan End -->


        <!-- Quote Start -->
        <div class="container-fluid mt-5 wow fadeInUp" data-wow-delay="0.1s" >
            <div class="container ">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                            <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                        </div>
                        <div class="row gx-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone
                                    support</h5>
                            </div>
                        </div>
                        <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea
                            et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos
                            vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                            Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                 style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Call to ask any question</h5>
                                <h4 class="text-primary mb-0">+012 345 6789</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="white-papir rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                             data-wow-delay="0.9s">
                            <form class="py-5"><br>
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control bg-white border-0"
                                               placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control bg-white border-0"
                                               placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select bg-white border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 2</option>
                                            <option value="3">Service 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-white border-0" rows="3"
                                                  placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 pb-5">
                                        <button class="btn bg-light-blue text-white w-100 py-3" type="submit">Request A
                                            Quote
                                        </button>
                                    </div>
                                </div>
                                <br><br><br>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{__("index.Recenzije")}}</h5>
                    <h1 class="mb-0">{{__("index.iskustva klijenata")}}</h1>
                </div>

                <div class="text-center py-3 ">
                    <a href="https://www.google.com/search?q=gotovac&oq=gotovac&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMhAIARAuGK8BGMcBGNQCGIAEMggIAhBFGCcYOzIGCAMQRRhAMgkIBBBFGDsYgAQyCggFEC4Y1AIYgAQyBggGEEUYPDIGCAcQRRg80gEINjYwOGowajeoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x475a656f9b3fbb9d:0x6f323017b4f9faca,1,,,,"
                       target="_blank" class=" border-bottom border-primary fw-bold">
                        80 Google {{__("index.Recenzije")}} ( 4.9 <i class="fa fa-star"></i> )
                    </a>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="{{asset('img/user.png')}}">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1"> Hank Voight</h4>
                                <small class="text-uppercase">03.05.2025</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Best law office in Belgrade and wide. The only office i can rely on. Every case i have, they
                            solve. I never doubt in them, i highly recommend them to all my friends and who ever ask i
                            can safely send to them. Keep up like this!
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="{{asset('img/user.png')}}">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Olivera Janković</h4>
                                <small class="text-uppercase">10.03.2025</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Svaka pohvala za Vladana korektniji posteniji i iskreniji advokat mislim da nema svaka
                            preporuka i pohvala za njega radi najbolje sto moze i daje sve od sebe po pitanju svakog
                            slucaja.<br><br>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="{{asset('img/user.png')}}">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1">Ana Ilić</h4>
                                <small class="text-uppercase">11.15.2024</small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Maksimalno profesionalni, posveceni klijentu i predmetu u potpunosti. Dostupni u svakom
                            momentu za pojasnjenja. Jako ljubazni.
                            Svaka preporuka za saradnju i pravnu pomoc. <br>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light my-4">
                        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                            <img class="img-fluid rounded" src="{{asset('img/user.png')}}">
                            <div class="ps-4">
                                <h4 class="text-primary mb-1"> Jovan Obradovic</h4>
                                <small class="text-uppercase"> 15.08.2017 </small>
                            </div>
                        </div>
                        <div class="pt-4 pb-5 px-5">
                            Najbolja kancelarija u gradu! Rešili su mi radni spor i naplatili štetu posle saobracajne
                            nezgode. Momci su mladi, ažurni i jako profesionalni. Svaka preporuka za Vladana i Luku!<br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="team">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{__("index.tim")}}</h5>
                    <h1 class="mb-0">{{__("index.tim podnaslov")}}</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12   wow slideInUp" data-wow-delay="0.3s">
                        <h4 class="d-flex align-items-center justify-content-center drzava color-primary">
                            <img src="{{asset("img/stub-beli-small.png")}}" alt=""  class="h-100"> {{__("index.srbija")}} <img src="{{asset("img/stub-beli-small.png")}}" alt=""  class="h-100">

                        </h4><br>
                        <div class="d-flex  flex-wrap justify-content-center">
                        <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                            <span class="text-dark">Vladan Gotovac</span>
                            <br>
                            {{__('index.advokat')}}
                        </div>
                            <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Dragan Gotovac</span>
                                <br>
                                {{__('index.advokat')}}
                            </div>
                            <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Natalija Krajinović</span>
                                <br>
                                {{__('index.advokat')}}
                            </div>
                            <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Marko Zekić</span>
                                <br>
                                {{__('index.advokat')}}
                            </div>
                            <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Ivana Gotovac</span>
                                <br>
                                {{__('index.diplomirani pravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Milica Veličković</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Nikola Čvorović</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Maria Lola Veinović</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Maria Lola Veinović</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Anastasija Bogdanović</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Milica Filipović</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Kristina Miketić</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Maja Dizdar</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>
                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Ana Albijanić</span>
                                <br>
                                {{__('index.office manager')}}
                            </div>
                    </div>
                    </div>

                    <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s"> <br>
                        <h4 class="d-flex align-items-center justify-content-center drzava color-primary">
                            <img src="{{asset("img/stub-beli-small.png")}}" alt=""  class="h-100">    {{__("index.srpska")}} <img src="{{asset("img/stub-beli-small.png")}}" alt=""  class="h-100">

                        </h4><br>
                        <div class="d-flex  flex-wrap justify-content-center">
                            <div class="zaposleni blue-papir  text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Jovan Gotovac</span>
                                <br>
                                {{__('index.advokat')}}
                            </div>
                            <div class="zaposleni blue-papir  text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Srdjan Nedić</span>
                                <br>
                                {{__('index.saradnik')}}
                            </div>
                            <div class="zaposleni blue-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Tijana Ristić</span>
                                <br>
                                {{__('index.saradnik')}}
                            </div>

                            <div class="zaposleni white-papir text-center py-5 me-3 mb-3 fw-bold">
                                <span class="text-dark">Đordje Marković</span>
                                <br>
                                {{__('index.pripravnik')}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                    <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                   href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                   href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                   href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">How to build a website</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Start -->


        @include("sections.insurances")

@endsection
