// resources/js/app.js
import { createApp } from 'vue';
import ExampleComponent from "./components/ExampleComponent.vue";
import TarifaTable from "@/components/pages/TarifaTable.vue";
import ConsultationForm from "@/components/pages/ConsultationForm.vue";
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import BookedOnlineConsultation from "@/components/admin/BookedOnlineConsultation.vue";
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import { showErrorSwal, showErrorSwalWithText, showSuccessSwal } from './swalHelper';
import ContactOffice from "@/components/pages/ContactOffice.vue";
import BlogCategory from "@/components/admin/BlogCategory.vue";
import CreateBlog from "@/components/admin/CreateBlog.vue";
import AdminBlogList from "@/components/admin/AdminBlogList.vue";
import BlogList from "@/components/pages/BlogList.vue";
import BlogPost from "@/components/pages/BlogPost.vue";
import NewBlogList from "@/components/pages/NewBlogList.vue";
import MaternityCalculator from "@/components/pages/MaternityCalculator.vue";

// ⚠️ Nemoj ovde uvoziti bootstrap ili jQuery – oni idu iz CDN-a u Blade-u.

// Helper: detektuj da li DOM sadrži neku od tvojih Vue komponenti.
// Ako nema – NE montiramo Vue i time ne diramo jQuery plugine (counter, carousel…)
const VUE_TAGS = [
    'example-component',
    'tariff-table',
    'consultation-form',
    'booked-online-consultation',
    'contact-office',
    'blog-category',
    'create-blog',
    'admin-blog-list',
    'blog-list',
    'new-blog-list',
    'maternity-calculator',
    'blog-post'
];

// Nađi makar jedan od ovih tagova u DOM-u
const needVue = VUE_TAGS.some((sel) => document.querySelector(sel));

// Ako želiš još preciznije, opcionalno montiranje samo na #app[data-vue-root]:
const appRoot =
    document.querySelector('#app[data-vue-root]') || // prioritet ako postoji
    document.getElementById('app');                  // fallback (postojeća struktura)

if (needVue && appRoot) {
    const app = createApp({});

    // Globalni registri
    app.component('example-component', ExampleComponent);
    app.component('tariff-table', TarifaTable);
    app.component('consultation-form', ConsultationForm);
    app.component('booked-online-consultation', BookedOnlineConsultation);
    app.component('contact-office', ContactOffice);
    app.component('blog-category', BlogCategory);
    app.component('create-blog', CreateBlog);
    app.component('admin-blog-list', AdminBlogList);
    app.component('blog-list', BlogList);
    app.component('new-blog-list', NewBlogList);
    app.component('maternity-calculator', MaternityCalculator);
    app.component('blog-post', BlogPost);
    app.component('VueDatePicker', VueDatePicker);

    // SweetAlert
    const options = {
        confirmButtonColor: '#004591',
        cancelButtonColor: '#004591',
    };
    app.use(VueSweetalert2, options);

    // Global helpers
    app.config.globalProperties.$showErrorSwal = showErrorSwal;
    app.config.globalProperties.$showErrorSwalWithText = showErrorSwalWithText;
    app.config.globalProperties.$showSuccessSwal = showSuccessSwal;
    app.config.globalProperties.$user = window.user;

    // Loader helper (koristi jQuery iz CDN-a)
    window.loader = function (bool) {
        if (bool) {
            $('#spinner').addClass('show');
        } else {
            $('#spinner').removeClass('show');
        }
    };

    // Konačno: mount
    app.mount(appRoot);
} else {
    // Nema Vue komponenti na stranici → ne diramo DOM, sve jQuery stvari rade normalno
    window.loader = function (bool) {
        if (bool) {
            $('#spinner').addClass('show');
        } else {
            $('#spinner').removeClass('show');
        }
    };
}
