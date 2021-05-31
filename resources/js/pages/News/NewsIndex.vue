<template>
<div>
    <top-image
        :headerText="'Новости'"
    ></top-image>
    <div class="container">
        <div class="gallerySpinner" v-if="loading">
            <b-spinner :variant="'warning'" type="grow" label="Loading..."></b-spinner>
        </div>
        <div v-else class="newsContainer">
            <div
                v-for="oneNews in news"
                :key="oneNews.id"
                class="oneNews"
            >
                <div class="row">
                    <div class="col-md-2">
                        {{ oneNews.created_at | formatDate()}}
                        {{ oneNews.created_at | formatMonth()}}
                    </div>
                    <div class="col-md-10">
                        <h3>{{ oneNews.title }}</h3>
                        <p>{{ oneNews.preview }}</p>
                        <a href="#">Читать полностью</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";

export default {
    name: "NewsIndex",
    components: {
        TopImage,
    },
    data() {
        return {
            loading: false,
            news: [],
        }
    },
    mounted() {
        this.getAllNews()
    },
    methods: {
        getAllNews() {
            this.loading = true
            axios.get('/api/news')
                .then(res => {
                    this.loading = false
                    this.news = res.data
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                })
        },
    },
    filters: {
        formatDate: function (date) {
            let arrayDate = date.split('T0')
            return arrayDate[0].split('-')[2]
        },
        formatMonth: function (date) {
            let arrayDate = date.split('T0')
            return arrayDate[0].split('-')[1]
        },
    },
}
</script>

<style lang="scss">

</style>
