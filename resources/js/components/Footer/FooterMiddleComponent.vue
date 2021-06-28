<template>
    <div class="footerMiddle d-flex flex-row flex-wrap">
        <div class="footerMiddle__block col-12 col-md-4">
            <div class="footerLinks">
                <div class="footerLinks__header">
                    Быстрые ссылки
                </div>
                <hr>
                <ul class="footerLinks__body">
                    <li class="footerLinks__li">
                        <router-link :to="{name: 'index'}" class="footerLinks__link">Главная</router-link>
                    </li>
                    <li class="footerLinks__li">
                        <router-link :to="{name: 'company'}" class="footerLinks__link">О нас</router-link>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footerMiddle__block col-12 col-md-4">
            <div class="footerHours">
                <div class="footerHours__header">
                    Часы работы
                </div>
                <hr>
                <div class="footerHours__body">
                    <div class="footerHours__block d-flex justify-content-between">
                        <div class="footerHours__day flex-shrink-0">Пн - Пт:</div>
                        <div class="footerHours__line w-100"></div>
                        <div class="footerHours__time flex-shrink-0">9:00 - 21:00</div>
                    </div>
                    <div class="footerHours__block d-flex justify-content-between">
                        <div class="footerHours__day flex-shrink-0">Суббота:</div>
                        <div class="footerHours__line w-100"></div>
                        <div class="footerHours__time flex-shrink-0">9:00 - 20:00</div>
                    </div>
                    <div class="footerHours__block d-flex justify-content-between">
                        <div class="footerHours__day flex-shrink-0">Воскресенье:</div>
                        <div class="footerHours__line w-100"></div>
                        <div class="footerHours__time flex-shrink-0">9:00 - 20:00</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerMiddle__block col-12 col-md-4">
            <div class="footerEmail">
                <div class="footerEmail__header">
                    Обратная связь
                </div>
                <hr>
                <div class="footerEmail__send">
                    <form class="d-flex" action="#" method="POST">
                        <input type="text" class="footerEmail__input"
                               placeholder="Введите ваш email">
                        <div class="footerEmail__fullBtn d-flex">
                            <div class="footerEmail__btnLeft"></div>
                            <button class="footerEmail__btn">Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="footerEmail__body">
                    <p>Мы с вами свяжемся в ближайшее время! Спасибо!</p>
                </div>
                <div class="footerEmail__footer">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FooterMiddleComponent",
}
</script>

<style lang="scss">
.footerMiddle {
    background: $black_2;
    color: $white;
    @media (min-width: 1200px) {
        padding: 0 110px;
    }
    @media (min-width: 992px) and (max-width: 1200px) {
        padding: 0 110px;
    }
    @media (min-width: 768px) and (max-width: 992px) {
        padding: 0 50px;
    }
    @media (max-width: 768px) {
        padding: 0 10px;
        display: block;
    }
    &__block {
        @media (min-width: 768px) {
            padding: 60px 0;
        }
        @media (max-width: 768px) {
            padding: 10px 0;
        }
    }
}
.footerLinks hr,
.footerHours hr,
.footerHours__block hr,
.footerEmail hr {
    background: $gray_2;
}

.footerLinks {
    &__header {
        @include miniHeader($whiteText, $MontserratSB);
    }
    &__li {
        color: #555555;
    }
    &__link {
        @include miniBodyText($gray_2, Montserrat);
        &:hover {
            text-decoration: none;
            color: $yellow;
        }
    }
}

.footerHours {
    &__header {
        @include miniHeader($whiteText, $MontserratSB);
    }
    &__body {

    }
    &__day {
        @include miniBodyText($gray_2, Montserrat);
    }
    &__line {
        border-bottom: 1px dashed $gray_2;
    }
    &__time {
        @include miniBodyText($whiteText, Montserrat);
    }
}

.footerEmail {
    &__header {
        @include miniHeader($whiteText, $MontserratSB);
    }
    &__send {

    }
    &__email {

    }
    &__input {
        width: 280px;
        border-radius: 3px 0 0 3px;
        background-color: #131313;
        height: 52px;
        border: none;
        @include miniBodyText($gray_2, $MontserratSB);
    }
    &__btnLeft {
        border: 26px solid transparent;
        border-right: 30px solid $green;
        display: block;
        width: 0;
        height: 0;
        margin-left: -140px;
    }
    &__btn {
        height: 52px;
        border-radius: 0 3px 3px 0;
        background-color: $green;
        border: none;
        @include miniBodyText($whiteText, $MontserratSB);
        transition: 1s;
    }
    &__fullBtn:hover &__btnLeft {
        border-right: 30px solid darken($green, 20);
    }
    &__fullBtn:hover &__btn {
        background: darken($green, 20);
    }
    &__btnLeft {
        transition: 1s;
    }
    &__body {
        padding-top: 20px;
        color: $gray_3;
        @include miniBodyText($gray_3, Montserrat);
        font-size: 14px;
    }
}
</style>
