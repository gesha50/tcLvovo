<template>
<div class="">
    <Header></Header>
    <main>
        <router-view></router-view>
    </main>
    <Footer></Footer>
</div>
</template>

<script>
import Header from "./components/Header";
import Footer from "./components/Footer";

export default {
    name: "AppContainer",
    components: {
        Header,
        Footer
    },
}
</script>

<style scoped>

</style>
