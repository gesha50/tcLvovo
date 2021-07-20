<template>
    <div>
        <spinner v-if="loading"></spinner>
        <div v-else class="oneServiceIndex bg-white pr-5 pl-5">
            <div>
                <i class="fas oneServiceIndex__icon" :class="oneService.icon_class"></i>
                <h2 class="oneServiceIndex__header">{{oneService.name}}</h2>
            </div>
            <p class="ourServices__text">
                {{oneService.preview}}
            </p>
            <carousel-service-component
                :img="img"
            ></carousel-service-component>
            <div class="row mt-5">
                <div class="col-md-6 pr-2">
                    <about-territory
                        :title="slug"
                        :description="oneService.description"
                    ></about-territory>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="missionBlock__header">Почему выбирают именно нас?</div>
                        <div class="missionBlock__text mb-3">
                            {{oneService.why_choose_us}}
                        </div>
                        <div class="missionBlock__list pt-3">
                            <div
                                v-for="(plus, index) in oneService.pluses.split(',')"
                                :key="index"
                                class="d-flex justify-content-between mb-2"
                            >
                                <i class="missionBlock__icon fas fa-check"></i>
                                <div>{{plus}}</div>
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
import CarouselServiceComponent from "../../../components/carousels/CarouselServiceComponent";
import AboutTerritory from "../../company/Territory/AboutTerritory";

export default {
    beforeCreate() { document.title = 'Услуги' },
    beforeUpdate() { document.title = 'Услуги' },
    name: "OneServiceIndex",
    props: ['slug', 'id'],
    components: {
        Spinner,
        CarouselServiceComponent,
        AboutTerritory,
    },
    data() {
        return {
            img: '',
            loading: false,
            oneService: [],
        }
    },
    created() {
        this.getOneService()
    },
    methods: {
        getOneService() {
            this.loading = true
            axios.get('/api/services/'+ this.id)
                .then(res => {
                    this.oneService = res.data
                    console.log(this.oneService)
                    this.serviceImage()
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                    return this.$router.push('/404')
                })
        },
        serviceImage() {
            axios.get('/api/serviceImage/'+ this.id)
                .then(res => {
                    this.loading = false
                    console.log(res.data)
                    this.img = res.data
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                    return this.$router.push('/404')
                })
        }
    },
}
</script>

<style lang="scss">
.oneServiceIndex {
    &__header {
        display: inline;
        @include anyText($textBlack, "Montserrat Light", 35px, 300, 40px);
    }
    &__icon {
        font-size: 30px;
        color: $yellow;
        margin-right: 25px;
    }
}
</style>
