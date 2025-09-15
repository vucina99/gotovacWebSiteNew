<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    {{--    <title>Padel klub | Pančevo</title>--}}
    {{--    <meta name="description"--}}
    {{--          content="Dobrodošli na prvi padel teren u Pančevu. Iznajmljivanje termina se vrši online ili pozivom na broj. U ponudi imamo i iznajmljivanje i prodaju prateće opreme.">--}}
    {{--    <meta name="keywords"--}}
    {{--          content="Padel Pančevo, Padel klub, iznajmljivanje opreme, prodaja opreme, termini, rezervacija termina, najbolji padel klub u Pančevu">--}}

    {{--    <meta name="twitter:card" content="summary_large_image">--}}
    {{--    <meta name="twitter:title" content="Padel klub | Pančevo">--}}
    {{--    <meta name="twitter:description"--}}
    {{--          content="Dobrodošli na prvi padel teren u Pančevu. Iznajmljivanje termina se vrši online ili pozivom na broj. U ponudi imamo i iznajmljivanje i prodaju prateće opreme.">--}}
    {{--    <meta name="twitter:image" content="https://padelpancevo.com/assets/img/full_background.png">--}}


    {{--    <meta property="og:title" content="Padel klub | Pančevo"/>--}}

    {{--    <meta property="og:keywords"--}}
    {{--          content="Padel Pančevo, Padel klub, iznajmljivanje opreme, prodaja opreme, termini, rezervacija termina, najbolji padel klub u Pančevu"/>--}}

    {{--    <meta property="og:description"--}}
    {{--          content="Dobrodošli na prvi padel teren u Pančevu. Iznajmljivanje termina se vrši online ili pozivom na broj. U ponudi imamo i iznajmljivanje i prodaju prateće opreme."/>--}}
    {{--    <meta property="og:url" content="https://padelpancevo.com">--}}
    {{--    <meta property="og:image" content="https://padelpancevo.com/assets/img/full_background.png"/>--}}
    {{--    <meta property="og:type" content="Website"/>--}}
    {{--    <meta property="og:locale" content="sr_RS"/>--}}
    {{--    <meta name="language" content="sr-RS">--}}
    {{--    <meta name="copyright" content="Copyright © Padel Pančevo. Sva prava zadržana">--}}
    {{--    <link rel="canonical" href="https://padelpancevo.com"/>--}}
    {{--    <meta name="author" content="Padel Klub Pančevo">--}}
    {{--    <link rel="alternate" hreflang="sr" href="https://padelpancevo.com/">--}}
    {{--    <meta name="theme-color" content="#507bb5">--}}
    {{--    @section('seo')--}}
    {{--        <meta name="robots" content="noindex">--}}
    {{--    @show--}}


    {{--    <!-- Favicons -->--}}
    {{--    <link href="{{asset("/assets/img/favicon.png")}}" rel="icon" type="image/png">--}}
    {{--    <link href="{{asset("/assets/img/favicon.png")}}" rel="apple-touch-icon">--}}

    {{--    <!-- Fonts -->--}}
    {{--    <link href="https://fonts.googleapis.com" rel="preconnect">--}}
    {{--    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>--}}
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"--}}
    {{--        rel="stylesheet">--}}
    @vite('resources/css/app.css')
