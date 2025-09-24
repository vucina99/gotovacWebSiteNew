<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
    name: "AdminBlogList",
    data() {
        return {
            blogs: [],
            loader: false,
            pagination: [],
            title: ""
        }
    },
    methods: {
        getBlogs(page = 0) {
             window.loader(true);
            axios.get(`/admin/blog/getAdminBlogs?page=${page}&title=${this.title}`).then(({data}) => {
                this.blogs = data.data.blogs;
                this.pagination = data.data.meta;
                 window.loader(false);

            }).catch((error) => {
                 window.loader(false);
                this.$showErrorSwal();
            })

        },
        changeActiveStatus(id, index) {
            Swal.fire({
                title: '',
                text: "Da li želite da izmenite aktivnost objave?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Potvrdi',
                cancelButtonText: 'Otkaži',
            }).then((result) => {
                if (result.isConfirmed) {
                     window.loader(true);
                    axios.patch(`/admin/blog/changeActiveStatus/${id}`).then(({data}) => {
                        this.$showSuccessSwal("Uspešna izmena", "Uspešno je izmenjena aktivnost blog objave");
                        this.blogs[index] = data.data.blog
                         window.loader(false);
                    }).catch((error) => {
                         window.loader(false);
                        this.$showErrorSwal();
                    })
                }
            });
        },

        deleteBlog(id) {
            Swal.fire({
                title: '',
                text: "Da li želite da izbrišete blog objavu?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Potvrdi',
                cancelButtonText: 'Otkaži',
            }).then((result) => {
                if (result.isConfirmed) {
                     window.loader(true);
                    axios.delete(`/admin/blog/deleteBlog/${id}`).then(({data}) => {
                        this.$showSuccessSwal("Uspešno birsanje", "Uspešno je obrisana blog objava");
                        this.getBlogs();
                    }).catch((error) => {
                         window.loader(false);
                        this.$showErrorSwal();
                    })
                }
            });
        }
    },

    mounted() {
        this.getBlogs();
    }

}
</script>

<template>
    <div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-10  col-sm-12 pt-3 mx-auto">

                        <div class="w-100 d-flex justify-content-center">
                            <div class="blue-border"></div>
                        </div>


                    <div>
                        <div class="row">
                            <div class="col-lg-8 ">
                                <div class="form-group pb-3">
                                    <label for="title">Naslov:</label>
                                    <input type="text" v-model="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-end pb-3">
                                <button class="btn btn-primary  w-100" @click="getBlogs()">  Pretraga
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                <tr class="text-nowrap text-center">
                                    <th scope="col">Naslov</th>
                                    <th scope="col">Kategorija</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Akcija</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-if="blogs.length > 0" v-for="(blog, index) in blogs" :key="index" class="text-nowrap  text-center">
                                    <td><a :href="`/blog/objava/${blog.slug}`" class="text-dark">{{ blog.title }}</a></td>
                                    <td>{{ blog.category.name }}</td>
                                    <td class="pe-auto ps-3" @click="changeActiveStatus(blog.id , index)">
                                        <span v-if="blog.isActive"><i class="fa fa-solid fa-circle text-success"></i></span>
                                        <span v-else><i class=" fa fa-solid fa-circle text-danger"></i></span>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" @click="deleteBlog(blog.id)"><i
                                            class="fa fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr v-else>
                                    <td colspan="4" class="text-center">Nema rezultata za prikaz</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div
                        v-if="blogs.length > 0 && pagination && !(pagination.current_page === 1 && pagination.current_page === pagination.last_page)"
                        class="paginationsty">
                        <button
                            @click="getBlogs(pagination.current_page - 1)"
                            :disabled="pagination.current_page === 1">
                            Prethodna
                        </button>
                        <span>Strana {{ pagination.current_page }} od {{ pagination.last_page }}</span>
                        <button
                            @click="getBlogs(pagination.current_page + 1)"
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
