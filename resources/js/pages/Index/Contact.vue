<template>
    <div class="container miniContact d-flex justify-content-center">
        <div class="miniContact__block col-md-4">
            <img src="/storage/icon-phone.png" alt="" class="miniContact__img">
            <div class="miniContact__body">{{ phone }} - офис</div>
            <div class="miniContact__line"></div>
        </div>
        <div class="miniContact__block2 col-md-4">
            <img src="/storage/icon-location.png" alt="" class="miniContact__img">
            <div class="miniContact__body">{{ address }}</div>
            <div class="miniContact__line"></div>
        </div>
        <div class="miniContact__block3 col-md-4">
            <img src="/storage/icon-plane.png" alt="" class="miniContact__img">
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

<style scoped>

</style>
