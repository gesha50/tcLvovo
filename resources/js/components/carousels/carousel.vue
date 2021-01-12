<template>
<div class="container">
    <div id="app">
        <agile  :autoplay-speed="4000" :initial-slide="0" :autoplay="true" :pauseOnHover="true">
            <img class="slide" src="https://images.unsplash.com/photo-1506260408121-e353d10b87c7?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
            <img class="slide" src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
            <img class="slide" src="https://images.unsplash.com/photo-1524260855046-f743b3cdad07?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
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
    border: 1px solid #fff;
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
    background-color: #fff;
}

.slide {
    display: block;
    height: 500px;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
}
</style>
