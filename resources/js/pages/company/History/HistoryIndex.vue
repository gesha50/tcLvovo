<template>
<div class="history">
    <spinner v-if="loading"></spinner>
    <div v-else>
        <div class="history__header">{{title}}</div>
        <div class="history__text">
            {{description}}
        </div>
        <img
            src="../../../assets/img/history.jpeg"
            alt=""
            class="history__img"
        >
        <div>
            <div class="history__blocks">
                <div
                    v-for="oneHistory in history"
                    :key="oneHistory.id"
                    class="oneHistory"
                >
                    <div class="row">
                        <div class="col-md-4">
                            <span class="oneHistory__year">{{oneHistory.year}}</span>
                            <div class="oneHistory__line"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="oneHistory__title">{{oneHistory.title}}</div>
                            <div class="oneHistory__description">
                                {{oneHistory.description}}
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
    name: "HistoryComponent",
    data() {
      return {
          loading: false,
          history: [],
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
            axios.get('/api/getTitleAndDescription/history')
                .then(res => {
                    this.title = res.data.title
                    this.description = res.data.description
                    this.getHistories()
                })
                .catch(e => {
                    console.log(e)
                    this.loading = false
                })
        },
      getHistories () {
         axios.get('/api/histories')
         .then(res => {
             this.loading = false
             this.history = res.data
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
.history {
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
    &__img {
        margin: 0 auto 35px;
        height: 400px;
        width: 100%;
        object-fit: cover;
    }
    &__blocks {
        & .oneHistory:not(:last-child) {
            border-bottom: 1px solid $gray_6;
        }
    }
}
.oneHistory {
    padding-bottom: 10px;
    margin-bottom: 20px;
    &__year {
        @include superHeader($yellow_2, "Montserrat - Ultra Light");
    }
    &__line {
        margin-top: 15px;
        background-color: $textBlack;
        height: 2px;
        width: 13%;
    }
    &__title {
        @include newsHeader();
    }
    &__description {
        @include miniBodyText($grayText ,Montserrat);
        margin: 20px 0;
    }
}
</style>
