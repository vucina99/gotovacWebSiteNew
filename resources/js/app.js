import { createApp } from 'vue';
import ExampleComponent from "./components/ExampleComponent.vue";
import TarifaTable from "@/components/pages/TarifaTable.vue";



const app = createApp({});
app.component('example-component', ExampleComponent);
app.component('tariff-table', TarifaTable);
app.mount('#app');
