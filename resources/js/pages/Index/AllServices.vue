<template>
    <div class="allService container  d-flex justify-content-center">
        <div class="allService__block col-md-4">
            <div class="miniServiceBlock d-flex justify-content-between">
                <div class="miniServiceBlock__img">
                    <img src="/storage/icon.png" alt="">
                </div>
                <div class="miniServiceBlock__info">
                    <div class="miniServiceBlock__heading">
                        Плов
                    </div>
                    <div class="miniServiceBlock__body">
                        Каждое утро в ресторане "Самарканд" готовится горячая выпечка и плов!
                    </div>
                    <div class="miniServiceBlock__line"></div>
                </div>
            </div>
        </div>
        <div class="allService__block2 col-md-4">
            <div class="miniServiceBlock d-flex justify-content-between">
                <div class="miniServiceBlock__img">
                    <img src="/storage/icon_2.png" alt="">
                </div>
                <div class="miniServiceBlock__info">
                    <div class="miniServiceBlock__heading">
                        Автосервис
                    </div>
                    <div class="miniServiceBlock__body">
                        Каждое утро в ресторане "Самарканд" готовится горячая выпечка и плов!
                    </div>
                    <div class="miniServiceBlock__line"></div>
                </div>
            </div>
        </div>
        <div class="allService__block3 col-md-4">
            <div class="miniServiceBlock d-flex justify-content-between">
                <div class="miniServiceBlock__img">
                    <img src="/storage/icon_3.png" alt="">
                </div>
                <div class="miniServiceBlock__info">
                    <div class="miniServiceBlock__heading">
                        Шиномонтаж
                    </div>
                    <div class="miniServiceBlock__body">
                        Каждое утро в ресторане "Самарканд" готовится горячая выпечка и плов!
                    </div>
                    <div class="miniServiceBlock__line"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "AllServices"
}
</script>

<style lang="scss">
.allService {
    &__block {
        background-color: $yellow;
    }
    &__block2 {
        background-color: darken($yellow, 5%);
    }
    &__block3 {
        background-color: darken($yellow, 10%);
    }
}

.miniServiceBlock {
    padding: 55px 0;
    &__img img {
        width: 110px;
        padding: 0 25px;
        margin: 25px 0;
    }
    &__info {

    }
    &__heading {
        @include miniHeader($textBlack ,Montserrat);
        margin-bottom: 10px;
    }
    &__body {
        @include forDate($textBlack);
    }
    &__line {

    }
}
</style>
