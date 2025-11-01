<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    @vite('resources/css/app.css')



    <!--    SEO-->
    @section('seo')
        <meta name="robots" content="noindex">
        <title>Advokat u Beogradu | Gotovac i Saradnici</title>
        <meta property="og:title" content="Advokat u Beogradu | Gotovac i Saradnici"/>
        <meta name="twitter:title" content="Advokat u Beogradu | Gotovac i Saradnici">

        <link rel="canonical" href="https://www.advokatigotovac.com"/>

    @show
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{asset("img/logo/favicon.png")}}" rel="icon">
    <link href="{{asset("img/logo/favicon.png")}}" rel="apple-touch-icon">
    <meta property="og:url" content="https://www.advokatigotovac.com">
    <meta property="og:image" content="https://www.advokatigotovac.com/img/social-media-image.png"/>
    <meta property="og:type" content="Website"/>
    <meta name="language" content="{{app()->getLocale()}}">
    <meta name="copyright" content="Copyright © Gotovac i Saradnici. Sva prava zadržana">
    <meta property="og:locale" content="{{app()->getLocale()}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://www.advokatigotovac.com/img/social-media-image.png"/>
    <meta name="author" content="Gotovac i Saradnici">
    <link rel="preload" href="https://www.advokatigotovac.com/img/social-media-image.png" as="image">
    <link rel="alternate" hreflang="{{app()->getLocale()}}" href="https://www.advokatigotovac.com">
    <meta name="theme-color" content="#0056b3">
    <meta name="format-detection" content="telephone=no">

</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img src="{{asset('img/load-icon.png')}}" alt="ikonica loadera" title="Ikonica koja se vrti">
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
@guest
    <div class=" bg-dark px-5 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Španskih boraca 24v,
                            Beograd</small>
                        <small class="text-light"> <i
                                class="bi bi-clock-fill me-2"></i>{{__("index.radno vreme kratko")}}</small>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end ">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <small class="me-3 text-light"><a href="tel:+38163417117" class="text-light"><i
                                    class="fa fa-mobile me-2" title="Telefon advokatske kancelarije Gotovac"></i>+381
                                63/417-117</a></small>
                        <small class="text-light"><a href="tel:+381116906807"
                                                     title="Fiksni advokatske kancelarije Gotovac" class="text-light"><i
                                    class="fa fa-phone-alt me-2"></i>+381116906807</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
