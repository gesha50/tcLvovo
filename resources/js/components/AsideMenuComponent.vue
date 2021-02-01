<template>
    <div class="d-flex">
<div class="aside">
    <div class="aside__logo">Торговый комплекс</div>
    <div class="aside__text"><router-link class="aside__link" to="/company/aboutus">О нас</router-link></div>
    <div class="aside__text"><router-link class="aside__link" to="/company/history">История</router-link></div>
    <div class="aside__text"><router-link class="aside__link" to="/company/brands">Бренды</router-link></div>
    <div class="aside__text"><router-link class="aside__link" to="/company/partners">Партнеры</router-link></div>
    <div class="aside__text"><router-link class="aside__link" to="/company/ourteam">Наша команда</router-link></div>
</div>
    <div class="verticaleLine"></div>
    </div>
</template>

<script>
export default {
    name: "AsideMenuComponent"
}
</script>

<style lang="scss">
.aside {
    padding: 40px;
    text-align: left;
    &__logo {
        @include miniHeader ($textBlack, Montserrat);
    }
    &__text {
        margin: 15px 0;
    }
    &__link {
        @include miniBodyText($grayText, $MontserratSB);
       &:hover {
           text-decoration: none;
           color: $yellow;
       }
    }
}

.verticaleLine {
    margin: 35px 15px;
    width: 2px;
    background: $yellow;
}
</style>
