<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <router-link
                        v-for="link in links"
                        :to="link.href">{{ link.title }}
                    </router-link>

                    <router-view />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                links: [
                    {
                        title: "Главная",
                        href: "/blog/index"
                    },
                    {
                        title: "Блог",
                        href: "/blog/testing"
                    }
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
