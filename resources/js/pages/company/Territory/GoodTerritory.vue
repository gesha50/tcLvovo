<template>
<div class="goodTerritory">
    <div class="goodTerritory__header">Достоинства территории</div>
    <div class="row mt-3">
            <good-territory-block
                v-for="(item,index) in goodTerritories"
                :key="index"
                :item="item"
            ></good-territory-block>
    </div>
</div>
</template>

<script>
import GoodTerritoryBlock from "./GoodTerritoryBlock";

export default {
    data() {
      return {
          goodTerritories: [
              {
                  title: 'Парковка',
                  description: 'Всегда есть свободные места',
                  iconClass: 'fa-car',
              },
              {
                  title: 'У дороги',
                  description: 'Быстро можно заехать с калужского шоссе ',
                  iconClass: 'fa-road',
              },
              {
                  title: 'Ресторан',
                  description: 'Узбекская кухня  и др.',
                  iconClass: 'fa-utensils',
              },
              {
                  title: 'Шиномонтаж',
                  description: 'Замена резины',
                  iconClass: 'fa-car',
              },
              {
                  title: 'Работы по металлу',
                  description: 'Есть мастер по металлу',
                  iconClass: 'fa-user',
              },
              {
                  title: 'Свободные места',
                  description: 'Есть доступные торговые зоны',
                  iconClass: 'fa-warehouse',
              },
          ],
      }
    },
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
