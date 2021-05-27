<template>
    <div class="container miniContact d-flex justify-content-center">
        <div class="miniContact__block col-md-4">
            <i class="miniContact__img fas fa-phone-alt"></i>
            <div class="miniContact__body">{{ phone }} - офис</div>
            <div class="miniContact__line"></div>
        </div>
        <div class="miniContact__block2 col-md-4">
            <i class="miniContact__img fas fa-map-marked-alt"></i>
            <div class="miniContact__body">{{ address }}</div>
            <div class="miniContact__line"></div>
        </div>
        <div class="miniContact__block3 col-md-4">
            <i class="miniContact__img fab fa-telegram-plane"></i>
            <div class="miniContact__body"><a :href="'mailto:'+ email ">{{ email }}</a></div>
            <div class="miniContact__line"></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            phone: '',
            address: '',
            email: '',
        }
    },
    name: "Contact",
    mounted() {
        this.getContact()
    },
    methods: {
        getContact() {
            axios.get('/api/contact')
            .then(res => {
                this.phone = res.data.phone
                this.address = res.data.address
                this.email = res.data.email
            })
        },
    }
}
</script>

<style lang="scss">
.miniContact {
    &__block,
    &__block2,
    &__block3 {
        text-align: center;
        padding: 50px;
        position: relative;
    }
    &__block {
        background-color: $yellow;
    }
    &__block2 {
        background-color: darken($yellow, 5%);
    }
    &__block3 {
        background-color: darken($yellow, 10%);
    }
    &__img {
        font-size: 80px;
    }
    &__body {
        @include miniBodyText($textBlack, Montserrat);
        margin: 30px 0;
        text-align: center;
    }
    &__body a {
        @include miniBodyText($textBlack, Montserrat);
        &:hover {
            color: $hoverForTextBlack;
            text-decoration: none;
        }
    }

    &__line {
        width: 40px;
        height: 2px;
        background: $textBlack;
        position: absolute;
        bottom: 50px;
        left: calc(50% - 20px);
    }
}
</style>
