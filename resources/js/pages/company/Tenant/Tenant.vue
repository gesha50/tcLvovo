<template>
<div class="tenant p-4">
    <spinner v-if="loading"></spinner>
    <div v-else>
        <div class="tenant__header">{{title}}</div>
        <div class="tenant__text">
            {{description}}
        </div>
        <div>
            <div class="tenant__blocks row justify-content-around">
                <div
                    v-for="dignity in dignities"
                    :key="dignity.id"
                    class="dignities col-6 col-md-6 col-lg-4"
                >
                    <div class="row">
                        <div class="col-12 col-sm-3 text-center mb-1">
                            <i :class="dignity.icon_class" class="dignities__icon fas"></i>
                        </div>
                        <div class="col-12 col-sm-9">
                            <div class="dignities__title text-center">{{dignity.title}}</div>
                            <div class="dignities__description">
                                {{dignity.description}}
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
import Spinner from "../../../components/Spinner/Spinner";

export default {
    name: "Tenant",
    data() {
        return {
            loading: false,
            dignities: [],
            title: '',
            description: '',
        }
    },
    mounted() {
        this.getTitleAndDescription()
    },
    methods: {
        getTitleAndDescription() {
            this.loading = true
            axios.get('/api/getTitleAndDescription/tenant')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.getDignities()
                })
                .catch(e => {
                    console.log(e)
                    this.loading = false
                })
        },
        getDignities () {
            axios.get('/api/tenants')
                .then(res => {
                    this.loading = false
                    this.dignities = res.data
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                })
        },
    },
    components: {
        Spinner,
    },
}
</script>

<style lang="scss">
.tenant {
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
}
.dignities {
    margin-bottom: 20px;
    &__icon {
        font-size: 40px;
        color: $yellow;
    }
    &__title {
        @include miniHeader($textBlack, Montserrat);
        margin-bottom: 15px;
    }
    &__description {
        @include miniBodyText($grayText, "Crimson Text");
    }
}
</style>
