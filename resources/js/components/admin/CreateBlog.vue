<script>
import Editor from "@tinymce/tinymce-vue";
import {API_KEY} from '@/config';
import axios from "axios";

export default {
    name: "CreateBlog",
    props: ['categories'],
    components: {
        'editor': Editor
    },
    data() {
        return {
            api: API_KEY,
            validationErros: [],
            blog: {
                title: "",
                title_en: "",
                alt: "",
                imgTitle: "",
                content: "",
                content_en: "",
                image: "",
                metaDescription: "",
                metaKeywords: "",
                metaTitle: "",
                category: "",
                partContent: "",
                partContent_en: ""
            }
        }
    },
    computed: {
        countPartContent() {
            return this.blog.partContent.length
        },
        countPartContent_en() {
            return this.blog.partContent_en.length
        }
    },
    methods: {
        onInputFocus() {
            $(".tox-tinymce").css("box-shadow", "0 0 0 0.24rem rgba(0, 123, 255, 0.25)")
        },
        onInputBlur() {
            $(".tox-tinymce").css("box-shadow", "0 0 0 0rem rgba(0, 123, 255, 0.25)")
        },
        createBlog() {
            window.loader(true)
            let formData = new FormData();
            formData.append("image", this.blog.image);
            formData.append("blog", JSON.stringify(this.blog));

            axios.post("/admin/blog/kreiraj-novu-objavu", formData, {
                headers: {
                    "Content-Type": 'multipart/form-data'
                }
            }).then(({data}) => {
                this.resetData();
                window.loader(false)
                this.$showSuccessSwal("Uspešno kreiranje", "Uspešno ste kreirali blog objavu");
                this.validationErros = []
            }).catch((error) => {
                console.error(error);
                if (error.response.status == "422") {
                    this.validationErros = error.response.data.errors;
                    window.loader(false)
                    return;
                }
                this.validationErros = []
                window.loader(false)
            })
        },
        setImage(event) {
            if (event.target) {
                this.blog.image = event.target.files[0];
            }
        },

        resetData(){
            this.blog = {
                title: "",
                    title_en: "",
                    alt: "",
                    imgTitle: "",
                    content: "",
                    content_en: "",
                    image: "",
                    metaDescription: "",
                    metaKeywords: "",
                    metaTitle: "",
                    category: "",
                    partContent: "",
                    partContent_en: ""
            }
        }
    }
}
</script>

<template>
    <div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-sm-12 pt-3 mx-auto">

                    <form action="">

                        <div class="">
                            <div v-if="Object.keys(validationErros).length > 0" class="alert alert-danger" role="alert">
                                <ul>
                                    <li v-for="(error, index) in validationErros">
                                        {{ error[0] }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group pb-3">
                            <label for="category">Kategorija</label>
                            <select id="category" name="category" v-model="blog.category" class="form-control bg-white">
                                <option value="" disabled selected>Izaberi kategoriju</option>
                                <option v-for="(category, key) in categories" :key="key" :value="category.id">
                                    {{ category.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label for="title">Naslov (SR)</label>
                            <input type="text" v-model="blog.title" class="form-control" id="title" name="title"
                                   placeholder="Naslov (SR)">
                        </div>
                        <div class="form-group pb-3">
                            <label for="title_en">Naslov (EN)</label>
                            <input type="text" v-model="blog.title_en" class="form-control" id="title_en"
                                   name="title_en"
                                   placeholder="Naslov (EN)">
                        </div>
                        <div class="form-group pb-3">
                            <label for="imgTitle">Slika title</label>
                            <input type="text" v-model="blog.imgTitle" class="form-control" id="imgTitle"
                                   name="imgTitle" placeholder="Title tag slike">
                        </div>
                        <div class="form-group pb-3">
                            <label for="imgAlt">Slika alt</label>
                            <input type="text" v-model="blog.alt" class="form-control" id="imgAlt" name="imgAlt"
                                   placeholder="Alt tag slike">
                        </div>
                        <div class="form-group pb-3">
                            <label for="metaTitle">Meta title</label>
                            <input type="text" v-model="blog.metaTitle" class="form-control" id="metaTitle"
                                   name="metaTitle"
                                   placeholder="Meta title za SEO izmedju 50 i 60 karaktera">
                        </div>
                        <div class="form-group pb-3">
                            <label for="metaDescription">Meta description</label>
                            <input type="text" v-model="blog.metaDescription" class="form-control" id="metaDescription"
                                   name="metaDescription"
                                   placeholder="Meta description za SEO izmedju 150 i 160 karatera">
                        </div>
                        <div class="form-group pb-3">
                            <label for="metaKeywords">Meta keywords</label>
                            <input type="text" v-model="blog.metaKeywords" class="form-control" id="metaKeywords"
                                   name="metaKeywords"
                                   placeholder="Meta keywords za SEO izmedju 5 i 10 kljucnih reci">
                        </div>
                        <div class="form-group pb-3">
                            <label for="image">Početna slika</label>
                            <input type="file" @change="setImage" class="form-control bg-white" id="image" name="image">
                        </div>
                        <div class="form-group pb-3">
                            <label for="partContent">Deo sadržaja (za blog card) (SR)</label>

                            <textarea name="partContent" v-model="blog.partContent" class="form-control"
                                      id="partContent" cols="30" rows="10"></textarea>
                            <small class="text-muted">Broj karaktera u polju (max:360) : {{ countPartContent }}</small>
                        </div>

                        <div class="form-group pb-3">
                            <label for="partContent_en">Deo sadržaja (za blog card) (EN) </label>

                            <textarea name="partContent_en" v-model="blog.partContent_en" class="form-control"
                                      id="partContent_en" cols="30" rows="10"></textarea>
                            <small class="text-muted">Broj karaktera u polju (max:360) : {{
                                    countPartContent_en
                                }}</small>
                        </div>
                        <div class="form-group pb-3">

                            <editor
                                :api-key="api"
                                :init="{
                                                            min_height: 570,
                                                            selector: '#textarea_blog',  // change this value according to your HTML
                                                              language: 'hr',
                                                                  content_style: `
                                                              .mce-content-body[data-mce-placeholder]:not(.mce-visualblocks)::before {
                                                                  color: #868e96;
                                                              } `
                                                        }"
                                v-model="blog.content" @focus="onInputFocus" @blur="onInputBlur"
                                id="content_en"
                                placeholder="Ovde upisati sadržaj blog objave na SRPSKOM."
                            />
                        </div>


                        <div class="form-group pb-3">

                            <editor
                                :api-key="api"
                                :init="{
                                                            min_height: 570,
                                                            selector: '#textarea_blog_en',  // change this value according to your HTML
                                                              language: 'hr',
                                                                  content_style: `
                                                              .mce-content-body[data-mce-placeholder]:not(.mce-visualblocks)::before {
                                                                  color: #868e96;
                                                              }
                                                              `
                                                        }"
                                v-model="blog.content_en" @focus="onInputFocus" @blur="onInputBlur"
                                id="content"
                                placeholder="Ovde upisati sadržaj blog objave na ENGLESKOM."
                            />
                        </div>


                        <div class="py-5">
                            <button type="button" @click="createBlog()"
                                    class="btn btn-primary vastrener-bg-blue text-white w-100"> KREIRAJ OBJAVU
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</template>

<style scoped>

</style>
