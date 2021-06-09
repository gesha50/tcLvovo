<template>
<div class="tenant">
    <div class="tenant__header">ТК Львово для арендаторов</div>
    <div class="tenant__text">
        Claritas est etiam processus dynamicus, qui sequitur
        mutationem consuetudium lectorum. Investigationes demonstraverunt
        lectores legere me lius quod ii legunt saepius autem vel eum iriure dolor in
        hendrerit in vulputate velit esse molestie consequat.
    </div>
    <div>
        <spinner v-if="loading"></spinner>
        <div class="tenant__blocks row justify-content-around">
            <div
                v-for="dignity in dignities"
                :key="dignity.id"
                class="dignities col-md-4"
            >
                <div class="row">
                    <div class="col-md-3">
                        <i :class="dignity.icon_class" class="dignities__icon fas"></i>
                    </div>
                    <div class="col-md-9">
                        <div class="dignities__title">{{dignity.title}}</div>
                        <div class="dignities__description">
                            {{dignity.description}}
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
        }
    },
    mounted() {
        this.getDignities()
    },
    methods: {
        getDignities () {
            this.loading = true
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
