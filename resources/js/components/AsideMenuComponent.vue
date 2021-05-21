<template>
    <div class="d-flex">
<div class="aside">
    <div class="aside__logo">Торговый комплекс</div>
    <div class="aside__text"><router-link class="aside__link" :to="{name: 'aboutus'}">О нас</router-link></div>
    <div class="aside__text"><router-link class="aside__link" :to="{name: 'history'}">История</router-link></div>
    <div class="aside__text"><router-link class="aside__link" :to="{name: 'territory'}">Территория</router-link></div>
    <div class="aside__text"><router-link class="aside__link" :to="{name: 'tenant'}">Арендаторам</router-link></div>
    <div class="aside__text"><router-link class="aside__link" :to="{name: 'brands'}">Бренды</router-link></div>
</div>
    <div class="verticalLine"></div>
    </div>
</template>

<script>
export default {
    name: "AsideMenuComponent"
}
</script>

<style lang="scss">
.aside {
    padding: 0 40px;
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

.verticalLine {
    margin: 5px 15px;
    width: 2px;
    background: $yellow;
}
</style>
