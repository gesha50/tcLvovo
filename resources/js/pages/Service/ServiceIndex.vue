<template>
<div>
    <top-image
        :headerText="'Услуги'"
    ></top-image>
    <div class="container-lg">
        <div v-if="Object.keys($route.params).length !== 0">
            <router-view></router-view>
        </div>
        <div v-else class="ourServices pl-5 pr-5">
            <spinner v-if="loading"></spinner>
            <div  v-else>
                <h2 class="ourServices__header">{{title}}</h2>
                <p class="ourServices__text">
                    {{description}}
                </p>
                <div>
                    <div
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
                            <div class="oneService__miniHeader">{{item.name}}</div>
                            <div class="oneService__header">{{item.companies.name}}</div>
                            <div class="oneService__preview">{{item.preview}}</div>
                            <div class="oneService__line"></div>
                        </div>
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
    beforeCreate() { document.title = 'Услуги' },
    beforeUpdate() { document.title = 'Услуги' },
    name: "ServiceIndex",
    data() {
        return {
            loading: false,
            services: [],
            title: '',
            description: '',
        }
    },
    components: {
        TopImage,
        Spinner,
        RequestComponent,
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/services')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.getServices()
                })
            .catch(e => {
                console.log(e)
                this.loading = false
            })
        },
        getServices() {
            axios.get('/api/services')
                .then(res => {
                    this.services = res.data
                    console.log(this.services)
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
        display: grid;
        grid-gap: 10px;
        @media (min-width: 1200px) {
            grid-template-columns: repeat(3, 1fr);
            padding: 0 150px;
        }
        @media (min-width: 992px) and (max-width: 1200px) {
            grid-template-columns: repeat(2, 1fr);
            padding: 0 130px;
        }
        @media (min-width: 768px) and (max-width: 992px) {
            grid-template-columns: repeat(2, 1fr);
            padding: 0 110px;
        }
        @media (min-width: 576px) and (max-width: 768px) {
            grid-template-columns: repeat(2, 1fr);
            padding: 0 80px;
        }
        @media (max-width: 576px) {
            grid-template-columns: 1fr;
            padding: 0;
        }
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
