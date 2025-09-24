<script>
import BlogListFilterAndSort from "./BlogListFilterAndSort.vue"
export default {
    name: "BlogsList",
    props:["blog_categories" , "selected_category" , "all_blogs" , 'translate' , 'locale'],
    components : {
        "blogs-list-and-sort" : BlogListFilterAndSort
    },
    data(){
        return{
            blogs: [],
            pagination: [],

        }
    },
    computed : {
        checkHomePage(){
            if (window.location.pathname !== '/') {
                return true
            }
            return false
        }
    },
    methods : {
        separateData() {
            this.blogs = this.all_blogs.blogs
            this.pagination = this.all_blogs.meta
        },
        openBlogPost(slug){
            window.location.href = `/blog/objava/${slug}`
        },

        getBlogs(page) {
            const path = window.location.pathname;
            let query = new URLSearchParams(window.location.search);
            query.set("page", page);
            window.location.href = `${path}?${query.toString()}`;
        },

    },
    mounted() {
        this.separateData()
    }
}
</script>
<style scoped>

</style>
<template>
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s"
                             v-for="(blog, index) in blogs" :key="index" @click="openBlogPost(blog.slug)">
                            <div class="blog-item bg-light rounded overflow-hidden d-flex flex-column h-100 w-100">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="card-img img-fluid" :src="blog.image.path" :alt="blog.image.alt" :title="blog.image.title">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" :title="'Blog kategorija: ' + blog.category" href="javascript:void(0)">
                                        {{ blog.category }}
                                    </a>
                                </div>

                                <!-- Sadržaj kao flex kolona koja se rasteže -->
                                <div class="p-4 d-flex flex-column flex-grow-1">
                                    <div class="d-flex mb-3">
                                        <small class="me-3">
                                            <i class="far fa-user text-primary me-2"></i>Vladan Gotovac
                                        </small>
                                        <small>
                                            <i class="far fa-calendar-alt text-primary me-2"></i>{{ blog.date }}
                                        </small>
                                    </div>

                                    <h4 class="mb-3">{{ blog.title }}</h4>
                                    <div class="card-text pb-5" v-html="blog.partContent"></div>

                                    <!-- Gura link na dno unutar kartice -->
                                    <a class="text-uppercase mt-auto align-self-start" :title="'Pročitaj više: ' + blog.title" :href="'/blog/objava/'+blog.slug" @click.stop>
                                        {{ translate['procitaj vise'] }} <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <blogs-list-and-sort :translate="translate" :locale="locale" :blog_categories="blog_categories"></blogs-list-and-sort>

                <br>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 px-1">
                            <br><br>
                            <div class="paginate-center">
                                <div
                                    v-if="blogs.length > 0 && pagination && !(pagination.current_page === 1 && pagination.current_page === pagination.last_page)"
                                    class="paginationsty">
                                    <button class="btn btn-primary me-2"
                                            @click="getBlogs(pagination.current_page - 1)"
                                        :disabled="pagination.current_page === 1">
                                        {{ translate.prethodna }}
                                    </button>
                                    <span class="fw-bold"> {{ pagination.current_page }} od {{ pagination.last_page }}</span>
                                    <button class="btn btn-primary ms-2"
                                        @click="getBlogs(pagination.current_page + 1)"
                                        :disabled="pagination.current_page === pagination.last_page">
                                        {{ translate.sledeca }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
</template>

<style scoped>

</style>
