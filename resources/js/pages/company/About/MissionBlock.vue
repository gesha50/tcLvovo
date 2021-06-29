<template>
    <div class="missionBlock col-12 col-md-4">
        <img
            :src="require(`../../../assets/img/aboutUs/${item.img}`)"
            alt=""
            class="missionBlock__img"
        >
        <div>
            <div class="missionBlock__header">{{item.title}}</div>
            <div class="missionBlock__text">
                {{item.description}}
            </div>
            <div class="missionBlock__list">
            <div
                v-for="(plus, index) in item.plus"
                :key="index"
                class="d-flex justify-content-between"
            >
                <i class="missionBlock__icon fas fa-check"></i>
                <div>{{plus}}</div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MissionBlock",
    props: {
        item: Object | Array,
    },
}
</script>

<style lang="scss">
.missionBlock {
    @media (max-width: 768px) {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }
    &__img {
        height: 200px;
        width: 100%;
        object-fit: contain;
    }
    &__header {
        @include miniHeader($textBlack, Montserrat);
        margin: 20px 0;
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
    }
    &__list {
        @include forDate($gray_1);
    }
    &__icon {
        color: $yellow_2;
        align-self: center;
    }
}
</style>
