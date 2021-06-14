<template>
    <div class="aboutTerritory">
        <h3 class="aboutTerritory__header">О территории</h3>
        <p class="aboutTerritory__text">
            efc ,kef m vf  vr vt t4v bbr5 jhjhen hfvjk
        </p>
        <footer class="aboutTerritory__text">uhjebhhjv vhhjv</footer>
    </div>
</template>

<script>
export default {
    name: "AboutTerritory"
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
