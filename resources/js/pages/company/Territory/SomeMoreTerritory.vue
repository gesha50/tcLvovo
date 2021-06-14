<template>
    <div class="someMoreTerritory">
        <h5 class="someMoreTerritory__header">jhfbbhjw</h5>
        <div class="someMoreTerritory__blocks">
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
                  header: 'Заголовок 1',
                  text: '00000',
              },
              {
                  id: 1,
                  header: 'Заголовок 2',
                  text: '1111',
              },
              {
                  id: 2,
                  header: 'Заголовок 3',
                  text: '2222',
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
