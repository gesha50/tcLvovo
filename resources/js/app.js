/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('breadcrumb-component', require('./components/Breadcrumbs/BreadcrumbComponent.vue').default);
Vue.component('content-component', require('./pages/company/ContentComponent.vue').default);
Vue.component('carousel', require('./components/carousels/carousel.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import './assets/scss/scss.scss'
import router from './router/router'
import store from "./vuex/store";

// для слайдера
import VueAgile from 'vue-agile'

import VueBreadcrumbs from './components/Breadcrumbs/breadcrumbs';

const app = new Vue({
    el: '#app',
    router,
    store,
    agile: VueAgile,
    breadcrumb: VueBreadcrumbs,
});
