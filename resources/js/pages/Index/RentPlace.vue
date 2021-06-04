<template>
    <div class="container">
        <div class="statistic">
            <div class="row">
                <div class="statistic__number p-2 offset-2">{{ works_room }}</div>
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
        width: 25%;
        position: absolute;
        top: -96px;
        left: 65%;
    }
    &__textUp {
        font-family: "Montserrat";
        font-size: 30px;
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
        &:hover {
            text-decoration: none;
            color: $hoverForTextBlack;
            font-size: 20px;
        }
    }
    &__triangleLeft {
        background: $yellow;
        border-style: solid;
        border-color:  transparent  $textBlack;
        border-width: 30px 130px 0px 131px;
    }
}
</style>
