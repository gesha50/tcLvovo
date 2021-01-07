
import vueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(vueRouter)

import ExampleComponent from "./components/ExampleComponent";
import Test from "./components/Test";
import Test2 from "./components/Test2";

const routes = [
    {
        path: "/blog/1",
        component: Test
    },
    {
        path: "/blog/2",
        component: Test2
    }
]

export default new vueRouter({
    mode: "history",
    routes    // тоже самое что и routes: routes
})

