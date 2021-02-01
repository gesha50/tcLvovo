<template>
    <div class="aside">
        <div class="aside__logo">Документы</div>
        <div class="aside__text">
            <div class="download d-flex justify-content-between">
                <a href="#" class="download__imgLink">
                    <i class="far fa-file-pdf"></i>
                </a>
                <div class="download__text">
                    <div class="download__MB">32 MB</div>
                    <a href="#" class="download__link">Скачать PDF</a>
                </div>
            </div>
        </div>
        <div class="aside__text">
            <div class="download d-flex justify-content-between">
                <a href="#" class="download__imgLink">
                    <i class="far fa-file-word"></i>
                </a>
                <div class="download__text">
                    <div class="download__MB">22 MB</div>
                    <a href="#" class="download__link">Скачать DOC</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AsideDocumentsComponent"
}
</script>

<style lang="scss">

.download {
    &:hover &__link {
        color: $yellow;
        text-decoration: none;
    }
    &:hover i {
        color: $yellow;
    }
    &__img {
        color: $grayText;
    }
    &__imgLink i {
        font-size: 55px;
        color: gray;
    }
    &__MB {
        @include miniText($gray_4, Montserrat)
    }
    &__link {
        @include miniText($grayText, Montserrat)
    }
}

</style>
