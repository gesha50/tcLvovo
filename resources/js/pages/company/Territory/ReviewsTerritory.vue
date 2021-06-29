<template>
<div class="reviewsTerritory">
    <h5 class="reviewsTerritory__header">Специалист о ТК Львово:</h5>
    <div class="reviewsTerritory__block mt-3">
        <div class="reviewsTerritory__bg">
            <div class="reviewsTerritory__text">{{ reviewAboutUs.review }}</div>
            <div class="reviewsTerritory__triangle"></div>
        </div>
        <div class="row mt-4">
            <div class="offset-2 col-2">
                <div class="reviewsTerritory__avatar">
                    <img src="../../../assets/img/territory/1.png" alt="">
                </div>
            </div>
            <div class="col-8">
                <h6 class="reviewsTerritory__name">{{ reviewAboutUs.name }}</h6>
                <p class="reviewsTerritory__worker"> {{ reviewAboutUs.worker }} </p>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "ReviewsTerritory",
    data() {
        return {
            reviewAboutUs: [],
        }
    },
    mounted() {
        this.getReview()
    },
    methods: {
        getReview() {
            axios.get('/api/oneReview/2')
                .then(res => {
                    this.reviewAboutUs = res.data
                })
                .catch(e => {
                    console.log(e)
                })
        },
    },
}
</script>

<style lang="scss">
.reviewsTerritory {
    &__header {
        @include newsHeader();
    }
    &__block {

    }
    &__bg {
        background-color: #f3f3f3;
        padding: 20px;
        position: relative;
    }
    &__text {
        @include miniBodyText($textBlack, "Crimson Text - Roman");
    }
    &__triangle {
        position: absolute;
        left: 0;
        bottom: -40px;
        border-bottom: 20px solid transparent;
        border-left: 20px solid transparent;
        border-right: 20px solid $gray_6;
        border-top: 20px solid $gray_6;
    }
    &__avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #fff;
        & img {
            width: 100%;
            object-fit: contain;
        }
    }
    &__name {
        @include anyText($textBlack, Montserrat, 18px, 300, 36px);
    }
    &__worker {
        @include forDate($grayText);
    }
}
</style>
