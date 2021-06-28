<template>
    <div class="container-lg mobile-padding-r-l-0">
        <div class="statistic">
            <div class="row">
                <div class="statistic__number p-2 offset-1">{{ works_room }}</div>
                <div class="statistic__textBlock p-2 offset-1">
                    <p class="statistic__textUp">Помещений</p>
                    <p class="statistic__textDown">сейчас в работе!</p>
                </div>
            </div>

            <div class="statistic__order p-2">
                <div class="miniOrder">
                    <div class="miniOrder__up p-3">
                        <div class="miniOrder__upText">
                            Хотите арендовать помещение?
                        </div>
                    </div>
                    <div class="miniOrder__down">
                        <div class="miniOrder__blockText p-2">
                            <a href="#">Оставьте заявку!</a>
                        </div>
                        <div class="miniOrder__triangleLeft"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RentPlace",
    props: {
        works_room: Number,
    },
}
</script>

<style lang="scss">
.statistic {
    position: relative;
    background-color: $textBlack;
    color: $whiteText;
    padding-left: -15px;
    padding-right: -15px;
    &__number {
        height: 100px;
        width: 100px;
        background: url("../../assets/img/angar_3.png") center center no-repeat;
        background-size: cover;
        text-align: center;
        font-size: 30px;;
        color: $yellow;
    }
    &__order {
        @media (min-width: 992px) {
            width: 25%;
        }
        @media (min-width: 768px) and (max-width: 992px) {
            width: 250px;
        }
        @media (min-width: 576px) and (max-width: 768px) {
            width: 200px;
        }
        @media (max-width: 576px) {
            width: 150px;
        }
        position: absolute;
        top: -96px;
        left: 65%;
    }
    &__textUp {
        font-family: "Montserrat";
        font-size: 30px;
        @media (max-width: 576px) {
            font-size: 22px;
        }
    }
    &__textDown {
        color: $grayText;
        font-family: "CrimsonText_Italic";
        font-size: 16px;
        font-style: italic;
        letter-spacing: normal;
    }
}
.miniOrder {
    &__up {
        background-color: $textBlack;
        opacity: 0.7;
    }
    &__upText {
        color: $whiteText;
        font-family: Montserrat;
        font-size: 18px;
    }
    &__down {
        background: $yellow;
    }
    &__blockText {
        text-align: center;
    }
    &__blockText a {
        text-decoration: none;
        color: $textBlack;
        font-family: "Montserrat";
        font-size: 16px;
        transition: 0.5s;
        display: block;
        @media (max-width: 576px) {
            font-size: 13px;
        }
        &:hover {
            text-decoration: none;
            color: $hoverForTextBlack;
            font-size: 20px;
            @media (max-width: 576px) {
                font-size: 16px;
            }
        }
    }
    &__triangleLeft {
        background: $yellow;
        border-style: solid;
        border-color:  transparent  $textBlack;
        @media (min-width: 1200px) {
            border-width: 30px 130px 0px 131px;
        }
        @media (min-width: 992px) and (max-width: 1200px) {
            border-width: 30px 109px 0px 109px;
        }
        @media (min-width: 768px) and (max-width: 992px) {
            border-width: 30px 118px 0px 118px
        }
        @media (min-width: 576px) and (max-width: 768px) {
            border-width: 30px 92px 0px 92px;
        }
        @media (max-width: 576px) {
            border-width: 30px 67px 0px 68px;
        }
    }
}
</style>
