<template>
<div>
    <top-image
        :headerText="'Новости'"
    ></top-image>
    <div class="container-lg">
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
                        <div class="col-2 col-lg-1">
                            <date-month
                                :created_at="oneNews.created_at"
                            ></date-month>
                        </div>
                        <div class="col-10 col-lg-11">
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
    <request-component></request-component>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import DateMonth from "./DateMonth";
import Preview from "./Preview";
import Spinner from "../../components/Spinner/Spinner";
import RequestComponent from "../../components/RequestComponent";

export default {
    beforeCreate() { document.title = 'Новости' },
    beforeUpdate() { document.title = 'Новости' },
    name: "NewsIndex",
    components: {
        TopImage,
        DateMonth,
        Preview,
        Spinner,
        RequestComponent,
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
    background: $whiteText;
    @media (min-width: 1200px) {
        padding: 0 60px 20px;
    }
    @media (min-width: 992px) and (max-width: 1200px) {
        padding: 0 50px 20px;
    }
    @media (min-width: 768px) and (max-width: 992px) {
        padding: 0 30px 20px;
    }
    @media (min-width: 576px) and (max-width: 768px) {
        padding: 0 20px 20px;
    }
    @media (max-width: 576px) {
        padding: 0 10px 20px;
    }
}
.eachNews {
    margin-bottom: 20px;
}
</style>
