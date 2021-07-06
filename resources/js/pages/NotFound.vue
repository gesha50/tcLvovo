<template>
<div>
    <top-image
        :headerText="'Страница не найдена'"
    ></top-image>
    <div class="container">
        <div class="error">
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
                <a
                    class="btn btn-dark"
                    @click="$router.go(-1)"
                >
                    Назад
                </a>
                <router-link
                    class="btn btn-warning"
                    to="/"
                >
                    на Главную
                </router-link>
            </div>
        </div>
    </div>
    <request-component></request-component>
</div>
</template>

<script>
import Header from "../components/Header";
import TopImage from "../components/TopImage";
import RequestComponent from "../components/RequestComponent";

export default {
    beforeCreate() { document.title = '404' },
    beforeUpdate() { document.title = '404' },
    name: "NotFound",
    components: {
        Header,
        TopImage,
        RequestComponent,
    },
}
</script>

<style lang="scss">
.error {
    background: white;
    text-align: center;
    padding-bottom: 40px;
    &__img {

    }
    &__header {
        @include anyText($yellow_2, $MontserratSB, 72px, 600, normal);
        text-align: center;
        & h2 {
            @include anyText($textBlack, "Montserrat - Ultra Light", 72px, 200, normal);
            display: inline-block;
        }
    }
    &__text {
        @include miniHeader($textBlack, "Montserrat - Ultra Light");
        text-align: center;
    }
    &__blockForButtons {
        margin-top: 40px;
    }
}
</style>