@endguest


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    @auth
        <nav class="navbar  bg-dark navbar-dark  px-3 py-1 py-lg-0">
            @else
                <nav class="navbar guestNavbar  navbar-dark  px-3 py-1 py-lg-0">

                    @endauth
                    <div class="container">
                        <a href="/" class="navbar-brand p-0 logo-link " title="Link ka početnoj stranici">
                            <img src="{{asset('img/logo/logo-beli.png')}}" alt="Advokat Gotovac logo"
                                 title="Logo u zaglavlju">
                        </a>
                        <button class="navbar-toggler pt-2" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="fa fa-bars"></span>
                        </button>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                             aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title ms-3" id="offcanvasNavbarLabel">Gotovac & Saradnici</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                @guest
                                    <a href="/#home" class="nav-item nav-link "
                                       title="{{__("index.pocetna")}}">{{__("index.pocetna")}}</a>
                                    <a href="/#about" class="nav-item nav-link"
                                       title="{{__("index.O nama")}}">{{__("index.O nama")}}</a>
                                    <a href="/#services" class="nav-item nav-link pb-0"
                                       title="{{__("index.usluge")}}">{{__("index.usluge")}} </a>
                                    <div class="ms-4 pb-2 podmenu">
                                        <a href="/#services"
                                           class="text-decoration-none"
                                           title="Advokat za saobraćaj — usluge i pravna pomoć">
                                            {{__("index.advokat za saobracaj")}}
                                        </a> <br>
                                        <div class="ms-2  podmenu ">
                                            <a href="/evropski-izvestaj"
                                               title="Evropski izveštaji o saobraćajnim nezgodama">
                                                {{ __("index.evropski izvestaji") }}
                                            </a> <br>
                                            <a href="/nezgode-sa-pesacima" title="Pravna pomoć kod nezgoda sa pešacima">
                                                {{ __("index.nezgode sa pesacima") }}
                                            </a><br>
                                            <a href="/stete-javni-prevoz" title="Naknada štete u javnom prevozu">
                                                {{ __("index.stete u javnom prevozu") }}
                                            </a><br>
                                            <a href="/smrtni-slucajevi"
                                               title="Pravna zaštita u slučaju smrtnog slučaja">
                                                {{ __("index.smrtni slucajevi") }}
                                            </a><br>
                                            <a href="/kasko-stete" title="Kasko osiguranje i naplata štete">
                                                {{ __("index.kasko stete") }}
                                            </a><br>
                                            <a href="/stete-na-vozilima" title="Naknada za štete na vozilima">
                                                {{ __("index.stete na vozilima") }}
                                            </a><br>
                                            <a href="/stete-na-kamionima"
                                               title="Pravna pomoć za štete na kamionima i teretnim vozilima">
                                                {{ __("index.na kamionima") }}
                                            </a><br>
                                            <a href="/telesne-povrede"
                                               title="Naknada za telesne povrede u saobraćajnim nezgodama">
                                                {{ __("index.telesne povrede") }}
                                            </a><br>

                                            <a href="/advokat-za-saobracajke" title="Advokat za saobraćajke">
                                                {{ __("index.advokat za saobracajke") }}
                                            </a><br>
                                            <a href="/mesecna-renta"  title="Mesečna renta">
                                                {{ __("index.renta") }}
                                            </a><br>

                                            <a href="/vrste-saobracajnih-steta"  title="Vrste štete za žrtve saobraćajne nezgode" >
                                                {{ __("index.vrste štete") }}
                                            </a><br>
                                            <a href="/stete-na-motociklima"  title="Štete na motociklima">
                                                {{ __("index.motocikli") }}
                                            </a><br>
                                            <a href="/povrede-na-radu"  title="Povrede na radu">
                                                {{ __("index.povrede na radu") }}
                                            </a><br>
                                            <a href="/kasnjenje-leta-na-aerodromu"
                                               title="Kasnjenje leta na aerodromu">{{ __("index.kasnjenje leta") }}</a><br>
                                        </div>

                                        <a href="/#services"
                                           class="text-decoration-none"
                                           title="Privredno pravo — usluge i zastupanje">
                                            {{ __("index.privredno pravo") }}
                                        </a><br>
                                        <a href="/#services"
                                           class="text-decoration-none"
                                           title="Obligaciono pravo — ugovori i naknade štete">
                                            {{ __("index.obligaciono pravo") }}
                                        </a><br>
                                        <a href="/#services"
                                           class="text-decoration-none"
                                           title="Krivično pravo — odbrana i zastupanje">
                                            {{ __("index.krivicno pravo") }}
                                        </a><br>
                                        <a href="/#services"
                                           class=" text-decoration-none"
                                           title="Pravo osiguranja — polise i naplata štete">
                                            {{ __("index.osiguranje pravo") }}
                                        </a>
                                    </div>
                                    <a href="/#question" class="nav-item nav-link"
                                       title="{{__("index.najcesca pitanja")}}">{{__("index.najcesca pitanja")}}</a>
                                    <a href="/#review" class="nav-item nav-link"
                                       title="{{__("index.Recenzije")}}">{{__("index.Recenzije")}}</a>
                                    <a href="/#team" class="nav-item nav-link"
                                       title="{{__("index.tim")}}">{{__("index.tim")}}</a>
                                    <a href="/advokatska-tarifa" class="nav-item nav-link"
                                       title="{{__("index.tarifa")}}">{{__("index.tarifa")}}</a>
                                    <a href="/online-konsultacije" class="nav-item nav-link"
                                       title="{{__("index.konsultacije")}}">{{__("index.konsultacije")}}</a>
                                    <a href="/kalkulator-trudnicke-naknade" class="nav-item nav-link"
                                       title="{{__("index.za trudnice")}}">{{__("index.za trudnice")}}</a>
                                    <a href="/galerija" class="nav-item nav-link me-4"
                                       title="{{__("index.galerija")}}">{{__("index.galerija")}}</a>
                                    <a href="/kontakt" class="nav-item nav-link me-4"
                                       title="{{__("index.kontakt")}}">{{__("index.kontakt")}}</a>
                                    <a href="/blog" class="nav-item nav-link"
                                       title="{{__("index.blog")}}">{{__("index.blog")}}</a>
                                    <a href="/login" class="nav-item nav-link" title="Prijava admin">Log in </a>

                                @else
                                    <a href="/home" class="nav-item nav-link  me-4" title="Zakazane konsultacije">Zakazane
                                        konsultacije</a>
                                    <a href="/admin/blog-kategorije" title="Blog  kategorije"
                                       class="nav-item   nav-link me-4">Blog
                                        kategorije</a>
                                    <a href="/admin/blog/kreiraj-objavu" title="Blog kreiranje"
                                       class="nav-item   nav-link me-4">Blog
                                        kreiranje</a>
                                    <a href="/admin/blog/sve-objave" title="Blog objave"
                                       class="nav-item   nav-link me-4">Blog
                                        objave</a>
                                    <a class="nav-item nav-link " title="Odjavi se" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();   document.getElementById('logout-form').submit();">Odjavi
                                        se </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                                @guest
                                    <div class="ms-4 pt-3 ">
                                        <div class="nav-item nav-link ms-0 ps-0 border-0 d-flex">
                                            <div><a href="/promeni-jezik/sr" title="Promena jezika u Srpski"> <img
                                                        loading="lazy" decoding="async"
                                                        src="{{asset("img/rs.png")}}" alt="Zastava Srbije"
                                                        title="Ikonica Srbija"
                                                        class="h-100 w-100 mr-5"></a></div>
                                            <div class="ps-4"></div>
                                            <div><a href="/promeni-jezik/en" title="Promena jezika u Engleski"><img
                                                        loading="lazy" decoding="async"
                                                        src="{{asset("img/en.png")}}"
                                                        class="h-100 w-100" alt="Ikonica Engleska"
                                                        title="Ikonica Engleska"></a>
                                            </div>
                                        </div>
                                    </div>
                                @endguest
                            </div>

                        </div>
                    </div>
                </nav>
