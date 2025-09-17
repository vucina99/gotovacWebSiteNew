<script>
export default {
    props: ['translate'],
    name: "MaternityCalculator",
    data() {
        return {
            last12Months: [],
            data: {
                month_1: "",
                month_2: "",
                month_3: "",
                month_4: "",
                month_5: "",
                month_6: "",
                month_7: "",
                month_8: "",
                month_9: "",
                month_10: "",
                month_11: "",
                month_12: "",
            },
            sum: 0
        }
    },
    watch: {
        'data.month_1'() {
            this.sum = 0
        },
        'data.month_2'() {
            this.sum = 0
        },
        'data.month_3'() {
            this.sum = 0
        },
        'data.month_4'() {
            this.sum = 0
        },
        'data.month_5'() {
            this.sum = 0
        },
        'data.month_6'() {
            this.sum = 0
        },
        'data.month_7'() {
            this.sum = 0
        },
        'data.month_8'() {
            this.sum = 0
        },
        'data.month_9'() {
            this.sum = 0
        },
        'data.month_10'() {
            this.sum = 0
        },
        'data.month_11'() {
            this.sum = 0
        },
        'data.month_12'() {
            this.sum = 0
        },
    },
    created() {
        this.generateLast12Months();
    },
    methods: {
        calculate() {
            let sumSalary = 0;
            let countMonthSalary = 0;

            Object.entries(this.data).forEach(([key, value]) => {
                if (value !== null && typeof value === 'number' && value !== false && value > 0) {
                    sumSalary += value
                    countMonthSalary += 1
                }
            });
            if (countMonthSalary > 0) {
                this.sum = sumSalary / countMonthSalary
            }
            if (countMonthSalary < 3 || this.sum < 62008) {
                this.sum = 62008
            }
            if (this.sum > 321225) {
                this.sum = 321225
            }


        },
        generateLast12Months() {
            const months = [
                this.translate["Januar"], this.translate["Februar"], this.translate["Mart"], this.translate["April"], this.translate["Maj"], this.translate["Jun"],
                this.translate["Jul"], this.translate["Avgust"], this.translate["Septembar"], this.translate["Oktobar"], this.translate["Novembar"], this.translate["Decembar"]
            ];

            const today = new Date();
            let result = [];

            for (let i = 0; i < 12; i++) {
                let d = new Date(today.getFullYear(), today.getMonth() - i, 1);
                result.push(`${months[d.getMonth()]} ${d.getFullYear()}`);
            }

            this.last12Months = result;
        }
    }
}
</script>

<template>
    <div class="col-lg-8 col-md-10 m-auto">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    <strong>{{ translate['uputstvo'] }}: </strong> {{ translate['uputstvo text'] }}
                </div>
            </div>
            <div
                v-for="(month, index) in last12Months"
                :key="index"
                class="col-lg-6 col-md-12 mb-3"
            >
                <div class="form-group">
                    <input
                        type="number"
                        class="form-control border-0 bg-light px-4"
                        style="height: 55px;"
                        v-model="data['month_'+(index+1)]"
                        :placeholder="month"
                        min="0"
                    >
                </div>
            </div>
            <div class="col-12">
                <div class="alert alert-success" v-if="sum !== null && sum > 0 && sum !== ''" role="alert">
                    {{ translate['iznos'] }} <strong> ~   {{ Number(sum).toFixed(2) }} din </strong> <br><br>
                   <small> <i class="fa fa-info-circle"></i>  {{ translate['preciznije'] }}</small>
                </div>
                <button type="button" class="btn btn-primary  w-100" @click="calculate()" style="height: 55px;">
                  {{ translate['izracunaj naknadu'] }}
                </button>
            </div>

        </div>
    </div>
</template>

<style scoped>
</style>
