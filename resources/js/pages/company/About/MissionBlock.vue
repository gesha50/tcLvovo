<template>
    <div class="missionBlock col-md-4">
        <img
            src="../../../assets/img/history.jpeg"
            alt=""
            class="missionBlock__img"
        >
        <div class="missionBlock__header">Заголовок</div>
        <div class="missionBlock__text">
            kkefkjnekj evjvejkn erjklevkjn evjjj
            kkefkjnekj evjvejkn erjklevkjn evjjj
        </div>
        <div class="missionBlock__list">
            <div class="row">
                <i class="missionBlock__icon fas fa-check col-md-2"></i>
                <span class="col-md-10">ghjdjhfdsj</span>
            </div>
            <div class="row">
                <i class="missionBlock__icon fas fa-check col-md-2"></i>
                <span class="col-md-10">ghjdjhfdsj</span>
            </div>
            <div class="row">
                <i class="missionBlock__icon fas fa-check col-md-2"></i>
                <span class="col-md-10">ghjdjhfdsj</span>
            </div>
            <div class="row">
                <i class="missionBlock__icon fas fa-check col-md-2"></i>
                <span class="col-md-10">ghjdjhfdsj</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "MissionBlock"
}
</script>

<style lang="scss">
.missionBlock {
    &__img {
        width: 100%;
        object-fit: contain;
    }
    &__header {
        @include miniHeader($textBlack, Montserrat);
        margin: 25px 0;
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
