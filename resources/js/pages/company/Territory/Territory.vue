<template>
<div class="territory">
    <carousel-v-b-component></carousel-v-b-component>
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="aboutTerritory">
                <h3 class="aboutTerritory__header">О территории</h3>
                <p class="aboutTerritory__text">
                    efc ,kef m vf  vr vt t4v bbr5 jhjhen hfvjk
                </p>
                <footer class="aboutTerritory__footer">uhjebhhjv vhhjv</footer>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div v-for="item in 3" :key="item" class="goodTerritory">
                        <div class="row">
                            <div class="col-md-2"><i class="fas fa-car"></i></div>
                            <div class="col-md-10">
                                <h5 class="goodTerritory__header">hfhhdd</h5>
                                <p class="goodTerritory__text">vefhhgech e v veve</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div v-for="item in 3" :key="item" class="goodTerritory">
                        <div class="row">
                            <div class="col-md-2"><i class="fas fa-car"></i></div>
                            <div class="col-md-10">
                                <h5 class="goodTerritory__header">hfhhdd</h5>
                                <p class="goodTerritory__text">vefhhgech e v veve</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <div class="reviewsTerritory">
                <h5 class="reviewsTerritory__header">vefvefer</h5>
                <div class="reviewsTerritory__block">
                    <div class="reviewsTerritory__bg">
                        <div class="reviewsTerritory__text"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <h6 class="reviewsTerritory__name">veher eec</h6>
                            <p class="reviewsTerritory__worker"> rercrer </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="someMoreTerritory">
                <h5 class="someMoreTerritory__header">jhfbbhjw</h5>
                <div class="someMoreTerritory__blocks">
                    <div class="someMoreTerritory__block">
                        <div v-for="i in 3" :key="i" class="someMoreAboutTerritory row">
                            <div class="col-md-3">
                                <div class="someMoreAboutTerritory__btn"></div>
                            </div>
                            <div class="col-md-9">
                                <div class="someMoreAboutTerritory__header">hhfejf</div>
                                <p class="someMoreAboutTerritory__toggleText">fjhjhecj</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import CarouselVBComponent from "../../../components/carousels/CarouselVBComponent";

export default {
    name: "Territory",
    components: {
        CarouselVBComponent,
    },
}
</script>

<style lang="scss">

</style>
