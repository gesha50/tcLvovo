
import Router from 'vue-router'
import Vue from 'vue'

Vue.use(Router)

import AboutComponent from "../pages/company/AboutComponent";
import HistoryComponent from "../pages/company/HistoryComponent";

const routes = [
    {
        path: "/",
        meta: {
            breadcrumb: 'Главная'
        },
        children: [
            {
                path: "/company",
                component: AboutComponent,
                meta: {
                    breadcrumb:'Компания'
                },
                children: [
                    {
                        path: "/company/aboutus",
                        component: AboutComponent,
                        meta: {
                            breadcrumb: 'О нас'
                        }
                    },
                    {
                        path: "/company/history",
                        component: HistoryComponent,
                        meta: {
                            breadcrumb: 'История'
                        }
                    }
                ]
            },
        ]
    },
]

export default new Router({
    mode: "history",
    routes    // тоже самое что и routes: routes
})

