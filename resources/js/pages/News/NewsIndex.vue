<template>
<div>
    <top-image
        :headerText="'Новости'"
    ></top-image>
    <div class="container">
        <div v-if="Object.keys($route.params).length !== 0">
            <router-view></router-view>
        </div>
        <div v-else>
            <spinner v-if="loading"></spinner>
            <div v-else class="newsContainer">
                <div
                    v-for="oneNews in news"
                    :key="oneNews.id"
                    class="eachNews"
                >
                    <div class="row">
                        <div class="col-md-1">
                            <date-month
                                :created_at="oneNews.created_at"
                            ></date-month>
                        </div>
                        <div class="col-md-11">
                            <preview
                                :one-news="oneNews"
                            ></preview>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import DateMonth from "./DateMonth";
import Preview from "./Preview";
import Spinner from "../../components/Spinner/Spinner";

export default {
    name: "NewsIndex",
    components: {
        TopImage,
        DateMonth,
        Preview,
        Spinner
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
}
</script>

<style lang="scss">
.newsContainer {
    padding: 0 60px 20px;
    background: $whiteText;
}
.eachNews {
    margin-bottom: 20px;
}
</style>
