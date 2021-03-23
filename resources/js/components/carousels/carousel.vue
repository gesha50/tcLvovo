<template>
<div class="container">
    <div id="app">
        <agile  :autoplay-speed="4000" :initial-slide="0" :autoplay="true" :pauseOnHover="true">
            <img class="slide" src="/storage/slider_1.jpeg"/>
            <img class="slide" src="/storage/slider_2.jpeg"/>
            <img class="slide" src="/storage/slider_3.jpeg"/>
            <img class="slide" src="/storage/slider_4.jpeg"/>
            <template slot="prevButton"><i class="fas fa-chevron-left"></i></template>
            <template slot="nextButton"><i class="fas fa-chevron-right"></i></template>
        </agile>
    </div>
</div>
</template>

<script>
import { VueAgile } from 'vue-agile'
export default {
    name: "carousel",
    components: {
        agile: VueAgile
    }
}
</script>

<style lang="scss">
.agile__nav-button {
    background: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: 24px;
    height: 100%;
    position: absolute;
    top: 0;
    transition-duration: 0.3s;
    width: 80px;
    &:hover {
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 1;
    }
}

.agile__nav-button--prev {
    left: 0;
}
.agile__nav-button--next {
    right: 0;
}
.agile__dots {
    bottom: 10px;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
}
.agile__dot {
    margin: 0 10px;
}
.agile__dot button {
    background-color: transparent;
    border: 1px solid #fcd846;
    border-radius: 50%;
    cursor: pointer;
    display: block;
    height: 10px;
    font-size: 0;
    line-height: 0;
    margin: 0;
    padding: 0;
    transition-duration: 0.3s;
    width: 10px;
}
.agile__dot--current button, .agile__dot:hover button {
    background-color: #fcd846;
}

.agile__actions button i {
    color: #fcd846;
}

.slide {
    display: block;
    height: 500px;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
}
</style>
