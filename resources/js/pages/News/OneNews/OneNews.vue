<template>
<div>
    <spinner v-if="loading"></spinner>
    <div v-else class="newsContainer">
        <div class="oneNews">
            <div class="row">
                <div class="col-md-1">
                    <date-month
                        :created_at="oneNews.created_at"
                    ></date-month>
                </div>
                <div class="col-md-11">
                    <full-news
                        :one-news="oneNews"
                    ></full-news>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import TopImage from "../../../components/TopImage";
import DateMonth from "../DateMonth";
import Spinner from "../../../components/Spinner/Spinner";
import FullNews from "./FullNews";

export default {
    name: "OneNews",
    props: ['slug', 'id'],
    data() {
        return {
            loading: false,
            oneNews: [],
        }
    },
    created() {
        this.getOneNews()
    },
    methods: {
        getOneNews() {
            this.loading = true
            axios.get('/api/news/'+ this.id)
                .then(res => {
                    this.loading = false
                    this.oneNews = res.data
                })
                .catch(e => {
                    this.loading = false
                    console.log(e)
                })
        },
    },
    components: {
        TopImage,
        DateMonth,
        FullNews,
        Spinner
    },
}
</script>

<style lang="scss">

</style>
