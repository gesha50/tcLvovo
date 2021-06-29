<template>
<div class="FullNews">
    <div class="FullNews__header">{{oneNews.title}}</div>
    <div class="FullNews__preview">{{ oneNews.preview}}</div>
    <div class="FullNews__imgBlock">
        <img
            :src="oneNews.image"
            alt=""
            class="FullNews__img">
    </div>
    <div class="FullNews__description">{{ oneNews.description}}</div>
</div>
</template>

<script>
export default {
    name: "FullNews",
    props: {
        oneNews: Array | Object,
    }
}
</script>

<style lang="scss">
.FullNews {
    &__header {
       @include newsHeader();
    }
    &__preview,
    &__description {
        @include miniBodyText($grayText, Montserrat);
    }
    &__imgBlock {
        padding: 10px 10px;
    }
    &__img {
        width: 100%;
        object-fit: contain;
    }
}
</style>
