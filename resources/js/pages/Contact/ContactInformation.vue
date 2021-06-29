<template>
<div>
    <h3>Контактная Информация</h3>
    <p>
        Вы можете связаться с нами любым удобным для вас способом. Будем рады ответить на ваши вопросы.
    </p>
    <div class="row contact">
        <i class="contact__img col-3 fas fa-phone-alt"></i>
        <div class="contact__body col-9">
            {{ phone }} - офис
        </div>
    </div>
    <div class="darkLine"></div>
    <div class="row">
        <i class="contact__img col-3 fas fa-map-marked-alt"></i>
        <div class="contact__body col-9">
            {{ address }}
        </div>
    </div>
    <div class="darkLine"></div>
    <div class="row">
        <i class="contact__img col-3 fab fa-telegram-plane"></i>
        <div class="contact__body col-9">
            <a :href="'mailto:'+ email ">
                {{ email }}
            </a>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "ContactInformation",
    data() {
        return {
            phone: '',
            address: '',
            email: '',
        }
    },
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
.contact{
    &__body{
        text-align: center;
        align-self: center;
        &:hover {
            color: $yellow;
        }
        & a {
            color: $textBlack;
            cursor: pointer;
            &:hover {
                color: $yellow;
                text-decoration: none;
            }
        }
    }
    &__img{
        text-align: center;
        font-size: 70px;
        color: $yellow;
    }
}
</style>
