<template>
<div class="brands">
    <h2 class="brands__header">Все известные бренды у нас</h2>
    <p class="brands__text">
        Claritas est etiam processus dynamicus, qui sequitur
        mutationem consuetudium lectorum. Investigationes demonstraverunt lectores
        legere me lius quod ii legunt saepius autem. Eodem modo typi, qui nunc nobis videntur
        parum clari, fiant sollemnes in futurum. Investigationes
        demonstraverunt lectores legere me lius quod ii legunt saepius soluta nobis eleifend option congue.
    </p>
    <div>
        <spinner v-if="loading"></spinner>
        <div class="brands__blocks">
            <div
                v-for="brand in brands"
                :key="brand.id"
                class="oneBrand"
            >
                <div class="row">
                    <div class="col-md-4">
                        <img :src="brand.image" alt="" class="oneBrand__img">
                    </div>
                    <div class="col-md-8">
                        <div class="oneBrand__header">{{brand.title}}</div>
                        <div class="oneBrand__description">{{brand.description}}</div>
                        <a :href="brand.link" target="_blank" class="oneBrand__link">{{brand.link}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Spinner from "../../../components/Spinner/Spinner";

export default {
    name: "Brands",
    data() {
      return {
          brands: [],
          loading: false,
      }
    },
    components: {
      Spinner,
    },
    mounted() {
        this.getBrands()
    },
    methods: {
        getBrands() {
            this.loading = true
            axios.get('/api/brands')
            .then(res => {
                this.brands = res.data
                this.loading = false
            })
            .catch(e => {
                console.log(e)
                this.loading = false
            })
        }
    },
}
</script>

<style lang="scss">
.brands {
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
    &__blocks {
        & .oneBrand:not(:last-child) {
            border-bottom: 1px solid $gray_6;
        }
    }
}
.oneBrand {
    padding-bottom: 20px;
    margin-bottom: 20px;
    &__img {
        width: 200px;
        object-fit: contain;
        height: 200px;
    }
    &__header {
        @include newsHeader();
    }
    &__description {
        @include miniBodyText($grayText ,Montserrat);
        margin: 30px 0;
    }
    &__link {
        @include forDate($yellow_2);
    }
}
</style>
