<script>
import axios from "axios";
export default {
   name: "BlogsListFilterAndSort",
   props: ["blog_categories", "locale" , "translate"],

   data() {
       return {
           searchText : "",
           lastBlogs: []
       }
   },
    methods: {
        searchBlogs(){
            const path = window.location.pathname;
            let query = new URLSearchParams(window.location.search);
            query.set("search", this.searchText);
            window.location.href = `/blog?${query.toString()}`;
        },
        getLastBlogsPost(){
            axios.get(`/blog/recent/posts`).then(({data}) => {
                console.log(data.data);
                this.lastBlogs = data.data;
            }).catch((error) => {
                window.loader(false)
                alert("Došlo je do greške, kontaktirajte administratora")
            })

        }
    },

    mounted() {
       this.getLastBlogsPost();
    }
}
</script>

<template>
    <div class="col-lg-4">
        <!-- Search Form Start -->
        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="input-group">
                <input type="text" class="form-control p-3" v-model="searchText" :placeholder="translate.pretraga">
                <button class="btn btn-primary px-4" @click="searchBlogs()"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <!-- Search Form End -->

        <!-- Category Start -->
        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0">{{ translate.kategorije }}</h3>
            </div>
            <div class="link-animated categories-a d-flex flex-column justify-content-start">
                <a  class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" :href="`/blog`" title="Pogledaj sve kategorije"><i
                    class="bi bi-arrow-right me-2"></i> <span v-if="locale == 'sr'">Sve kategorije</span> <span v-else>All categories</span></a>
                <a  v-for="(category, index) in blog_categories" :key="index"  :title="'Pogledajte kategoriju: ' +  category.name" class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" :href="`/blog/${category.slug}`"><i
                    class="bi bi-arrow-right me-2"></i>{{ category.name }}</a>

            </div>
        </div>
        <!-- Category End -->
        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0">{{translate.poslednji}}</h3>
            </div>
            <div class="d-flex w-100 rounded  lastBlogs-div overflow-hidden mb-3" v-if="lastBlogs.length > 0" v-for="(blog, index) in lastBlogs" :key="blog">
                <img class="img-fluid lastBlogs" :src="blog.image.path"   :alt="'Nedavni blog - ' + blog.title ">
                <a :href="'/blog/objava/' + blog.slug" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0 w-100"  :title="'Nedavni blog - ' + blog.title ">
                    {{blog.title}}
                </a>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
