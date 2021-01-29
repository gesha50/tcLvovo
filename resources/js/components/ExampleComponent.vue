<template>
    <div class="container">
        <div class="companyContent">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <router-link
                        v-for="link in links"
                        :key="link.id"
                        :to="link.href">{{ link.title }}
                    </router-link>

                    <router-view />
                </div>
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
                        id:0,
                        title: "о нас",
                        href: "/company/about"
                    },
                    {
                        id:1,
                        title: "История",
                        href: "/company/history"
                    }
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.companyContent {
    background: #fff;
    margin-top: 575px;
}
</style>
