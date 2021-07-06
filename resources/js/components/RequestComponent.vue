<template>
    <div style="padding-left: -15px; background-color: #f3cc29;">
<div class="container-fluid">
    <div class="request">
<!--        <div>-->
            <div class="request__blockLeft">
                <div class="request__text">Хотите арендовать помещение для торговли или склада?</div>
            </div>
            <div class="request__triangle"></div>
<!--        </div>-->
        <div class="request__blockRight">
            <div class="service__linkBlock">
                <router-link class="service__link request__link" :to="{name: 'contact'}">Оставть заявку
                    <div class="request__line"></div>
                </router-link>
            </div>
        </div>
    </div>
</div>
    </div>
</template>

<script>
export default {
    name: "RequestComponent"
}
</script>

<style lang="scss">
.request {
    display: flex;
    background-color: $yellow_2;
    &__blockLeft {
        background-color: $yellow;
        align-self: center;
        margin-left: -15px;
    }
    &__blockRight {
        align-self: center;
    }
    &__text {
        @include newsHeader();
        margin: auto;
    }
    &__triangle {
        border-style: solid;
        border-color:  transparent  $yellow;
    }
    &__line {
        height: 2px;
        background: $whiteText;
        width: 20%;
        transition: 1s;
    }
    @media (min-width: 1200px) {
        &__blockLeft, &__blockRight {
            padding: 25px;
        }
        &__blockLeft {
            min-width: 67%;
        }
        &__text {
            font-size: 25px;
            width: 65%;
        }
        &__triangle {
            border-width: 61px 0 61px 60px;
        }
        &__link {
            font-size: 20px;
        }
    }
    @media (min-width: 992px) and (max-width: 1200px) {
        &__blockLeft, &__blockRight {
            padding: 20px;
        }
        &__text {
            font-size: 25px;
            width: 70%;
        }
        &__triangle {
            border-width: 56px 0 56px 60px;
        }
        &__link {
            font-size: 19px;
        }
    }
    @media (min-width: 768px) and (max-width: 992px) {
        &__blockLeft, &__blockRight {
            padding: 17px;
        }
        &__text {
            font-size: 20px;
            width: 80%;
        }
        &__triangle {
            border-width: 53px 0 53px 60px;
        }
        &__link {
            font-size: 17px;
        }
    }
    @media (min-width: 576px) and (max-width: 768px) {
        &__blockLeft, &__blockRight {
            padding: 15px;
        }
        &__blockRight {
            min-width: 134px;
        }
        &__text {
            font-size: 18px;
            width: 90%;
        }
        &__triangle {
            border-width: 50px 0 50px 30px;
        }
        &__link {
            font-size: 16px;
        }
    }
    @media (max-width: 576px) {
        &__blockLeft, &__blockRight {
            padding: 5px;
        }
        &__blockRight {
            min-width: 101px;
        }
        &__text {
            font-size: 16px;
            width: 90%;
        }
        &__triangle {
            border-width: 41px 0 41px 30px;
        }
        &__link {
            font-size: 14px;
        }
    }
    @media (max-width: 386px) {
        &__text {
            line-height: 25px;
        }
    }
}
</style>
