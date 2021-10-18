<template>
    <div class="ourMission">
        <div class="ourMission__block row justify-content-between">
            <mission-block
                v-for="(item, index) in missionData"
                :key="index"
                :item="item"
            ></mission-block>
        </div>
    </div>
</template>

<script>
import MissionBlock from "./MissionBlock";

export default {
    data() {
      return {
          missionData: [
              {
                  img: 'comfort.jpeg',
                  title: 'Удобство',
                  description: 'Расположение идеальное ТК Львово очень удобное',
                  plus: [
                      'на шоссе',
                      'хорошая парковка',
                      'доступные цены',
                      'просторно'
                  ],
              },
              {
                  img: 'safety.png',
                  title: 'Безопастность',
                  description: 'Наша территория тщательно охраняется',
                  plus: [
                      'вокруг идёт забор',
                      'видеонаблюдение',
                      'дежурство',
                      'честный коллектив'
                  ],
              },
              {
                  img: 'eat.png',
                  title: 'Вкусно',
                  description: 'На территории есть магазин с домашними продуктами',
                  plus: [
                      'узбекская кухня',
                      'армянская кухня',
                      'горячие лепешки',
                      'магазин по-домашней '
                  ],
              }
          ],
      }
    },
    name: "OurMission",
    components: {
      MissionBlock,
    },
}
</script>

<style lang="scss">
.ourMission {
    margin-bottom: 40px;
}
</style>
