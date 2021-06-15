<template>
<div>
    <top-image
        :headerText="'Контакты'"
    ></top-image>
    <div class="container">
            <div class="pl-5 pr-5 pb-5" style="min-height: 237px; background: white;">
                <spinner v-if="loading"></spinner>
                <div v-else>
                    <div class="row">
                        <div class="col-md">
                            <h2 class="contactHeader">{{title}}</h2>
                        </div>
                    </div>
                    <div class="fullLine"></div>
                    <div class="row">
                        <div class="col-md-6 contactBlock">
                            <contact-information></contact-information>
                        </div>
                        <div class="col-md-6 contactBlock">
                           <feed-back></feed-back>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <YandexMap></YandexMap>
    <request-component></request-component>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import YandexMap from "./YandexMap";
import FeedBack from "./FeedBack";
import ContactInformation from "./ContactInformation";
import RequestComponent from "../../components/RequestComponent";
import Spinner from "../../components/Spinner/Spinner";

export default {
    data() {
        return {
            loading: false,
            title: '',
            description: '',
        }
    },
    name: "ContactIndex",
    components: {
        TopImage,
        YandexMap,
        FeedBack,
        ContactInformation,
        RequestComponent,
        Spinner,
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/contact')
                .then(res => {
                    this.title = res.data.title
                    // this.description = res.data.description
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
.contactHeader  {
    @include superHeader($textBlack, "Montserrat - Ultra Light");
}
.fullLine {
    height: 1px;
    width: 100%;
    background: $yellow;
    margin-bottom: 35px;
}
.darkLine {
    width: 80%;
    height: 1px;
    background: $gray_4;
    margin: 30px 0;
}
.contactBlock{
    & h3 {
        @include miniHeader($textBlack, Montserrat);
    }
    & p {
        @include miniBodyText($grayText, Montserrat);
        padding: 25px 0;
    }
}
</style>
