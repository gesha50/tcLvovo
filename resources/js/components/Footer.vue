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

<style scoped>

</style>
