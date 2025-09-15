<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
    name: "BookedOnlineConsultation",
    data() {
        return {
            pagination: [],
            page: 0,
            consultations: [],
            search: {
                name: "",
                date: "",
            },
            editNote: {
                id: '',
                note: '',
                index: ''
            },
            datePickerProps: {
                actionRow: {showCancel: false},
                'time-picker-inline': true,
                'disabled-week-days': [6, 0],
                format: 'dd-MM-yyyy HH:mm:ss',
                cancelText: 'Odustani',
                selectText: 'Potvrdi vreme',
                locale: 'sr-Latn'
            },
        }
    },
    methods: {
        getConsultations(page = 0) {
            this.page = page;
            window.loader(true)
            axios.post(`/admin/get/online-consultation`, {'search': this.search, 'page': page}).then(({data}) => {
                this.consultations = data.data.consultations;
                this.pagination = data.data.meta;
                window.loader(false)
                console.log(data);
            }).catch((error) => {
                window.loader(false)
                alert("Došlo je do greške, kontaktirajte administratora")
            })

        },
        deleteConsultation(id) {
            Swal.fire({
                title: '',
                text: "Da li želite da izbrišete korisnika?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Potvrdi',
                cancelButtonText: 'Otkaži',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.loader(true)
                    axios.delete(`/admin/delete/consultation/${id}`).then(({data}) => {
                        this.$showSuccessSwal("Uspešno birsanje", "Uspešno ste obrisali zakazani termin");
                        this.getConsultations(this.page);
                    }).catch((error) => {
                        window.loader(false)
                        this.$showErrorSwal();
                    })
                }
            });
        },
        changeNotes(id, note, index) {
            this.editNote.note = note
            this.editNote.id = id
            this.editNote.index = index
            this.$refs.editDateModal.click();
        },


        saveChangeNotes() {
            window.loader(true)
            axios.patch(`/admin/change/consultation/notes/${this.editNote.id}`, {"notes": this.editNote.note}).then(({data}) => {
                this.$refs.closeEditModel.click();
                this.$showSuccessSwal("Uspešna izmena", "Uspešno ste izmenili belešku");
                this.consultations[this.editNote.index] = data.data
                window.loader(false)
            }).catch((error) => {
                window.loader(false)
                this.$showErrorSwal();
            })
        },

        seenConsultation(id, index) {
            Swal.fire({
                title: '',
                text: "Pregledali ste novi termin?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Potvrdi',
                cancelButtonText: 'Otkaži',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.loader(true)
                    axios.patch(`/admin/seen/consultation/${id}`).then(({data}) => {
                        this.$showSuccessSwal("Uspešna izmena", "Uspešno ste označili da ste pregledali termin");
                        this.consultations[index] = data.data
                        window.loader(false)
                    }).catch((error) => {
                        window.loader(false)
                        this.$showErrorSwal();
                    })
                }
            });
        },
        setButtonText() {
            this.datePickerProps.startDate = new Date(new Date().setDate(new Date().getDate() + 1))
            this.datePickerProps.highlight = new Date(new Date().setDate(new Date().getDate() + 1))
            this.datePickerProps.startTime = {hours: 13, minutes: 0}

        }
    },
    mounted() {
        this.getConsultations();
        this.setButtonText();
    }
}
</script>

<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" ref="editDateModal" class="btn btn-primary" hidden data-bs-toggle="modal"
                data-bs-target="#setDateModal">
            Setuj datum
        </button>

        <!-- Modal -->
        <div class="modal fade" id="setDateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Izmena beleške </h1>
                        <button type="button" class="btn-close" ref="closeEditModel" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4">
                        <div class="form-group pb-4">
                            <textarea rows="10" cols="20" class="form-control" v-model="editNote.note" name="notes"
                                      id="notes" placeholder="Beleška u kancelariji"></textarea>
                        </div>
                        <button class="btn btn-primary w-100" @click="saveChangeNotes()"> Izmeni belešku</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">

                <div class="col-12 mt-5 tableSize">
                    <div class="pb-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-4" placeholder="Ime klijenta" id="name"
                                           name="class" v-model="search.name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <VueDatePicker style="height: 55px;" no-today model-type="yyyy-MM-dd HH:mm:ss"
                                                   :is-24="true"
                                                   :minutes-grid-increment="15"
                                                   :min-time="{ hours: 13, minutes: 0 }"
                                                   :max-time="{ hours: 17, minutes: 5 }"
                                                   v-model="search.date" id="datetime"
                                                   :ui="{ input: 'form-control ' }"
                                                   v-bind="datePickerProps" placeholder="Datum i vreme"></VueDatePicker>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary w-100" @click="getConsultations()">
                                    Pretraga
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                            <tr class="text-nowrap  ">
                                <th scope="col" class="thminwidth-cassic">Ime</th>
                                <th scope="col" class="thminwidth-cassic">E-mail</th>
                                <th scope="col" class="thminwidth-cassic">Telefon</th>
                                <th scope="col" class="thminwidth-cassic">Datum</th>
                                <th scope="col" class="thminwidth">Poruka</th>
                                <th scope="col" class="thminwidth">Beleška</th>
                                <th scope="col" class="thminwidth-cassic">Pročitano</th>
                                <th scope="col" class="thminwidth-cassic">Obriši</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-if="consultations.length > 0" v-for="(consultation, index) in consultations"
                                :key="index"
                                :class=" [ !consultation.isRead ? 'bg-white' : 'bg-light' , 'text-nowrap']">
                                <td>{{ consultation.name }}</td>
                                <td>{{ consultation.email }}</td>
                                <td>{{ consultation.phone }}</td>
                                <td>{{ consultation.dateTime }}</td>
                                <td>{{ consultation.message }}</td>
                                <td @click="changeNotes(consultation.id , consultation.notes , index)" role="button">
                                    {{ consultation.notes }}
                                </td>
                                <td class="cursor-pointer ps-3">
                                    <button class="btn btn-primary btn-sm px-3"
                                            :class="[!consultation.isRead ? '' : 'disabled' , 'btn btn-primary btn-sm px-3']"
                                            @click="seenConsultation(consultation.id , index)"><i
                                        :class="[!consultation.isRead ? 'bi bi-eye' : 'bi bi-check2']"></i></button>
                                </td>

                                <td class="cursor-pointer ps-3">
                                    <button class="btn btn-danger btn-sm px-3"
                                            @click="deleteConsultation(consultation.id)"><i
                                        class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr v-else>
                                <td colspan="9" class="text-center">Nema rezultata za prikaz</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                    <br> <br>
                    <div
                        v-if="consultations.length > 0 && pagination && !(pagination.current_page === 1 && pagination.current_page === pagination.last_page)"
                        class="paginationsty">
                        <button class="btn btn-primary me-2"
                                @click="getConsultations(pagination.current_page - 1)"
                                :disabled="pagination.current_page === 1">
                            Prethodna
                        </button>
                        <span class="fw-bold">Strana {{ pagination.current_page }} od {{ pagination.last_page }}</span>
                        <button
                            class="btn btn-primary ms-2"
                            @click="getConsultations(pagination.current_page + 1)"
                            :disabled="pagination.current_page === pagination.last_page">
                            Sledeća
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
