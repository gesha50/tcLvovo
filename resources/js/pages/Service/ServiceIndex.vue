<template>
<div>
    <top-image
        :headerText="'Услуги'"
    ></top-image>
    <div class="container">
        <div v-if="Object.keys($route.params).length !== 0">
            <router-view></router-view>
        </div>
        <div v-else class="ourServices pl-5 pr-5">
            <h2 class="ourServices__header">Что мы можем предложить Вам?</h2>
            <p class="ourServices__text">
                Claritas est etiam processus dynamicus, qui sequitur
                mutationem consuetudium lectorum. Investigationes demonstraverunt lectores
                legere me lius quod ii legunt saepius autem. Eodem modo typi, qui nunc nobis videntur
                parum clari, fiant sollemnes in futurum. Investigationes
                demonstraverunt lectores legere me lius quod ii legunt saepius soluta nobis eleifend option congue.
            </p>
            <div>
                <spinner v-if="loading"></spinner>
                <div
                    v-else
                    class="ourServices__blocks">
                    <div
                        v-for="item in services"
                        :key="item.id"
                        class="oneService"
                        @click="goToOneService(item)"
                    >
                        <div class="oneService__img">
                            <i
                                :class="item.icon_class"
                                class="fas"></i>
                        </div>
                        <div class="oneService__miniHeader">{{item.service_name}}</div>
                        <div class="oneService__header">{{item.companies.name}}</div>
                        <div class="oneService__preview">{{item.preview}}</div>
                        <div class="oneService__line"></div>
                    </div>
                </div>
            </div>
            <img class="bgImgServices" src="../../assets/img/buildings_sketch.png" alt="">
        </div>
    </div>
    <request-component></request-component>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import Spinner from "../../components/Spinner/Spinner";
import RequestComponent from "../../components/RequestComponent";

export default {
    name: "ServiceIndex",
    data() {
        return {
            loading: false,
            services: [],
        }
    },
    components: {
        TopImage,
        Spinner,
        RequestComponent,
    },
    mounted() {
        this.getServices()
    },
    methods: {
        getServices() {
            this.loading = true
            axios.get('/api/services')
                .then(res => {
                    this.services = res.data
                    this.loading = false
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                })
        },
        goToOneService(item) {
            this.$router.push({name: 'oneService', params: { slug: item.companies.name }, query: { id: item.id }})
        },
    },
}
</script>

<style lang="scss">
.oneService {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 15px;
    &__img {
        margin-bottom: 20px;
        & i {
            color: $yellow;
            font-size: 80px;
        }
    }
    &__miniHeader {
        @include miniHeader($textBlack, "Montserrat - Ultra Light");
    }
    &__header {
        @include anyText($textBlack, "Montserrat Light", 35px, 300, 40px);
    }
    &__preview {
        @include forDate($grayText);
    }
    &__miniHeader,
    &__header,
    &__preview {
        text-align: center;
    }
    &__line {
        height: 2px;
        background: $textBlack;
        width: 20%;
        margin: 15px auto 0;
        transition: 1s;
    }
    &:hover {
        cursor: pointer;
        background: $yellow;
        & .oneService__img i {
            color: $textBlack;
        }
        & .oneService__line {
            width: 60%;
        }
    }
}

.ourServices {
    position: relative;
    padding-bottom: 200px;
    background: white;
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
    &__blocks {
        padding: 0 150px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }
}
.bgImgServices {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1;
}
</style>
