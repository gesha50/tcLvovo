<template>
    <div class="container">
        <div class="miniPartners d-flex justify-content-center">
            <div class="miniPartners__block">
                <div class="miniPartners__decor">
                    <div class="decor"></div>

                </div>
                <div class="miniPartners__heading">У нас Вы найдёте</div>
                <div class="miniPartners__body">
                    Множество различных брендов, которые сейчас популярны во всём мире!
                </div>
                <div class="miniPartners__footer">
                    <a href="#" class="miniPartners__link">Все бренды
                        <div class="line"></div>
                    </a>
                </div>
            </div>
            <div class="miniPartners__block row">
                <img src="/storage/unis.png" alt="" class="miniPartners__img">
                <img src="/storage/5.jpeg" alt="" class="miniPartners__img">
                <img src="/storage/dulux.png" alt="" class="miniPartners__img">
                <img src="/storage/knauf.png" alt="" class="miniPartners__img">
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "Partners"
}
</script>

<style lang="scss">
.miniPartners {
    padding: 100px 0;
    background: #ffffff;
    &__block {
        width: 30%;
        position: relative;
    }
    &__decor{
        position: absolute;
        left: -30px;
        top: -30px;
    }
    &__heading {
        @include heading($textBlack);
    }
    &__body {
        @include miniBodyText($grayText, Montserrat);
        margin: 30px 0;
    }
    &__footer {
        display: inline-block;
    }
    &__link {
        @include miniBodyText($textBlack, $MontserratSB);
        &:hover {
            text-decoration: none;
            color: $hoverForTextBlack;
        }
        &:hover .line {
            width: 100%;
        }
    }
    &__img {
        width: 46%;
        margin: 2%;
        object-fit: contain;
        opacity: 0.5;
        &:hover {
            opacity: 1;
        }
    }
}
</style>
