<template>
<div>
    <top-image
        :headerText="'Страница не найдена'"
    ></top-image>
    <div class="container">
        <div class="error" style="background: white">
            <img class="error__img"
                 src="../assets/img/icon-error.png"
                 alt=""
            >
            <div class="error__header">404 <h2>Страница не найдена</h2></div>
            <p class="error__text">
                Страница, которую вы ищете не существует. <br>
                Пожалуйста вернитесь на шаг назад или перейдите на главную страницу.
            </p>
            <div class="error__blockForButtons">
                <a @click="$router.go(-1)">Назад</a>
                <router-link to="/">Главная</router-link>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";
import TopImage from "../components/TopImage";

export default {
    name: "NotFound",
    components: {
        Header,
        Footer,
        TopImage,
    },
}
</script>

<style scoped>

</style>