</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img src="{{asset('img/load-icon.png')}}" alt="">
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
                        <small class="text-light"><a href="mailto:advgotovac@gmail.com" class="text-light"><i
                                    class="fa fa-envelope-open me-2"></i>advgotovac@gmail.com</a></small>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end ">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <small class="me-3 text-light"><a href="tel:0653338933" class="text-light"><i
                                    class="fa fa-mobile me-2"></i>+381 65-3338933</a></small>
                        <small class="me-3 text-light"><a href="tel:+381116906807" class="text-light"><i
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
    {{--    @auth--}}
    {{--        <nav class="navbar bg-dark navbar-expand-lg navbar-dark px-5 py-1 py-lg-0">--}}
    {{--            @else--}}
    {{--                <nav class="navbar navbar-expand-lg navbar-dark px-5 py-1 py-lg-0">--}}

    {{--                    @endauth--}}
    {{--                    <div class="container-sm p-0">--}}
    {{--                        <a href="/" class="navbar-brand p-0 logo-link ">--}}
    {{--                            <img src="{{asset('img/logo/logo-beli.png')}}" alt="img-fluid">--}}
    {{--                        </a>--}}
    {{--                        <button class="navbar-toggler pt-2" type="button" data-bs-toggle="collapse"--}}
    {{--                                data-bs-target="#navbarCollapse">--}}
    {{--                            <span class="fa fa-bars"></span>--}}
    {{--                        </button>--}}
    {{--                        <div class="collapse navbar-collapse" id="navbarCollapse">--}}
    {{--                            <div class="navbar-nav ms-auto py-0">--}}
    {{--                                @guest--}}
    {{--                                    <a href="/#home" class="nav-item nav-link active">{{__("index.pocetna")}}</a>--}}
    {{--                                    <a href="/#about" class="nav-item nav-link">{{__("index.O nama")}}</a>--}}
    {{--                                    <a href="/#services" class="nav-item nav-link">{{__("index.usluge")}}</a>--}}
    {{--                                    <a href="/#questions" class="nav-item nav-link">{{__("index.tarifa")}}</a>--}}
    {{--                                    <a href="/#review" class="nav-item nav-link">{{__("index.Recenzije")}}</a>--}}
    {{--                                    <a href="/#team" class="nav-item nav-link">{{__("index.tim")}}</a>--}}
    {{--                                    <a href="/blog" class="nav-item nav-link">{{__("index.konsultacije")}}</a>--}}
    {{--                                    <a href="/blog" class="nav-item nav-link">{{__("index.blog")}}</a>--}}

    {{--                                    <a href="/kontakt" class="nav-item nav-link me-4">{{__("index.kontakt")}}</a>--}}
    {{--                                @else--}}
    {{--                                    <a href="/home" class="nav-item nav-link  text-white me-4">Zakazane konsultacije</a>--}}
    {{--                                    <a href="/admin/blog-kategorije" class="nav-item  text-white nav-link me-4">Blog--}}
    {{--                                        kategorije</a>--}}
    {{--                                    <a href="/admin/blog/kreiraj-objavu" class="nav-item  text-white nav-link me-4">Blog--}}
    {{--                                        kreiranje</a>--}}
    {{--                                    <a href="/admin/blog/sve-objave" class="nav-item  text-white nav-link me-4">Blog--}}
    {{--                                        objave</a>--}}
    {{--                                    <a class="nav-item nav-link  text-white" href="{{ route('logout') }}"--}}
    {{--                                       onclick="event.preventDefault();   document.getElementById('logout-form').submit();">Odjavi--}}
    {{--                                        se </a>--}}
    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
    {{--                                        @csrf--}}
    {{--                                    </form>--}}
    {{--                                @endguest--}}
    {{--                            </div>--}}
    {{--                            @guest--}}
    {{--                                <div class="ms-0 ps-0">--}}
    {{--                                    <div class="nav-item nav-link ms-0 ps-0 border-0 d-flex">--}}
    {{--                                        <div><a href="/promeni-jezik/sr"> <img src="{{asset("img/rs.png")}}" alt=""--}}
    {{--                                                                               class="h-100 w-100 mr-5"></a></div>--}}
    {{--                                        <div class="ps-4"></div>--}}
    {{--                                        <div><a href="/promeni-jezik/en"><img src="{{asset("img/en.png")}}"--}}
    {{--                                                                              class="h-100 w-100" alt=""></a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            @endguest--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </nav>--}}



    @auth
        <nav class="navbar  bg-dark navbar-dark  px-5 py-1 py-lg-0">
            @else
                <nav class="navbar guestNavbar  navbar-dark  px-5 py-1 py-lg-0">

                    @endauth
                    <div class="container">
                        <a href="/" class="navbar-brand p-0 logo-link ">
                            <img src="{{asset('img/logo/logo-beli.png')}}" alt="img-fluid">
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
                                    <a href="/#home" class="nav-item nav-link ">{{__("index.pocetna")}}</a>
                                    <a href="/#about" class="nav-item nav-link">{{__("index.O nama")}}</a>
                                    <a href="/#services" class="nav-item nav-link">{{__("index.usluge")}}</a>
                                    <a href="/#review" class="nav-item nav-link">{{__("index.Recenzije")}}</a>
                                    <a href="/#team" class="nav-item nav-link">{{__("index.tim")}}</a>
                                    <a href="/advokatska-tarifa" class="nav-item nav-link">{{__("index.tarifa")}}</a>

                                    <a href="/online-konsultacije" class="nav-item nav-link">{{__("index.konsultacije")}}</a>
                                    <a href="/kontakt" class="nav-item nav-link me-4">{{__("index.kontakt")}}</a>
                                    <a href="/blog" class="nav-item nav-link">{{__("index.blog")}}</a>
                                    <a href="/login" class="nav-item nav-link">Log in </a>

                                @else
                                    <a href="/home" class="nav-item nav-link  me-4">Zakazane konsultacije</a>
                                    <a href="/admin/blog-kategorije" class="nav-item   nav-link me-4">Blog
                                        kategorije</a>
                                    <a href="/admin/blog/kreiraj-objavu" class="nav-item   nav-link me-4">Blog
                                        kreiranje</a>
                                    <a href="/admin/blog/sve-objave" class="nav-item   nav-link me-4">Blog
                                        objave</a>
                                    <a class="nav-item nav-link " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();   document.getElementById('logout-form').submit();">Odjavi
                                        se </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                                @guest
                                    <div class="ms-4 pt-3 ">
                                        <div class="nav-item nav-link ms-0 ps-0 border-0 d-flex">
                                            <div><a href="/promeni-jezik/sr"> <img src="{{asset("img/rs.png")}}" alt=""
                                                                                   class="h-100 w-100 mr-5"></a></div>
                                            <div class="ps-4"></div>
                                            <div><a href="/promeni-jezik/en"><img src="{{asset("img/en.png")}}"
                                                                                  class="h-100 w-100" alt=""></a>
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
                    <a href="index.html" class="navbar-brand ">
                        <img src="{{asset("img/logo/new-full-logo.png")}}" alt="" class="w-100">
                    </a>
                    <p class="mt-3 mb-4">Prijavite se na naš newsletter i budite u toku sa najnovijim pravnim vestima i
                        savetima.
                    </p><br>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3"
                                   placeholder="{{__("index.vas email")}}">
                            <button class="btn btn-dark">{{__("index.prijavi se")}}</button>
                        </div>
                    </form>
                    <br><br><br>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0 d-flex align-items-center">{{__("index.kontakt")}} <span
                                    class="place"> &nbsp; (SR)</span></h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"> Republika Srbija - Španskih boraca 24v Beograd</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <a href="mailto:advgotovac@gmail.com" class="mb-0 text-white">advgotovac@gmail.com</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-mobile text-primary me-2"></i>
                            <a href="tel:+381653338933" class="mb-0 text-white">+381 65/333-8933</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+381116906807" class="mb-0 text-white">+381116906807</a>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0 d-flex align-items-center">{{__("index.kontakt")}} <span
                                    class="place"> &nbsp; (RS)</span></h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"> Republika Srpska BIH - Svetog Save 56 Zvornik</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <a href="mailto:jovangotovac@gmail.com" class="mb-0 text-white">jovangotovac@gmail.com</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-mobile text-primary me-2"></i>
                            <a href="tel:+38756210752" class="mb-0 text-white">+38756210752</a>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <a href="tel:+38765325077" class="mb-0 text-white">+38765325077</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 drzavaInfo">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0"> {{__("index.korisni linkovi")}}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="https://aks.org.rs/cir/" target="_blank" rel="nofollow"><i
                                    class="bi bi-arrow-right text-primary me-2"></i> {{__("index.advokatska komora")}}
                                &nbsp; </a>
                            <a class="text-light mb-2" target="_blank" href="https://akbgd.org.rs/" rel="nofollow"><i
                                    class="bi bi-arrow-right text-primary me-2"></i> {{__("index.advokatska komora bg")}}
                                &nbsp; </a>
                            <a class="text-light mb-2"
                               href="https://www.apr.gov.rs/%d0%bf%d0%be%d1%87%d0%b5%d1%82%d0%bd%d0%b0.3.html"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>{{__("index.registri")}}</a>
                            <a class="text-light mb-2" target="_blank" href="https://www.prvi.os.sud.rs/"><i
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


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
@vite('resources/js/app.js')
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
