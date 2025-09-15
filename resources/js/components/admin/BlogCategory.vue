<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
    name: "BlogCategory",
    data() {
        return {
            successAlert : false,
            pagination: [],
            page: 0,
            categories: [],
            titleNew: "",
            titleNew_en : ""


        }
    },
    methods: {
        getCategories(page = 0) {
            this.page = page;
            window.loader(true)
            axios.get(`/admin/get/blog-category?page=${page}`).then(({data}) => {
                console.log(data);
                this.categories = data.data.categories.data;
                this.pagination = data.data.meta;
                window.loader(false)
                console.log(data);
            }).catch((error) => {
                window.loader(false)
                alert("Došlo je do greške, kontaktirajte administratora")
            })

        },
        createCategory(){
            if(this.titleNew.trim() === "" || this.titleNew_en.trim() === ""){
                return;
            }

            window.loader(true)
            this.successAlert = false;
            axios.post(`/admin/create/blog-category`, { 'titleNew' : this.titleNew, 'titleNewEn' : this.titleNew_en }).then(({data}) => {
                this.successAlert = true;
                this.titleNew = ""
                this.titleNew_en = ""
               this.getCategories();
            }).catch((error) => {
                if (error.response && error.response.status == "409") {

                    this.$showErrorSwalWithText("Već postoji kategorija sa ovim nazivom");
                }else{
                    this.$showErrorSwal();
                }
                this.successAlert = false;
                window.loader(false)
            })
        },
        deleteCategory(id) {
            Swal.fire({
                title: '',
                text: "Da li želite da izbrišete kategoriju?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Potvrdi',
                cancelButtonText: 'Otkaži',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.loader(true)
                    axios.delete(`/admin/delete/category/${id}`).then(({data}) => {
                        this.$showSuccessSwal("Uspešno birsanje", "Uspešno ste obrisali kategoriju");
                        this.getCategories(this.page);
                    }).catch((error) => {
                        if (error.response && error.response.status == "409") {
                            this.$showErrorSwalWithText("Ne možete obrisati ovu kategoriju jer je povezana sa blog objavom");
                        }else{
                            this.$showErrorSwal();
                        }
                        window.loader(false)
                    })
                }
            });
        },


    },
    mounted() {
        this.getCategories();
    }
}
</script>

<template>
    <div>

        <div class="container ">
            <div class="row">

                <div class="col-12 mt-5 tableSize">
                    <div class="pb-4">
                        <div class="row">
                            <div class="col-12 pb-2">
                                <div class="alert alert-success mt-2" v-if="successAlert">
                                    Uspešno ste dodali kategoriju
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-4" placeholder="Kategorija (SR)" id="naslov"
                                           name="naslov" v-model="titleNew">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-4" placeholder="Kategorija  (EN)" id="naslov"
                                           name="naslov" v-model="titleNew_en">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-primary w-100" @click="createCategory()">
                                    Dodaj
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                            <tr class="text-nowrap  ">
                                <th scope="col" class="thminwidth-cassic">Naslov SR</th>
                                <th scope="col" class="thminwidth-cassic">Naslov EN</th>
                                <th scope="col" class="thminwidth-cassic">Slug</th>
                                <th scope="col" class="thminwidth-cassic">Obriši</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-if="categories.length > 0" v-for="(category, index) in categories"
                                :key="index"
                               class="text-nowrap">
                                <td>{{ category.name }}</td>
                                <td>{{ category.name_en }}</td>
                                <td>{{ category.slug }}</td>

                                <td class="cursor-pointer ps-3">
                                    <button class="btn btn-danger btn-sm px-3"
                                            @click="deleteCategory(category.id)"><i
                                        class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr v-else>
                                <td colspan="4" class="text-center">Nema rezultata za prikaz</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                    <br> <br>
                    <div
                        v-if="categories.length > 0 && pagination && !(pagination.current_page === 1 && pagination.current_page === pagination.last_page)"
                        class="paginationsty">
                        <button class="btn btn-primary me-2"
                                @click="getCategories(pagination.current_page - 1)"
                                :disabled="pagination.current_page === 1">
                            Prethodna
                        </button>
                        <span class="fw-bold">Strana {{ pagination.current_page }} od {{ pagination.last_page }}</span>
                        <button
                            class="btn btn-primary ms-2"
                            @click="getCategories(pagination.current_page + 1)"
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
