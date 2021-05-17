<template>
    <footer class="footer">
        <div class="container">
            <div class="footerUp d-flex justify-content-center">
                <div class="footerUp__aboutUs">
                    <div class="aboutUsMini p-3">
                        <div class="aboutUsMini__topText">
                            <img class="aboutUsMini__img" width="25px" src="/storage/без_фона.png" alt="">
                            <span class="aboutUsMini__headingText">{{ name }}</span>
                            <span class="aboutUsMini__nearHeadingText">торговый комплекс</span>
                        </div>
                        <div class="aboutUsMini__bodyText">
                            {{ description }}
                        </div>
                        <div class="aboutUsMini__socIcons">
                            <div class="socIcons d-flex">
                                <i class="socIcons__facebook fab fa-facebook-f"></i>
                                <i class="socIcons__vk fab fa-vk"></i>
                                <i class="socIcons__google fab fa-google-plus-g"></i>
                                <i class="socIcons__youtube fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerUp__news p-3">
                    <div class="newsMini">
                        <div class="newsMini__header d-flex justify-content-between">
                            <div class="newsMini__headerText">Новости</div>
                            <div class="newsMini__cursor d-flex justify-content-between">
                                <i class="fas fa-chevron-left"></i>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="newsMini__img col-md-6">
                                <img width="100%" src="/storage/slider_1.jpeg" alt="">
                            </div>
                            <div class="newsMini__bodyText col-md-6">
                                <p class="newsMini__date">29 октября 2020</p>
                                <p class="newsMini__text">Текст самой новости Текст самой новости Текст самой новости</p>
                            </div>
                        </div>
                        <div class="newsMini__footer">
                            <a href="#" class="newsMini__link">Все новости
                                <div class="line"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<!--            -->
            <div class="footerMiddle d-flex justify-content-around">
                <div class="footerMiddle__block">
                    <div class="footerLinks">
                        <div class="footerLinks__header">
                            Быстрые ссылки
                        </div>
                        <hr>
                        <ul class="footerLinks__body">
                            <li class="footerLinks__li">
                                <a href="/" class="footerLinks__link">Главная</a>
                            </li>
                            <li class="footerLinks__li">
                                <a href="/" class="footerLinks__link">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerMiddle__block">
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
                <div class="footerMiddle__block">
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
<!--            -->
            <div class="footerDown d-flex justify-content-around">
                <div class="footerDown__date"><p>{{ year }}</p>  {{ company_name }}</div>
                <div class="footerDown__privacy"><a href="#">Политика конфиденциальности</a></div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
      return {
          name: '',
          company_name: '',
          description: '',
          year: (new Date()).getFullYear(),
      }
    },
    name: "Footer",
    mounted() {
      this.getInformation()
    },
    methods: {
        getInformation() {
            axios.get('/api/information')
            .then(res => {
                console.log(res.data)
                this.name = res.data.name
                this.company_name = res.data.company_name
                this.description = res.data.description
            })
        },
    },
}
</script>

<style lang="scss">
.footerUp {
    background: $textBlack;
    color: $white;
    padding: 60px 0;
    &__aboutUs,
    &__news {
        width: 40%;
    }
    &__aboutUs {

    }
    &__news {

    }
}

.aboutUsMini {
    &__topText {

    }
    &__img {
        margin-top: -12px;
    }
    &__headingText {
        @include miniHeader($whiteText, Montserrat);
        padding-right: 20px;
    }
    &__nearHeadingText {
        color: $whiteText;
        font-family: "CrimsonText_Italic";
        font-size: 15px;
        font-style: italic;
        letter-spacing: normal;
        line-height: 36px;
    }
    &__bodyText {
        @include miniBodyText($gray_2, Montserrat_light);
    }
    &__socIcons {
        padding-top: 20px;
    }
}

.socIcons {
    &__vk,
    &__google,
    &__youtube,
    &__facebook {
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px;
        margin: 0;
        padding: 0;
        transition: 0.5s;
        &:hover {
            transform: scale(1.2);
            cursor: pointer;
        }
    }
    &__facebook {
        background-color: #3a589b;
    }
    &__vk {
        background-color: #007ab9;
    }
    &__google {
        background-color: #dc493c;
    }
    &__youtube {
        background-color: #cc2626;
    }
}

.newsMini {
    &__header {

    }
    &__headerText {
        @include miniHeader($whiteText, Montserrat);
    }
    &__cursor {
        width: 30px;
    }
    &__cursor i:hover {
        color: $yellow;
    }

    &__date {
        @include forDate($grayText);
    }
    &__text {
        @include miniBodyText($yellow, Montserrat_light);
    }
    &__footer {
        display: inline-block;
    }

    &__link {
        @include miniBodyText($white,$MontserratSB);

        &:hover {
            text-decoration: none;
            color: $grayText;
            cursor: pointer;
        }
    }

    &__link:hover .line {
        width: 100%;
    }
}
.newsMini hr {
    background: $gray_2;
}

.footerMiddle {
    background: $black_2;
    color: $white;
    padding: 0 110px;
    &__block {
        width: 30%;
        padding: 60px 0;
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
        border-radius: 3px 0 0 3px;
        background-color: #131313;
        height: 52px;
        border: none;
        @include miniBodyText($gray_2, $MontserratSB);
    }
    &__btnLeft {
        background: $green;
        border-style: solid;
        border-color: transparent #131313;
        transform: rotate(90deg);
        border-width: 20px 26px 0px 26px;
        margin-left: -30px;
    }
    &__btn {
        height: 52px;
        border-radius: 0 3px 3px 0;
        background-color: $green;
        border: none;
        @include miniBodyText($whiteText, $MontserratSB);
        transition: 1s;
        //&:hover {
        //    background: darken($green, 20);
        //}
    }
    &__fullBtn:hover &__btnLeft,
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

.footerDown {
    //margin: 0 -15px;
    padding: 25px 0;
    background-color: $black_3;
    &__date {
        @include miniBodyText($gray_3, Montserrat);
        font-size: 14px;
    }
    &__date p {
        display: inline;
        @include miniBodyText($yellow, Montserrat);
        font-size: 14px;
        padding-right: 5px;
    }
    &__privacy a {
        @include miniBodyText($gray_3, Montserrat);
        font-size: 14px;
        &:hover {
            text-decoration: none;
            color: $yellow;
        }
    }
}
</style>
