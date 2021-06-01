<template>
    <div class="newsTextBlock">
        <h3>{{ oneNews.title }}</h3>
        <p>{{ oneNews.preview }}</p>
        <div class="service__linkBlock">
            <router-link
                class="service__link"
                :to="{name: 'oneNews', params: { slug: oneNews.title }, query: { id: oneNews.id }}"
            >
                Читать полностью
                <div class="line"></div>
            </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "Preview",
    props: {
        oneNews: Object,
    }
}
</script>

<style lang="scss">
.newsTextBlock {
    & h3 {
        @include newsHeader();
    }
    & p {
        @include anyText($grayText, Montserrat, 16px, 300, 30px);
    }
    & div a {
        @include anyText($black, $MontserratSB, 16px, 400, 30px);
    }
}
</style>
