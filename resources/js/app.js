
require('./bootstrap');

window.Vue = require('vue');

import './assets/scss/scss.scss'
import router from './router/router'
import store from "./vuex/store";
import VueAgile from 'vue-agile'
import VueBreadcrumbs from './components/Breadcrumbs/breadcrumbs';

const app = new Vue({
    el: '#app',
    router,
    store,
    agile: VueAgile,
    breadcrumb: VueBreadcrumbs,
});
