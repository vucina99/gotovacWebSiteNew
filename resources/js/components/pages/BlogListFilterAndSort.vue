<script>

export default {
   name: "BlogsListFilterAndSort",
   props: ["blog_categories", "locale" , "translate"],

   data() {
       return {
           searchText : ""
       }
   },
    methods: {
        searchBlogs(){
            const path = window.location.pathname;
            let query = new URLSearchParams(window.location.search);
            query.set("search", this.searchText);
            window.location.href = `/blog?${query.toString()}`;
        },
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
            <div class="link-animated d-flex flex-column justify-content-start">
                <a  class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" :href="`/blog`"><i
                    class="bi bi-arrow-right me-2"></i> <span v-if="locale == 'sr'">Sve kategorije</span> <span v-else>All categories</span></a>
                <a  v-for="(category, index) in blog_categories" :key="index" class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" :href="`/blog/${category.slug}`"><i
                    class="bi bi-arrow-right me-2"></i>{{ category.name }}</a>

            </div>
        </div>
        <!-- Category End -->

    </div>
</template>

<style scoped>

</style>
