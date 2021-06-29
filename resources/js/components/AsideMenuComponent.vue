<template>
        <div class="aside asideMenu">
            <div class="aside__logo">Торговый комплекс</div>
            <div class="aside__text">
                <router-link
                    class="aside__link"
                    :to="{name: 'aboutus'}"
                >
                    О нас
                </router-link>
            </div>
            <div class="aside__text"><router-link class="aside__link" :to="{name: 'history'}">История</router-link></div>
            <div class="aside__text"><router-link class="aside__link" :to="{name: 'territory'}">Территория</router-link></div>
            <div class="aside__text"><router-link class="aside__link" :to="{name: 'tenant'}">Арендаторам</router-link></div>
            <div class="aside__text"><router-link class="aside__link" :to="{name: 'brands'}">Бренды</router-link></div>
        </div>
</template>

<script>
export default {
    name: "AsideMenuComponent",
}
</script>

<style lang="scss">
.asideMenu {
    @media (min-width: 768px) {
        border-right: 2px solid $yellow;
    }
    @media (max-width: 768px) {
        border-bottom: 2px solid $yellow;
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }
}
.aside {
    padding: 0 40px;
    text-align: left;
    @media (max-width: 768px) {
        border-bottom: 2px solid $yellow;
    }
    &__logo {
        @include miniHeader ($textBlack, Montserrat);
        @media (max-width: 768px) {
            display: none;
        }
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
    &__active {
        color: $yellow;
    }
}
</style>
