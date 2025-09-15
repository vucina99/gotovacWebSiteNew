<script>
import BlogListFilterAndSort from "./BlogListFilterAndSort.vue"

export default {
    name: "BlogPost",
    props:['translate' , 'locale' , 'post' , 'blog_categories'],
    components : {
        "blogs-list-and-sort" : BlogListFilterAndSort
    },
}
</script>

<template>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <div class="blog-post">
                            <h1 class="vastrener-blue pb-0 fw-bold">{{ post.title }}</h1>
                            <p>
                                <i class="far fa-calendar-alt  text-primary" aria-hidden="true"></i> {{ post.date }}
                                &nbsp;&nbsp;
                                <i class="far fa-user  text-primary"></i> Vladan Gotovac
                            </p>
                        </div>
                        <div class="pb-4 blogPostImg">
                            <img :src="post.image.path" class="img-fluid vastrener-border" alt="">
                        </div>

                        <div v-html="post.content" class="allTextBackground">

                        </div>
                    </div>
                    <!-- Blog Detail End -->


                </div>

                <blogs-list-and-sort :translate="translate" :locale="locale" :blog_categories="blog_categories"></blogs-list-and-sort>

                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
</template>

<style scoped>

</style>
