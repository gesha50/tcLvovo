<template>
<div class="container-fluid">
    <div class="row request">
        <div class="col-md-7 p-5 request__blockLeft">
            <div class="request__text">Хотите арендовать помещение для торговли или склада?</div>
        </div>
        <div class="request__triangle col-md-1"></div>
        <div class="col-md-4 p-5 request__blockRight">
            <div class="service__linkBlock">
                <router-link class="service__link request__link" :to="{name: 'contact'}">Оставть заявку
                    <div class="request__line"></div>
                </router-link>
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
    background-color: $yellow_2;
    &__blockLeft {
        background-color: $yellow;
    }
    &__blockRight {
        align-self: center;
    }
    &__text {
        @include newsHeader();
        width: 65%;
        margin: auto;
    }
    &__triangle {
        border-style: solid;
        border-color:  transparent  $yellow;
        border-width: 85px 0 85px 60px;
    }
    &__link {
        font-size: 20px;
    }
    &__line {
        height: 2px;
        background: $whiteText;
        width: 20%;
        transition: 1s;
    }
}
</style>
