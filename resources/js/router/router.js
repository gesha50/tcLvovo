
import Router from 'vue-router'
import Vue from 'vue'
import AboutComponent from "../pages/company/AboutComponent";
import HistoryComponent from "../pages/company/HistoryComponent";
import IndexComponent from "../pages/Index/IndexComponent";
import ContentComponent from "../pages/company/ContentComponent";
import AppContainer from "../AppContainer";
import ServiceIndex from "../pages/Service/ServiceIndex";
import GalleryIndex from "../pages/Gallery/GalleryIndex";
import NewsIndex from "../pages/News/NewsIndex";
import ContactIndex from "../pages/Contact/ContactIndex";
import Territory from "../pages/company/Territory";
import Tenant from "../pages/company/Tenant";
import Brands from "../pages/company/Brands";
import PolicyIndex from "../pages/Policy/PolicyIndex";
import NotFound from "../pages/NotFound";
import OneNews from "../pages/News/OneNews/OneNews";

Vue.use(Router)

const routes = [
    {
        path: "/",
        component: AppContainer,
        meta: {
            breadcrumb: 'Главная'
        },
        children: [
            {
                name: "index",
                path: "",
                component: IndexComponent,
            },
            {
                path: "company",
                // name: "company",
                component: ContentComponent,
                meta: {
                    breadcrumb:'Компания'
                },
                children: [
                    {
                        path: "aboutus",
                        name: "aboutus",
                        component: AboutComponent,
                        meta: {
                            breadcrumb: 'О нас'
                        }
                    },
                    {
                        path: "brands",
                        name: "brands",
                        component: Brands,
                        meta: {
                            breadcrumb: 'Бренды'
                        }
                    },
                    {
                        path: "history",
                        name: "history",
                        component: HistoryComponent,
                        meta: {
                            breadcrumb: 'История'
                        }
                    },
                    {
                        path: "",
                        name: "company",
                        component: AboutComponent,
                        meta: {
                            breadcrumb: 'О нас'
                        }
                    },
                    {
                        path: "territory",
                        name: "territory",
                        component: Territory,
                        meta: {
                            breadcrumb: 'Территория'
                        }
                    },
                    {
                        path: "tenant",
                        name: "tenant",
                        component: Tenant,
                        meta: {
                            breadcrumb: 'Арендаторам'
                        }
                    },
                ]
            },
            {
                path: "services",
                name: "services",
                component: ServiceIndex,
                meta: {
                    breadcrumb: 'Услуги'
                }
            },
            {
                path: "gallery",
                name: "gallery",
                component: GalleryIndex,
                meta: {
                    breadcrumb: 'Галерея'
                }
            },
            {
                path: "news",
                name: "news",
                component: NewsIndex,
                meta: {
                    breadcrumb: 'Новости'
                },
                children: [
                    {
                        path: ":slug",
                        name: "oneNews",
                        component: OneNews,
                        meta: {
                            breadcrumb: routeParams => routeParams.slug
                        },
                        props: (route) => ({ // функция генерации входных параметров
                            id: route.query.id,
                            slug: route.params.slug,
                        }),
                    },
                ]
            },
            {
                path: "contact",
                name: "contact",
                component: ContactIndex,
                meta: {
                    breadcrumb: 'Контакты'
                }
            },
            {
                name: "policy",
                path: "policy",
                component: PolicyIndex,
                meta: {
                    breadcrumb: 'Политика конфиденциальности'
                }
            },
            {
                path: '/404',
                name: '404',
                component: NotFound,
                meta: {
                    breadcrumb: '404'
                },
            },
        ]
    },
    {
        path: '*',
        redirect: '/404'
    }
]

export default new Router({
    mode: "history",
    routes,    // тоже самое что и routes: routes
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }
})

