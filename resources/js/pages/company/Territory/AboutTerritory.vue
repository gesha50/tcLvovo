<template>
    <div class="aboutTerritory">
        <h3 class="aboutTerritory__header">{{title}}</h3>
        <p class="aboutTerritory__text">
           {{description}}
        </p>
    </div>
</template>

<script>
export default {
    name: "AboutTerritory",
    props: {
      title: String,
      description: String,
    },
}
</script>

<style lang="scss">
.aboutTerritory {
    &__header {
        @include newsHeader();
        margin-bottom: 20px;
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
}
</style>
