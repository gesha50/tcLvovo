<template>
    <div class="container-lg mobile-padding-r-l-0">
        <div class="miniPartners d-flex flex-wrap justify-content-center">
            <div class="miniPartners__block col-12 col-sm-6 p-4 mr-2">
                <div class="miniPartners__decor">
                    <div class="decor"></div>

                </div>
                <div class="miniPartners__heading">У нас Вы найдёте</div>
                <div class="miniPartners__body">
                    Множество различных брендов, которые сейчас популярны во всём мире!
                </div>
                <div class="miniPartners__footer">
                    <router-link :to="{name: 'brands'}" class="miniPartners__link">Все бренды
                        <div class="line"></div>
                    </router-link>
                </div>
            </div>
            <div class="miniPartners__block col-12 col-sm-6 row">
                <img
                    v-for="img in brandsImg"
                    :src="img.image"
                    alt=""
                    class="miniPartners__img"
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Partners",
    data() {
        return {
            brandsImg: [],
        }
    },
    mounted() {
      this.getBrandsImg()
    },
    methods: {
        getBrandsImg() {
          axios.get('/api/brands')
          .then(res => {
              for (let i=0; i<4; i++){
                  this.brandsImg.push(res.data[i])
              }
          })
          .catch(e => {
              console.log(e)
          })
        },
    },
}
</script>

<style lang="scss">
.miniPartners {
    padding: 100px 0;
    background: #ffffff;
    &__block {
        margin: 0 auto;
        position: relative;
        @media (min-width: 992px) {
            width: 30%;
        }
        @media (min-width: 768px) and (max-width: 992px) {
            width: 40%;
        }
        @media (min-width: 576px) and (max-width: 768px) {
            width: 45%;
        }
        @media (max-width: 576px) {
            width: 45%;
        }
    }
    &__decor{
        position: absolute;
        left: -3px;
        top: -3px;
        @media (max-width: 576px) {
            top: -6px;
            left: 6px;
        }
    }
    &__heading {
        @include heading($textBlack);
        @media (max-width: 768px) {
            font-size: 20px;
            line-height: 20px;
        }
    }
    &__body {
        @include miniBodyText($grayText, Montserrat);
        margin: 30px 0;
        width: 80%;
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
    @media (max-width: 576px) {
        padding: 20px 0;
    }
}
</style>
