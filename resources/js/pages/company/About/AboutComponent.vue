<template>
<div class="aboutUs p-3">
    <spinner v-if="loading" ></spinner>
    <div v-else>
        <big-one-response-component
            :reviewAboutUs="reviewAboutUs"
        ></big-one-response-component>
        <div class="aboutUs__header">{{title}}</div>
        <div class="aboutUs__text">
            {{description}}
        </div>
        <div class="aboutUs__mission">
            <our-mission></our-mission>
        </div>
    </div>
</div>
</template>

<script>
import BigOneResponseComponent from "../../../components/BigOneResponseComponent";
import OurMission from "./OurMission";
import Spinner from "../../../components/Spinner/Spinner";

export default {
    data() {
        return {
            loading: false,
            title: '',
            description: '',
            reviewAboutUs: [],
        }
    },
    name: "AboutComponent",
    components: {
        BigOneResponseComponent,
        OurMission,
        Spinner,
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/aboutUs')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.getReview()
                })
                .catch(e => {
                    console.log(e)
                    this.loading = false
                })
        },
        getReview() {
            axios.get('/api/oneReview/1')
                .then(res => {
                    this.reviewAboutUs = res.data
                    this.loading = false
                })
                .catch(e => {
                    console.log(e)
                })
        },
    },
}
</script>

<style lang="scss">

.aboutUs {
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
        margin: 30px 0;
        @media (max-width: 768px) {
            text-align: center;
        }
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
    &__mission {

    }
}

</style>
