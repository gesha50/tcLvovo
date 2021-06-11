<template>
    <div class="allService container  d-flex justify-content-center">
        <div
            v-for="service in services"
            :key="service.id"
            class="allService__block col-md-4"
        >
            <div class="miniServiceBlock d-flex justify-content-between">
                <div class="miniServiceBlock__img">
                    <img src="/storage/icon.png" alt="">
                </div>
                <div class="miniServiceBlock__info">
                    <div class="miniServiceBlock__heading">
                        {{service.service_name}}
                    </div>
                    <div class="miniServiceBlock__body">
                        {{ service.preview}}
                    </div>
                    <div class="miniServiceBlock__line"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
      return {
          services: [],
      }
    },
    name: "AllServices",
    mounted() {
        this.getServices()
    },
    methods: {
      getServices() {
          axios.get('/api/services')
          .then(res => {
              for (let i=0;i<3;i++) {
                  this.services.push(res.data[i])
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
.allService {
    &__block:nth-child(1) {
        background-color: $yellow;
    }
    &__block:nth-child(2) {
        background-color: darken($yellow, 5%);
    }
    &__block:nth-child(3) {
        background-color: darken($yellow, 10%);
    }
}

.miniServiceBlock {
    padding: 55px 0;
    &__img img {
        width: 110px;
        padding: 0 25px;
        margin: 25px 0;
    }
    &__info {

    }
    &__heading {
        @include miniHeader($textBlack ,Montserrat);
        margin-bottom: 10px;
    }
    &__body {
        @include forDate($textBlack);
    }
    &__line {

    }
}
</style>
