<script>
export default {
    name: "NewBlogList",
    props:["blogs" , 'translate' , 'locale'],


    methods : {
        openBlogPost(slug){
            window.location.href = `/blog/objava/${slug}`
        },

    },
}
</script>

<template>
    <div class="row g-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s"
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
</template>

<style scoped>

</style>
