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
                  img: '1.jpeg',
                  title: 'Удобство',
                  description: 'Расположение идеальное ТК Львово очень удобное',
                  plus: [
                      'на шоссе',
                      'хорошая парковка',
                      'доступные цены',
                      'просторная территория'
                  ],
              },
              {
                  img: '2.jpeg',
                  title: 'Безопастность',
                  description: 'Наша территория тщательно охраняется',
                  plus: [
                      'вокруг идёт забор',
                      'круглосуточное наблюдение',
                      'видеокамеры',
                      'ни одного случая кражи'
                  ],
              },
              {
                  img: '3.png',
                  title: 'Вкусно',
                  description: 'На территории есть магазин с домашними продуктами',
                  plus: [
                      'узбекская кухня',
                      'армянская кухня',
                      'горячие лепешки',
                      'разливное пиво'
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
