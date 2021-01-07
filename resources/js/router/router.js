
import Router from 'vue-router'
import Vue from 'vue'

Vue.use(Router)

import ExampleComponent from "../components/ExampleComponent";
import Test from "../components/Test";
import Test2 from "../components/Test2";

const routes = [
    {
        path: "/blog/index",
        component: Test
    },
    {
        path: "/blog/testing",
        component: Test2
    }
]

export default new Router({
    mode: "history",
    routes    // тоже самое что и routes: routes
})

