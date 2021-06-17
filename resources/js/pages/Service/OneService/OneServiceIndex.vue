<template>
    <div>
        <spinner v-if="loading"></spinner>
        <div v-else class="oneServiceIndex bg-white p-5">
            <h2 class="oneServiceIndex__header">{{slug}}</h2>
            <h4 class="oneServiceIndex__miniHeader">{{oneService.name}}</h4>
            <p class="oneServiceIndex__preview">{{oneService.preview}}</p>
            <div class="oneServiceIndex__icon">
                <i class="fas" :class="oneService.icon_class"></i>
            </div>
            <p class="oneServiceIndex__description">{{oneService.description}}</p>
        </div>
    </div>
</template>

<script>
import Spinner from "../../../components/Spinner/Spinner";

export default {
    name: "OneServiceIndex",
    props: ['slug', 'id'],
    components: {
        Spinner,
    },
    data() {
        return {
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
                    this.loading = false
                    this.oneService = res.data
                    console.log(this.oneService)
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                    return this.$router.push('/404')
                })
        },
    },
}
</script>

<style lang="scss">

</style>
