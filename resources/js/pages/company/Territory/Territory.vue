<template>
<div class="territory">
    <carousel-v-b-component></carousel-v-b-component>
    <div class="row mt-5">
        <div class="col-md-6 pr-2">
            <about-territory></about-territory>
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
</template>

<script>
import CarouselVBComponent from "../../../components/carousels/CarouselVBComponent";
import AboutTerritory from "./AboutTerritory";
import GoodTerritory from "./GoodTerritory";
import ReviewsTerritory from "./ReviewsTerritory";
import SomeMoreTerritory from "./SomeMoreTerritory";

export default {
    name: "Territory",
    components: {
        CarouselVBComponent,
        AboutTerritory,
        GoodTerritory,
        ReviewsTerritory,
        SomeMoreTerritory,
    },
}
</script>

<style lang="scss">

</style>
