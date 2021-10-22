<template>
<div>
    <top-image
        :headerText="'Интернет-Магазин'"
    ></top-image>
    <div class="container-lg">
        <div style="background: white">
            <div class="row">
                <div class="col-12 px-5 mb-4">
                    <div v-if="Object.keys($route.params).length !== 0">
                        <router-view></router-view>
                    </div>
                    <div v-else>
                        <div class="d-flex justify-content-between px-5 mb-5">
                            <div>
                                <label for="category">Выберите категорию</label>
                                <select name="category" id="category">
                                    <option value="default">все</option>
                                </select>
                            </div>
                            <div>
                                Кол-во товаров: {{items.length}}
                            </div>
                        </div>
                        <div class="row gap-2 mb-4">
                            <item-mini
                                v-for="(item, i) in items"
                                :key="i"
                                :item="item"
                            ></item-mini>
                        </div>
                        <div class="d-flex justify-content-start">
                            <button
                                v-if="lastItemOnPage.length"
                                class="btn btn-outline-secondary"
                                @click="moreItems(lastItemOnPage)"
                                :disable="false"
                            >
                                больше товаров
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <request-component></request-component>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import RequestComponent from "../../components/RequestComponent";
import ItemMini from "./ItemMini";

export default {
    name: "Shop",
    data() {
      return {
          items: [
              {
                  id: 1,
                  title: 'шуруповерт',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 2500,
                  isNew: true,
                  isSale: false,
              },
              {
                  id: 2,
                  title: 'Бензопила',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 4990,
                  isNew: false,
                  isSale: false,
              },
              {
                  id: 3,
                  title: 'Мангал',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 20000,
                  isNew: false,
                  isSale: false,
              },
              {
                  id: 4,
                  title: 'Колеса',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 10000,
                  isNew: false,
                  isSale: false,
              },
              {
                  id: 5,
                  title: 'шуруповерт',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 2500,
                  isNew: true,
                  isSale: false,
              },
              {
                  id: 6,
                  title: 'Бензопила',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 4990,
                  isNew: false,
                  isSale: false,
              },
              {
                  id: 7,
                  title: 'Мангал',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 20000,
                  isNew: false,
                  isSale: false,
              },
              {
                  id: 8,
                  title: 'Колеса',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  price: 10000,
                  isNew: false,
                  isSale: false,
              },
          ],
          lastItemOnPage: 10
      }
    },
    components: {
      TopImage,
      RequestComponent,
        ItemMini,
    },
    methods: {
        moreItems(id) {
          // axios.get('', id)
          //     .then(response => {
          //
          //     })
          //     .catch(error => {
          //
          //     });
        },
    },
}
</script>

<style lang="scss" scoped>

</style>
