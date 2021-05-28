
require('./bootstrap');

window.Vue = require('vue');

import './assets/scss/scss.scss'
import router from './router/router'
import store from "./vuex/store";
import VueAgile from 'vue-agile'
import VueBreadcrumbs from './components/Breadcrumbs/breadcrumbs';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

const app = new Vue({
    el: '#app',
    router,
    store,
    agile: VueAgile,
    breadcrumb: VueBreadcrumbs,
});
