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
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Шуруповерт',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3' +
                      ' 34vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
              },
              {
                  id: 2,
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Бензопила',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: '',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
              },
              {
                  id: 3,
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Газонокосилка',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: '',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
              },
              {
                  id: 4,
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Гвозди',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: '',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
              },
              {
                  id: 5,
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Мангал',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: '',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
              },
              {
                  id: 6,
                  article: '',
                  idCategory: 1,
                  idCompany: 2,
                  tags: '',
                  img: {
                      0: 'https://jjji.ru/800x450',
                      1: 'https://jjji.ru/800x550',
                      2: 'https://jjji.ru/750x500',
                  },
                  title: 'Краска',
                  description: 'vgjbh jhbjkvef rejkfjwekn r3ffh3jh3 34',
                  fullDescriptio: '',
                  dignities: ['vefcs', 'vrgfced', 'tgvrfc'],
                  specifications: {
                      0: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      1: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                      2: {
                          key: 'free speed',
                          value: 'rrmfj'
                      },
                  },
                  price: 4990,
                  status: 'new',
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
        moreItems(lastId) {
          // axios.get('', lastId)
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
