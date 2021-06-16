<template>
<div class="goodTerritoryBlock col-md-6">
    <div class="row">
        <div class="col-md-2">
            <i :class="item.iconClass" class="fas goodTerritoryBlock__icon"></i>
        </div>
        <div class="col-md-10">
            <h5 class="goodTerritoryBlock__header">{{item.title}}</h5>
            <p class="goodTerritoryBlock__text">{{item.description}}</p>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "GoodTerritoryBlock",
    props: {
      item: Object | Array,
    },
}
</script>

<style lang="scss">
.goodTerritoryBlock {
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
