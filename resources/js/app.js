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

// 1) Kreiraj app
const app = createApp({});

// 2) Globalni registri
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

// 3) SweetAlert
const options = { confirmButtonColor: '#004591', cancelButtonColor: '#004591' };
app.use(VueSweetalert2, options);

// 4) Global helpers
app.config.globalProperties.$showErrorSwal = showErrorSwal;
app.config.globalProperties.$showErrorSwalWithText = showErrorSwalWithText;
app.config.globalProperties.$showSuccessSwal = showSuccessSwal;
app.config.globalProperties.$user = window.user;

// 5) Loader (radi i bez jQuery-a)
window.loader = function (on) {
    const el = document.getElementById('spinner');
    if (!el) return;
    if (typeof window.$ === 'function') {
        on ? window.$(el).addClass('show') : window.$(el).removeClass('show');
    } else {
        el.classList.toggle('show', !!on);
    }
};

// 6) Mount na #app
const root = document.getElementById('app');
if (root) {
    app.mount(root);

    // 7) POSLE mount-a: re-init UI plugina (definisano u public/js/main.js)
    if (typeof window.templateInit === 'function') {
        window.templateInit();
        // mali „kick“ za slučaj lazy slika/fontova/tabova
        setTimeout(() => window.templateInit && window.templateInit(), 50);
        window.addEventListener('load', () => window.templateInit && window.templateInit());
    }
} else {
    console.warn('[Vue] #app nije pronađen.');
}
