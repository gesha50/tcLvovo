
import Router from 'vue-router'
import Vue from 'vue'

Vue.use(Router)

import AboutComponent from "../pages/company/AboutComponent";
import HistoryComponent from "../pages/company/HistoryComponent";
import IndexComponent from "../pages/Index/IndexComponent";
import ContentComponent from "../pages/company/ContentComponent";
import AppContainer from "../AppContainer";

const routes = [
    {
        path: "/",
        component: AppContainer,
        meta: {
            breadcrumb: 'Главная'
        },
        children: [
            {
                path: "",
                component: IndexComponent,
            },
            {
                path: "company",
                component: ContentComponent,
                meta: {
                    breadcrumb:'Компания'
                },
                children: [
                    {
                        path: "aboutus",
                        component: AboutComponent,
                        meta: {
                            breadcrumb: 'О нас'
                        }
                    },
                    {
                        path: "history",
                        component: HistoryComponent,
                        meta: {
                            breadcrumb: 'История'
                        }
                    },
                    {
                        path: "",
                        component: AboutComponent,
                        meta: {
                            breadcrumb: 'О нас'
                        }
                    },
                ]
            },
        ]
    },
]

export default new Router({
    mode: "history",
    routes    // тоже самое что и routes: routes
})

