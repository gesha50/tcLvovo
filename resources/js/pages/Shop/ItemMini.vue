<template>
    <div class="item col-6 col-sm-4 col-md-3 mb-4 justify-content-around py-3">
        <i @click="addToFavourites(item)" class="fas fa-heart position-absolute heart"></i>
    <div @click="showMore(item)">
        <div class="d-flex justify-content-center w-100 my-2">
            <img width="150px" height="150px" :src="item.img[1]" alt="">
        </div>
        <div class="d-flex justify-content-start">
            <div class="price">
                {{item.price}} руб
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="title">
                {{item.title}}
            </div>
        </div>
    </div>
    <button @click="buy(item)" class="btn btn-light">Купить</button>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "ItemMini",
    props: {
        item: Object,
    },
    methods: {
        ...mapActions({
            addItemInCart: 'addItemInCart',
            addItemToFavourites: 'addItemToFavourites',
        }),
        showMore(item) {
          this.$router.push({
              path: `/shop/${item.title}`,
              params: { slug: item.title },
              query: { item: item }
          })
        },
        buy(item) {
            this.addItemInCart(item)
        },
        addToFavourites(item) {
            this.addItemToFavourites(item)
        },
    },
    computed: {
        ...mapGetters({
            cart: 'getCart',
            favourites: 'getFavourites',
        }),
    },
}
</script>

<style lang="scss">
.heart {
    right: 5px;
    top: 5px;
    z-index: 10;
}
.item {
    transition: 0.2s;
    &:hover {
        border-radius: 5px;
        background: #e0e0e0;
        box-shadow:  20px 20px 60px #bebebe,
        -20px -20px 60px #ffffff;
    }
    & i {
        &:hover {
            color: darkred;
            cursor: pointer;
        }
    }
}
.price {
    color: green;
}
</style>
