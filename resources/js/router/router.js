
import Router from 'vue-router'
import Vue from 'vue'

Vue.use(Router)

import AboutComponent from "../pages/company/AboutComponent";
import HistoryComponent from "../pages/company/HistoryComponent";

const routes = [
    {
        path: "/company",
        component: AboutComponent
    },
    {
        path: "/company/aboutus",
        component: AboutComponent
    },
    {
        path: "/company/history",
        component: HistoryComponent
    }
]

export default new Router({
    mode: "history",
    routes    // тоже самое что и routes: routes
})

