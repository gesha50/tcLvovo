<template>
    <div class="footerUp d-flex flex-row flex-wrap">
        <div class="footerUp__aboutUs col-12 col-md-6">
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
        <div class="footerUp__news p-3 col-12 col-md-6">
            <mini-news-component
                :news="news"
                :created_at="created_at"
            ></mini-news-component>
        </div>
    </div>
</template>

<script>
import MiniNewsComponent from "../MiniNewsComponent";

export default {
    data() {
        return {
            year: (new Date()).getFullYear(),
            news: {},
            created_at: '',
        }
    },
    props: {
      name: String,
      description: String,
    },
    name: "FooterUpComponent",
    components: {
        MiniNewsComponent,
    },
    mounted() {
        this.getNews()
    },
    methods: {
        getNews() {
            axios.get('/api/lastNews')
                .then(res => {
                    this.news = res.data
                    this.created_at = res.data.created_at
                })
        },
    },
}
</script>

<style lang="scss">
.footerUp {
    background: $textBlack;
    color: $white;
    @media (max-width: 992px) {
        padding: 60px 5px;
    }
    @media (min-width: 992px) {
        padding: 60px 70px;
    }
    &__aboutUs,
    &__news {
        @media (min-width: 1200px) {
            width: 40%;
        }
        @media (min-width: 992px) and (max-width: 1200px) {
            width: 40%;
        }
        @media (min-width: 768px) and (max-width: 992px) {
            width: 47%;
        }
        @media (min-width: 576px) and (max-width: 768px) {
            width: 48%;
        }
        @media (max-width: 576px) {
            width: 49%;
        }
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
</style>
