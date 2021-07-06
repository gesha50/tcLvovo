<template>
<div class="brands p-3">
    <spinner v-if="loading"></spinner>
    <div v-else>
        <h2 class="brands__header">{{title}}</h2>
        <p class="brands__text">
            {{description}}
        </p>
        <div>
            <div class="brands__blocks">
                <div
                    v-for="brand in brands"
                    :key="brand.id"
                    class="oneBrand"
                >
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <img :src="brand.image" alt="" class="oneBrand__img mb-2">
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="oneBrand__header">{{brand.title}}</div>
                            <div class="oneBrand__description">{{brand.description}}</div>
                            <a :href="brand.link" target="_blank" class="oneBrand__link">{{brand.link}}</a>
                        </div>
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
    beforeCreate() { document.title = 'Бренды' },
    beforeUpdate() { document.title = 'Бренды' },
    name: "Brands",
    data() {
      return {
          brands: [],
          loading: false,
          title: '',
          description: '',
      }
    },
    components: {
      Spinner,
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/brands')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.getBrands()
                })
                .catch(e => {
                    console.log(e)
                    this.loading = false
                })
        },
        getBrands() {
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
        width: 100%;
        object-fit: contain;
        //height: 200px;
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
