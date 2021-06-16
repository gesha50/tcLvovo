<template>
    <div class="someMoreTerritory">
        <h5 class="someMoreTerritory__header">У нас вы найдёте:</h5>
        <div class="someMoreTerritory__blocks mt-3">
            <div class="someMoreTerritory__block">
                <some-more-about-territory
                    v-for="item in data" :key="item.id"
                    :item="item"
                ></some-more-about-territory>
            </div>
        </div>
    </div>
</template>

<script>
import SomeMoreAboutTerritory from "./SomeMoreAboutTerritory";

export default {
    data(){
      return {
          data: [
              {
                  id: 0,
                  header: 'Автосервис',
                  text: 'Профессионально оборудованный автосервис.' +
                      ' Берёмся за любые виды работ. У нас работают опытные мастера.',
              },
              {
                  id: 1,
                  header: 'Продажа древесины',
                  text: 'Большой выбор качественной древесины' +
                      ' для строительства домов, бань и т.д.',
              },
              {
                  id: 2,
                  header: 'Мастер кровли',
                  text: 'Огромный ассортимент кровли. Доступна любая палитра цветов. ' +
                      'Есть опытные мастера по установке',
              },
          ],
      }
    },
    name: "SomeMoreTerritory",
    components: {
        SomeMoreAboutTerritory,
    },
}
</script>

<style lang="scss">
.someMoreTerritory {
    &__header {
        @include newsHeader();
    }
    &__blocks {

    }
}
</style>
