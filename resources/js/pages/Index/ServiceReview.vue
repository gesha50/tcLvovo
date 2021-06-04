<template>
    <div class="container">
        <div class="service">
            <div class="d-flex">
                <div class="col-md-6 service__img"></div>
                <div class="col-md-6 p-2 d-flex">
                    <div class="service__rightBlock">
                        <div class="service__decor">
                            <div class="decor"></div>
                        </div>
                        <div class="service__textBlock">
                            <p class="service__heading">Мы предоставляем различные услуги</p>
                            <p class="service__text">Многие наши сотрудники трудятся для Вашего блага! Хотите ознакомится со всеми услугами, которые мы предоствляем?</p>
                            <div class="service__linkBlock">
                                <router-link :to="{name: 'services'}" class="service__link">Наши услуги
                                    <div class="line"></div>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ServiceReview"
}
</script>

<style lang="scss">
.service {
    background: $whiteText;
    &__img {
        background: url("../../assets/img/serviceMan.jpeg") center center no-repeat;
        height: 400px;
        width: 100px;
        background-size: contain;
        text-align: center;
    }
    &__rightBlock {
        margin: auto;
    }
    &__textBlock {
        padding-left: 30px;
        width: 75%;
    }
    &__heading {
        color: #111111;
        font-family: "Montserrat_light";
        font-size: 35px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: normal;
        line-height: 40px;
        text-align: left;
    }
    &__text {
        color: $grayText;
        font-family: "Montserrat";
        font-size: 16px;
        font-weight: 300;
        font-style: normal;
        letter-spacing: normal;
        line-height: 25px;
        text-align: left
    }
    &__linkBlock {
        display: inline-block;
    }
    &__link {
        color: $textBlack;
        font-family: "Montserrat - Semi Bold";
        font-size: 16px;
        font-weight: 400;
        font-style: normal;
        letter-spacing: normal;
        line-height: 30px;
        text-align: left;
        &:hover {
            text-decoration: none;
            color: $hoverForTextBlack;
        }
        &:hover .line {
            width: 100%;
        }
        &:hover .request__line {
            width: 100%;
        }
    }
}

.line {
    height: 2px;
    background: $yellow;
    width: 20%;
    transition: 1s;
}

.decor {
    width: 30px;
    height: 30px;
    border-top: solid 2px $yellow;
    border-left: solid 2px $yellow;
}
</style>
