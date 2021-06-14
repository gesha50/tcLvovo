<template>
<div class="goodTerritory">
    <div class="goodTerritory__header">Достоинства территории</div>
    <div class="row">
        <div class="col-md-6">
            <good-territory-block
                v-for="i in 3" :key="i"
            ></good-territory-block>
        </div>
        <div class="col-md-6">
            <good-territory-block
                v-for="i in 3" :key="i"
            ></good-territory-block>
        </div>
    </div>
</div>
</template>

<script>
import GoodTerritoryBlock from "./GoodTerritoryBlock";

export default {
    name: "GoodTerritory",
    components: {
        GoodTerritoryBlock,
    },
}
</script>

<style lang="scss">
.goodTerritory {
    &__header {
        @include newsHeader();
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
}
</style>
