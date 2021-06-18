<template>
<div class="territory">
    <spinner v-if="loading"></spinner>
    <div v-else>
        <carousel-v-b-component
            :img="img"
        ></carousel-v-b-component>
        <div class="row mt-5">
            <div class="col-md-6 pr-2">
                <about-territory
                    :title="title"
                    :description="description"
                ></about-territory>
            </div>
            <div class="col-md-6">
                <good-territory></good-territory>
            </div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col-md-6 pr-2">
                <reviews-territory></reviews-territory>
            </div>
            <div class="col-md-6">
                <some-more-territory></some-more-territory>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import CarouselVBComponent from "../../../components/carousels/CarouselVBComponent";
import AboutTerritory from "./AboutTerritory";
import GoodTerritory from "./GoodTerritory";
import ReviewsTerritory from "./ReviewsTerritory";
import SomeMoreTerritory from "./SomeMoreTerritory";
import Spinner from "../../../components/Spinner/Spinner";

export default {
    data() {
      return {
          loading: false,
          title: '',
          description: '',
          img: [
              'ter_1.png',
              'ter_2.png',
              'ter_3.png',
              'ter_4.png',
          ],
      }
    },
    name: "Territory",
    components: {
        CarouselVBComponent,
        AboutTerritory,
        GoodTerritory,
        ReviewsTerritory,
        SomeMoreTerritory,
        Spinner,
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/territory')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.loading = false
                })
                .catch(e => {
                    console.log(e)
                    this.loading = false
                })
        },
    },
}
</script>

<style lang="scss">

</style>
