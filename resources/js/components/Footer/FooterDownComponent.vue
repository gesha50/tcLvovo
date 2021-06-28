<template>
    <div class="footerDown d-flex justify-content-around">
        <div class="footerDown__date"><p>{{ year }}</p>  {{ company_name }}</div>
        <div class="footerDown__privacy"><router-link :to="{name: 'policy'}">Политика конфиденциальности</router-link></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            year: (new Date()).getFullYear(),
        }
    },
    name: "FooterDownComponent",
    props: {
      company_name: String,
    },
}
</script>

<style lang="scss">
.footerDown {
    //margin: 0 -15px;
    padding: 25px 0;
    background-color: $black_3;
    &__date {
        @include miniBodyText($gray_3, Montserrat);
        font-size: 14px;
    }
    &__date p {
        display: inline;
        @include miniBodyText($yellow, Montserrat);
        font-size: 14px;
        padding-right: 5px;
    }
    &__privacy a {
        @include miniBodyText($gray_3, Montserrat);
        font-size: 14px;
        &:hover {
            text-decoration: none;
            color: $yellow;
        }
    }
}
</style>
