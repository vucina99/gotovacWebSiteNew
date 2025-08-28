@extends("content")


@section("content")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.tarifa")}}</h1>
                        <a href="/" class="h5 text-white">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white">{{__("index.tarifa")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 pt-0 wow contact-container fadeInUp prices" data-wow-delay="0.1s">
        <div class="container py-5 pt-0">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{__("index.tarifa")}}</h5>
                <h1 class="mb-0"> {{__("index.tarifa podnaslov")}}</h1>
            </div>
            <br>
            <a href="{{asset("assets/files/tarifa-gotovac.pdf")}}"
               class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" download>  {{__("index.preuzmi")}} PDF  </a>
            <br> <br>
            <div class="table-responsive">
                <table class="table  table-striped table-bordered table-sm align-middle">
                    <thead class="table-light  ">
                    <tr>
                        <th rowspan="2" class="text-nowrap bg-primary text-white p-2">VREDNOST SPORA (T. br. 13)</th>
                        <th rowspan="2" class="text-nowrap bg-primary text-white p-2">PODNESAK</th>
                        <th colspan="1" class="text-nowrap bg-primary text-white p-2">ROČIŠTE</th>
                        <th colspan="1" class="text-nowrap bg-primary text-white p-2">NEODRŽANO 1/2
                            Pod+5.000,00
                        </th>
                        <th rowspan="2" class="text-nowrap bg-primary text-white p-2">ŽALBA</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                       <td class="p-2">do 50.000,00</td>
                       <td class="p-2">10.000,00</td>
                       <td class="p-2">15.000,00</td>
                       <td class="p-2">10.000,00</td>
                       <td class="p-2">20.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">od 50.000,01 do 850.000,00</td>
                       <td class="p-2">15.000,00</td>
                       <td class="p-2">20.000,00</td>
                       <td class="p-2">12.500,00</td>
                       <td class="p-2">30.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">od 850.000,01 do 1.675.000,00</td>
                       <td class="p-2">18.750,00</td>
                       <td class="p-2">23.750,00</td>
                       <td class="p-2">14.375,00</td>
                       <td class="p-2">37.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">od 1.675.000,01 do 3.350.000,00</td>
                       <td class="p-2">27.500,00</td>
                       <td class="p-2">32.500,00</td>
                       <td class="p-2">18.750,00</td>
                       <td class="p-2">55.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">3.350.000,01 – 6.700.000,00</td>
                       <td class="p-2">37.500,00</td>
                       <td class="p-2">42.500,00</td>
                       <td class="p-2">23.750,00</td>
                       <td class="p-2">75.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">6.700.000,01 – 13.350.000,00</td>
                       <td class="p-2">50.000,00</td>
                       <td class="p-2">55.000,00</td>
                       <td class="p-2">30.000,00</td>
                       <td class="p-2">100.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">13.350.000,01 – 26.700.000,00</td>
                       <td class="p-2">62.500,00</td>
                       <td class="p-2">67.500,00</td>
                       <td class="p-2">36.250,00</td>
                       <td class="p-2">125.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">26.700.000,01 – 33.350.000,00</td>
                       <td class="p-2">75.000,00</td>
                       <td class="p-2">80.000,00</td>
                       <td class="p-2">42.500,00</td>
                       <td class="p-2">150.000,00</td>
                    </tr>

                    <!-- Veliki raspon 33.350.000,01 – 135.000.000,00 sa punim tekstom u 1. koloni -->
                    <tr>
                       <td class="p-2">
                            33.350.000,01 – 135.000.000,00<br>
                            <span class="text-muted">
            na započetih 500.000,00 dinara nagrada od 75.000,00 dinara se uvećava za po 50,00 din
          </span>
                        </td>
                       <td class="p-2">75.000,00 + po 50,00 din</td>
                       <td class="p-2">75.000,00 + po 50,00 + 5.000,00</td>
                       <td class="p-2">1/2 podneska + 5.000,00</td>
                       <td class="p-2">podnesak + 100%</td>
                    </tr>

                    <!-- 135.000.000,01 – 335.000.000,00 sa punim tekstom u 1. koloni -->
                    <tr>
                       <td class="p-2">
                            135.000.000,01 – 335.000.000,00<br>
                            <span class="text-muted">
            na započetih 1.500.000,00 nagrada od 85.200,00 se uvećava za po 50,00 din
          </span>
                        </td>
                       <td class="p-2">85.200,00 + po 50,00 din</td>
                       <td class="p-2">85.200,00 + po 50,00 + 5.000,00</td>
                       <td class="p-2">1/2 podneska + 5.000,00</td>
                       <td class="p-2">podnesak + 100%</td>
                    </tr>

                    <!-- preko 335.000.000,01 sa punim tekstom u 1. koloni -->
                    <tr>
                       <td class="p-2">
                            preko 335.000.000,01<br>
                            <span class="text-muted">
            na započetih 7.500.000,00 din nagrada od 91.900,00 din se uvećava za po 50,00 din, najviše za 50.000,00
          </span>
                        </td>
                       <td class="p-2">91.900,00 + po 50,00 a max do 141.900,00</td>
                       <td class="p-2">91.900,00 + po 50,00 a max do 141.900,00 + 5.000,00</td>
                       <td class="p-2">1/2 podneska + 5.000,00</td>
                       <td class="p-2">podnesak + 100%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br>

            <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-light">
                    <tr>
                        <th class="text-nowrap  bg-primary text-white p-2">VRSTA SPORA (T. br. 14)</th>
                        <th class="text-nowrap  bg-primary text-white p-2">PODNESAK</th>
                        <th class="text-nowrap  bg-primary text-white p-2">ROČIŠTE</th>
                        <th class="text-nowrap  bg-primary text-white p-2">NEODRŽANO</th>
                        <th class="text-nowrap  bg-primary text-white p-2">ŽALBA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td class="p-2">Smetanje poseda, razvod, vršenje roditeljskog prava, neprocenjivi radni sporovi, sporovi
                            pred sudom časti, ostali prekršaji, prekršaji pred prekršajnim sudom po zahtevima za sudsko
                            odlučivanje, zaštita uzbunjivača, diskriminacija i zaštita od zlostavljanja na radu,
                            uređenje ličnih stanja, porodični (vanparnica) upis u katastar - neprocenjivi predmeti,
                            upravni postupak (ZoPiI i Porodični i ostali) upravni spor (PZ i ostali), upis u APR,
                            upravni postupak - ostali, pred privrednim društvom
                        </td>
                       <td class="p-2">27.500,00</td>
                       <td class="p-2">32.500,00</td>
                       <td class="p-2">18.750,00</td>
                       <td class="p-2">55.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Prekršaji pred policijom, nasilje u porodici</td>
                       <td class="p-2">30.000,00</td>
                       <td class="p-2">35.000,00</td>
                       <td class="p-2">20.000,00</td>
                       <td class="p-2">60.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Službenosti, stambeni, neprocenjivi sporovi OS</td>
                       <td class="p-2">37.500,00</td>
                       <td class="p-2">42.500,00</td>
                       <td class="p-2">23.750,00</td>
                       <td class="p-2">75.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Prekršaji pred Prekršajnim sudom - ostali</td>
                       <td class="p-2">35.000,00</td>
                       <td class="p-2">40.000,00</td>
                       <td class="p-2">22.500,00</td>
                       <td class="p-2">70.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Utvrđivanje očinstva, prekršaji pred Prekršajnim sudom (javni prihodi, javno informisanje,
                            carinski, devizni...), stečaj i likvidacija (neprocenjivi), upravni postupak (pred
                            inspekcijama) i spor (pred inspekcijama i ZoPiI), domaća arbitraža i medijacija
                            (neprocenjivi), neprocenjivi pred PS
                        </td>
                       <td class="p-2">42.500,00</td>
                       <td class="p-2">47.500,00</td>
                       <td class="p-2">26.250,00</td>
                       <td class="p-2">85.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Ostali postupci pred državnim organom</td>
                       <td class="p-2">32.500,00</td>
                       <td class="p-2">37.500,00</td>
                       <td class="p-2">21.250,00</td>
                       <td class="p-2">65.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Zakonsko izdržavanje</td>
                       <td class="p-2">15.000,00</td>
                       <td class="p-2">20.000,00</td>
                       <td class="p-2">12.500,00</td>
                       <td class="p-2">30.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Privredni prestupi, uređenje imovinskih odnosa - neprocenjivo, ostale vanparnice, upravni
                            postupak i spor (poreski, carinski, policija), neprocenjivi sporovi VS
                        </td>
                       <td class="p-2">50.000,00</td>
                       <td class="p-2">55.000,00</td>
                       <td class="p-2">30.000,00</td>
                       <td class="p-2">100.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Ostali sporovi pred Upravnim sudom</td>
                       <td class="p-2">60.000,00</td>
                       <td class="p-2">65.000,00</td>
                       <td class="p-2">35.000,00</td>
                       <td class="p-2">120.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Autorski sporovi, žig, model (neprocenjivi), donošenje urbanističkih planova, postupci pred
                            Ustavnim sudom, međunarodnim sudom i arbitražom (neprocenjivi)
                        </td>
                       <td class="p-2">75.000,00</td>
                       <td class="p-2">80.000,00</td>
                       <td class="p-2">42.500,00</td>
                       <td class="p-2">150.000,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br>

            <tariff-table></tariff-table>
            <br><br>

            <!-- ========== UGOVORI I OPŠTI AKTI ========== -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-light">
                    <tr>
                        <th colspan="2" class="text-center  bg-primary text-white p-2">UGOVORI I OPŠTI AKTI</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td class="p-2">Ugovori, izjave volje</td>
                       <td class="p-2">2,5% ili T. Br 13 min 27.500,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
            <!-- ========== NEPROCENJIVI UGOVORI I OPŠTI AKTI ========== -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-light">
                    <tr>
                        <th colspan="2" class="text-center  bg-primary text-white p-2">NEPROCENJIVI UGOVORI I OPŠTI AKTI</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td class="p-2">ortački, generalni (opšti), statut, osnivački akt pr. lica</td>
                       <td class="p-2">50.000,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">korišćenje zajedničke stvari, predugovori, pojedinačni akti drž. organa i lok. sam.</td>
                       <td class="p-2">37.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">zaveštanje (neprocenjivo), ostali neprocenjivi ugovori, pojedinačni akti pr. lica</td>
                       <td class="p-2">32.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Punomoć</td>
                       <td class="p-2">22.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">ostale izjave</td>
                       <td class="p-2">18.750,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">o posluzi</td>
                       <td class="p-2">27.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">o trgovinskom zastupanju ili posredovanju, opšti akti pr. lica</td>
                       <td class="p-2">42.500,00</td>
                    </tr>
                    <tr>
                       <td class="p-2">Opšti akti drž. organa i lok. samouprave</td>
                       <td class="p-2">62.500,00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br><br>

            <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">
                    <thead class="table-light">
                    <tr>
                        <th colspan="4" class="text-center  bg-primary text-white p-2">OSTALE RADNJE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="2" class="p-2">Zastupanje više stranaka i više kumulativnih zahteva jednim podneskom, rad noću
                            od 22,00 do
                            7,00, vikendom i praznikom, nagrada za više procesnih radnji istog dana u krivici
                        </td>
                       <td class="p-2">Sastanci i konferencije
                            15.000,00
                        </td>
                       <td class="p-2">Započeti sat
                            5.000,00
                        </td>
                    </tr>
                    <tr>
                       <td class="p-2">Dopisi 5.000,00</td>
                       <td class="p-2">Izdavanje podataka katastra - 2.500,00</td>
                       <td class="p-2">Opomene, pregled i
                            razmatranje spisa
                        </td>
                       <td class="p-2">50% T. Broja</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="p-2">Pregled zemljišnih i dr. knj., izvodi, prepisi, pravosnažnost i izvršnost</td>
                       <td class="p-2">30% T. Broja</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="p-2">Pravni savet 100%   </td>
                       <td class="p-2"> % T. Broja</td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include("sections.insurances")
    <!-- Vendor End -->

@endsection
