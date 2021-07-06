<template>
<div class="oneResponse">
    <div class="row">
        <div class="col-md-6">
            <img src="../assets/img/aboutUs/director.png" alt="" class="oneResponse__img">
        </div>
        <div class="col-md-6 align-self-center position-relative">
            <i class="fas fa-quote-right oneResponse__icon"></i>
            <div class="oneResponse__response">
                {{ reviewAboutUs.review}}
            </div>
            <div class="oneResponse__name">{{ reviewAboutUs.name }}.</div>
            <div class="oneResponse__position">{{ reviewAboutUs.worker }}</div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "BigOneResponseComponent",
    props: {
        reviewAboutUs: [Array, Object]
    },
}
</script>

<style lang="scss">
.oneResponse {
    &__img {
        width: 100%;
        object-fit: contain;
        height: 275px;
    }
    &__icon {
        position: absolute;
        top: 0;
        font-size: 30px;
        color: $yellow_2;
        @media (min-width: 768px) {
            left: -40px;
        }
        @media (max-width: 768px) {
            right: 0;
        }
    }
    &__response {
        @include response();
        @media (max-width: 576px) {
            font-size: 20px;
            line-height: 22px;
        }
    }
    &__name {
        margin-top: 25px;
        @include miniBodyText($textBlack, Montserrat);
        @media (max-width: 768px) {
            text-align: end;
        }
    }
    &__position {
        @include  forDate($grayText);
        @media (max-width: 768px) {
            text-align: end;
        }
    }
}
</style>
