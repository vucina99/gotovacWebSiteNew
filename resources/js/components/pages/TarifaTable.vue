<script>
export default {
    name: "TarifaTable",
    data() {
        return {
            header1: false,
            header2: false,
            header3: false,
            header1: false,
        }
    }
}
</script>

<template>
    <div class="table-responsive">
        <table class="table table-bordered table-sm align-middle">
            <thead class="table-light">
            <tr>
                <th class="text-nowrap  bg-primary text-white p-2 align-middle ">VISINA ZAPREĆENE KAZNE ZA KRIVIČNO DELO</th>
                <th class="wrap  bg-primary text-white p-2 thminwidth align-middle">
                    ODBRANA, ZASTUPANJE PRIVATNOG TUŽIOCA I OŠTEĆENOG KAO TUŽIOCA, <span v-show="header1"> ,RAZGOVOR SA
                        OKRIVLJENIM U PRITVORU ILI ZATVORU, ZASTUPANJE MALOLETNOG OŠTEĆENOG <br>
                    (sa 1 započetim satom) Tar. br. 1 </span> <a href="javascript:void(0)" class="border-bottom"
                                                                 @click="header1 = !header1">  <br> <span v-show="!header1"> Pročitaj celo zaglavlje <i
                    class="bi bi-arrow-down"></i>  </span> <span v-show="header1"> Smanji zaglavlje <i
                    class="bi bi-arrow-up"></i>  </span> </a>
                </th>
                <th class="wrap  bg-primary text-white p-2 thminwidth align-middle">
                    <strong>ZASTUPANJE OŠTEĆENOG, NEODRŽAN PRETRES, PRIJEM REŠENJA O ZADRŽAVANJU</strong><br>
                    (sa 1 započetim satom)
                </th>
                <th class="wrap  bg-primary text-white p-2 thminwidth align-middle">
                    <strong>ŽALBA okrivljenog, privatnog tužioca i ošt. kao tužioca protiv presude, rešenja
                        kojim se izriče mera bezbednosti <span v-show="header3"> ili vaspitna mera i oduzimanje  imovinske koristi,
                            PONAVLJANJE KRIVIČNOG POSTUPKA, ZAŠTITA ZAKONITOSTI, USTAVNE ŽALBE </span> <a
                            href="javascript:void(0)" class="border-bottom"
                            @click="header3 = !header3">  <br> <span v-show="!header3"> Pročitaj celo zaglavlje <i
                            class="bi bi-arrow-down"></i>  </span> <span v-show="header3"> Smanji zaglavlje <i
                            class="bi bi-arrow-up"></i>  </span> </a> </strong>
                </th>
                <th class="wrap  bg-primary text-white p-2 thminwidth align-middle">
                    <strong>INICIJALNI AKTI</strong>: Privatne tužbe, krivične prijave, optužni akt,  predlog za
                    preduzimanje dokaznih radnji, <span v-show="header2"> predlog za zaključenje  sporazuma o priznanju krivice,  odgovor
                    na optužnicu, predlog za ukidanje pritvora, pismena odbrana, obrazloženi podnesak, molba za
                    odlaganje izvršenja kazne zatvora, predlog za izdržavanje kazne zatvora bez napuštanja
                    prostorija, molba za uslovni otpust, tužbe za zaštitu povrede prava osuđenog, zahtev za
                    rehabilitaciju, zahteva za naknadu troškova  ŽALBA PROTIV REŠENJA : o
                    zadržavanju, određivanju ili produženju pritvora, o produženju zabrane napuštanja mesta
                    boravka, ODGOVOR NA ŽALBU , žalba oštećenog, molbe za pomilovanje, odgovor
                    na zahtev za ponavljanje kriv. postupka </span> <a href="javascript:void(0)" class="border-bottom"
                                                                       @click="header2 = !header2"> <br> <span
                    v-show="!header2"> Pročitaj celo zaglavlje <i
                    class="bi bi-arrow-down"></i>  </span> <span v-show="header2"> Smanji zaglavlje <i
                    class="bi bi-arrow-up"></i>  </span> </a>
                </th>
                <th class="text-nowrap  bg-primary text-white align-middle p-2">OSTALI PODNESCI</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="p-2">do 3 god</td>
                <td class="p-2">35.000,00</td>
                <td class="p-2">20.000,00</td>
                <td class="p-2">60.000,00</td>
                <td class="p-2">30.000,00</td>
                <td class="p-2">15.000,00</td>
            </tr>
            <tr>
                <td class="p-2">3 do 5 god</td>
                <td class="p-2">42.500,00</td>
                <td class="p-2">23.750,00</td>
                <td class="p-2">75.000,00</td>
                <td class="p-2">37.500,00</td>
                <td class="p-2">18.750,00</td>
            </tr>
            <tr>
                <td class="p-2">5 do 10 god</td>
                <td class="p-2">55.000,00</td>
                <td class="p-2">30.000,00</td>
                <td class="p-2">100.000,00</td>
                <td class="p-2">50.000,00</td>
                <td class="p-2">25.000,00</td>
            </tr>
            <tr>
                <td class="p-2">10 do 15 god</td>
                <td class="p-2">80.000,00</td>
                <td class="p-2">42.500,00</td>
                <td class="p-2">150.000,00</td>
                <td class="p-2">75.000,00</td>
                <td class="p-2">37.500,00</td>
            </tr>
            <tr>
                <td class="p-2">preko 15 godina</td>
                <td class="p-2">105.000,00</td>
                <td class="p-2">55.000,00</td>
                <td class="p-2">200.000,00</td>
                <td class="p-2">100.000,00</td>
                <td class="p-2">50.000,00</td>
            </tr>
            <tr>
                <td class="p-2">od 30 do 40 godina i doživotni zatvor</td>
                <td class="p-2">130.000,00</td>
                <td class="p-2">67.500,00</td>
                <td class="p-2">250.000,00</td>
                <td class="p-2">125.000,00</td>
                <td class="p-2">62.500,00</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
