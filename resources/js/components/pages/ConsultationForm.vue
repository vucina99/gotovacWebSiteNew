<script>
import axios from "axios";

export default {
    name: "ConsultationForm",
    props: ['translate', 'lang'],
    data() {
        return {
            errors: "",
            successReservation: false,
            data: {
                date_time: '',
                name: '',
                phone: '',
                email: '',
                message: ''
            },
            datePickerProps: {
                actionRow: {showCancel: false},
                'time-picker-inline': true,
                'disabled-week-days': [6, 0],
                format: 'dd-MM-yyyy HH:mm:ss'
            },
        }
    },
    methods: {
        reservation() {
            window.loader(true);
            axios.post("/reservation/consultation", this.data).then(({data}) => {
                this.successReservation = true;
                this.errors = "";
                this.data = {
                        date_time: '',
                        name: '',
                        phone: '',
                        email: '',
                        message: ''
                },
                window.loader(false);
            }).catch((error) => {
                console.log(error)
                if (error.response && error.response.status == "422") {
                    this.errors = error.response.data.errors;
                    window.loader(false);
                    this.successReservation = false;
                } else {
                    window.loader(false);
                    this.successReservation = false;
                    this.errors = '';
                    // this.loader = false;
                    alert("Došlo je do greške u rezervaciji, pozovite kancelariju");
                }

            })
        },

        setButtonText() {
            if (this.lang == 'sr') {
                this.datePickerProps.cancelText = 'Odustani'
                this.datePickerProps.selectText = 'Potvrdi vreme'
                this.datePickerProps.locale = 'sr-Latn'
            } else {
                this.datePickerProps.cancelText = 'Cancel'
                this.datePickerProps.selectText = 'Select time'
            }
            this.datePickerProps['max-date'] = new Date(new Date().setDate(new Date().getDate() + 500))
            this.datePickerProps['min-date'] = new Date(new Date().setDate(new Date().getDate() + 1))
            this.datePickerProps.startDate = new Date(new Date().setDate(new Date().getDate() + 1))
            this.datePickerProps.highlight = new Date(new Date().setDate(new Date().getDate() + 1))
            this.datePickerProps.startTime = {hours: 13, minutes: 0}

        }
    },
    mounted() {
        console.log(this.lang);
        this.setButtonText();

    }

}
</script>

<template>
    <div class="col-lg-8 mx-auto wow slideInUp" data-wow-delay="0.3s">
        <div class="alert alert-success" v-if="successReservation">
            {{ translate['uspesnoZakazivanje'] }}
        </div>
        <form method="post" action="/contact">
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" name="name" id="name" v-model="data.name"
                           class="form-control border-0 bg-light px-4"
                           :placeholder="translate['vase ime']"
                           style="height: 55px;">

                    <div v-if="errors !== ''"><span class="text-danger"
                                                    v-if="errors.name && errors.name.length > 0">
                                           {{ errors.name[0] }}
                                        </span></div>
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" v-model="data.email"
                           class="form-control border-0 bg-light px-4 "
                           :placeholder="translate['vas email']"
                           style="height: 55px;">
                    <div v-if="errors !== ''"><span class="text-danger"
                                                    v-if="errors.email && errors.email.length > 0">
                                           {{ errors.email[0] }}
                                        </span></div>
                </div>
                <div class="col-md-6">
                    <input type="text" name="number" id="number" v-model="data.number"
                           class="form-control border-0 bg-light px-4 "
                           :placeholder="translate['broj telefona']"
                           style="height: 55px;">
                    <div v-if="errors !== ''"><span class="text-danger"
                                                    v-if="errors.number && errors.number.length > 0">
                                           {{ errors.number[0] }}
                                        </span></div>
                </div>
                <div class="col-md-6 datepicker">

                    <VueDatePicker style="height: 55px;" no-today model-type="yyyy-MM-dd HH:mm:ss"
                                   :is-24="true"
                                   :minutes-grid-increment="15"
                                   :min-time="{ hours: 13, minutes: 0 }"
                                   :max-time="{ hours: 17, minutes: 5 }"
                                   v-model="data.date_time" id="datetime"
                                   :ui="{ input: 'form-control border-0 bg-light px-4', menu: 'shadow-none' }"
                                   v-bind="datePickerProps" :placeholder="translate['datum i vreme']"></VueDatePicker>

                    <div v-if="errors !== ''"><span class="text-danger"
                                                    v-if="errors.date_time && errors.date_time.length > 0">
                                           {{ errors.date_time[0] }}
                                        </span></div>
                </div>
                <div class="col-12">
                                <textarea :class="'form-control border-0 bg-light px-4 py-3' " rows="4"
                                          :placeholder="translate['vasa poruka']" v-model="data.message" id="message"
                                          name="message"></textarea>
                    <div v-if="errors !== ''"><span class="text-danger"
                                                    v-if="errors.message && errors.message.length > 0">
                                           {{ errors.message[0] }}
                                        </span></div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="button" @click="reservation()">
                        {{ translate['zakazi termin'] }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
