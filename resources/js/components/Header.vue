<template>
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm navbar_edit">
            <img width="45px" src="/storage/без_фона.png" alt="">
            <router-link class="navbar-brand" to="/">
                ТК Львово
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><router-link class="nav-link" to="/">Главная</router-link></li>
                    <li><a class="nav-link" href="/dashboard">Админка</a></li>
                    <li><router-link class="nav-link" to="/company">О нас</router-link></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <div class="search navbar-nav">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
