<template>
    <div @click="showMore(item)" class="item col-md-3 mb-4 justify-content-around py-3">
        <i class="fas fa-heart float-right"></i>
        <div class="d-flex justify-content-center w-100 my-2">
            <img width="150px" height="150px" src="https://jjji.ru/800x450" alt="">
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
        <button class="btn btn-light">Купить</button>
    </div>
</template>

<script>
export default {
    name: "ItemMini",
    props: {
        item: Object,
    },
    methods: {
        showMore(item) {
          this.$router.push({
              path: `/shop/${item.title}`,
              params: { slug: item.title },
              query: { item: item }
          })
        },
    }
}
</script>

<style lang="scss">
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