</div>

</div>


<div id="app" data-vue-root>
    @yield("content")
</div>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center pb-5 text-center h-100 blue-papir p-4">
                    <a href="/" class="navbar-brand " title="Logo Gotovac u podnožiju sajta">
                        <img src="{{asset("img/logo/new-full-logo.png")}}" loading="lazy" decoding="async"
                             alt="Originalni logo kancelarije Gotovac"
                             title="Zvanični logo kancelarije" class="w-100">
                    </a>
                    <p class="mt-3 mb-4">Prijavite se na naš newsletter i budite u toku sa najnovijim pravnim vestima i
                        savetima.
                    </p><br>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3"
                                   placeholder="{{__("index.vas email")}}">
                            <button class="btn btn-dark" type="reset">{{__("index.prijavi se")}}</button>
                        </div>
                    </form>
                    <br><br><br>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0 align-items-center">{{__("index.kontakt")}} <span
                                    class="place d-block mt-1 fw-normal">  {{__("index.republika srbija")}} </span></h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"> Španskih boraca 24v Beograd</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <a href="mailto:advgotovac@gmail.com" title="E-mail adresa u Republici Srbiji"
                               class="mb-0 text-white">advgotovac@gmail.com</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-mobile text-primary me-2"></i>
                            <a href="tel:+38163417117" title="Prvi broj telefona u Republici Srbiji"
                               class="mb-0 text-white">+381 63/417-117</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+381116906807" title="Drugi broj telefona u Republici Srbiji"
                               class="mb-0 text-white">+381116906807</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-clock-fill text-primary me-2"></i>
                            <span class="mb-0 text-white"> {{__("index.radno vreme kratko")}}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0  align-items-center">{{__("index.kontakt")}}
                                <span
                                    class="place  d-block mt-1 fw-normal"> {{__("index.republika srpska")}} </span></h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"> Svetog Save 56 Zvornik</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <a href="mailto:jovangotovac@gmail.com" title="E-mail adresa u Republici Srpskoj"
                               class="mb-0 text-white">jovangotovac@gmail.com</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-mobile text-primary me-2"></i>
                            <a href="tel:+38756210752" class="mb-0 text-white"
                               title="Prvi broj telefona u Republici Srpskoj">+38756210752</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+38765325077" title="Drugi broj telefona u Republici Srpskoj"
                               class="mb-0 text-white">+38765325077</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-clock-fill text-primary me-2"></i>
                            <span class="mb-0 text-white"> {{__("index.radno vreme kratko")}}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0"> {{__("index.korisni linkovi")}} <span
                                    class="place  d-block mt-1 fw-normal"> {{__("index.povezane teme")}} </span></h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="https://aks.org.rs/cir/" target="_blank"
                               title="Advokatske komora Srbije" rel="noopener noreferrer nofollow"><i
                                    class="bi bi-arrow-right text-primary me-2"></i> {{__("index.advokatska komora")}}
                                &nbsp; </a>
                            <a class="text-light mb-2" target="_blank" rel="noopener noreferrer nofollow"
                               title="Beogradska advokatska komora" href="https://akbgd.org.rs/"><i
                                    class="bi bi-arrow-right text-primary me-2"></i> {{__("index.advokatska komora bg")}}
                                &nbsp; </a>
                            <a class="text-light mb-2" title="Agencija za privredne registre" target="_blank"
                               rel="noopener noreferrer nofollow"
                               href="https://www.apr.gov.rs/%d0%bf%d0%be%d1%87%d0%b5%d1%82%d0%bd%d0%b0.3.html"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{__("index.registri")}}</a>

                            <a class="text-light mb-2" target="_blank" title="Prvi osnovni sud u Beogradu"
                               rel="noopener noreferrer nofollow" href="https://www.prvi.os.sud.rs/"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{__("index.sud")}}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="/">Gotovac & Saradnici</a>. All
                        Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- 1) jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- 2) Waypoints (POTREBNO za CounterUp v1) -->
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/glightbox/js/glightbox.min.js') }}"></script>

<!-- 3) jQuery plugini -->
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>

<!-- 4) (Ako imaš) template init pre Vite-a -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- 5) Tek onda Vite bundle (Vue app) -->
@vite('resources/js/app.js')

<!-- 6) (Opcionalno) Bootstrap 5 bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
