<template>
<div class="goodTerritoryBlock">
    <div class="row">
        <div class="col-md-2">
            <i class="fas fa-car goodTerritoryBlock__icon"></i>
        </div>
        <div class="col-md-10">
            <h5 class="goodTerritoryBlock__header">hfhhdd</h5>
            <p class="goodTerritoryBlock__text">vefhhgech e v veve</p>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "GoodTerritoryBlock"
}
</script>

<style lang="scss">
.goodTerritoryBlock {
    margin-top: 20px;
    &__icon {
        font-size: 20px;
        color: $yellow;
    }
    &__header {
        @include miniBodyText($textBlack, Montserrat);
        line-height: 30px;
    }
    &__text {
        @include miniBodyText($grayText, "Crimson Text");
    }
}
</style>
