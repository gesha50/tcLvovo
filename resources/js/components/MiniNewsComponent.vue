<template>
    <div class="newsMini">
        <div class="newsMini__header d-flex justify-content-between">
            <div class="newsMini__headerText">Последняя новость</div>
            <div class="newsMini__cursor d-flex justify-content-between">
                <i class="fas fa-chevron-left"></i>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <div class="newsMini__img col-md-6">
                <img width="100%" :src="news.image" alt="">
            </div>
            <div class="newsMini__bodyText col-md-6">
                <p class="newsMini__date">{{date}} {{month}} {{yearNews}}</p>
                <p class="newsMini__text">{{news.preview}}</p>
            </div>
        </div>
        <div class="newsMini__footer">
            <router-link :to="{name: 'news'}" class="newsMini__link">Все новости
                <div class="line"></div>
            </router-link>
        </div>
    </div>
</template>

<script>
import toDateFromFullDate from "../filters/toDateFromFullDate";
import toMonthFromFullDate from "../filters/toMonthFromFullDate";
import toMonthFullLetters from "../filters/toMonthFullLetters";
import toYearFromFullDate from "../filters/toYearFromFullDate";

export default {
    name: "MiniNewsComponent",
    props: {
        news: Object | Array,
        created_at: String,
    },
    computed: {
        date() {
            return toDateFromFullDate(this.created_at)
        },
        month() {
            let month = toMonthFromFullDate(this.created_at)
            return toMonthFullLetters(month)
        },
        yearNews() {
            return toYearFromFullDate(this.created_at)
        }
    },
}
</script>

<style scoped>

</style>
