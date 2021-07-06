<template>
    <div class="paddingForCarousel">
        <b-carousel
            id="carousel-1"
            v-model="slide"
            :interval="4000"
            controls
            indicators
            background="#ababab"
            img-width="100%"
            img-height="350"
            style="text-shadow: 1px 1px 2px #333; height: 100%"
            @sliding-start="onSlideStart"
            @sliding-end="onSlideEnd"
        >
            <b-carousel-slide
                v-for="(image, index) in img"
                :key="index"
                :img-src="require(`../../assets/img/territory/${image}`)"
            ></b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>
export default {
    name: 'CarouselVBComponent',
    props: {
      img: Array | Object,
    },
    data() {
        return {
            slide: 0,
            sliding: null
        }
    },
    methods: {
        onSlideStart(slide) {
            this.sliding = true
        },
        onSlideEnd(slide) {
            this.sliding = false
        }
    }
}
</script>

<style lang="scss">
.paddingForCarousel{
    @media (min-width: 1200px) {
        padding-right: 50px;
    }
    @media (min-width: 992px) and (max-width: 1200px) {
        padding-right: 30px;
    }
    @media (min-width: 768px) and (max-width: 992px) {
        padding-right: 10px;
    }
}
.img-fluid {
    height: 350px !important;
}
</style>
