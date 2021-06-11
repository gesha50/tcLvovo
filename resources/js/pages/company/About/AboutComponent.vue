<template>
<div class="aboutUs">
    <big-one-response-component></big-one-response-component>
    <div class="aboutUs__header">Добро пожаловать в ТК Львово</div>
    <div class="aboutUs__text">
        В нашем торговом комплексе вы найдете много интересного!
        В нашем торговом комплексе вы найдете много интересного!
        В нашем торговом комплексе вы найдете много интересного!
        В нашем торговом комплексе вы найдете много интересного!
        В нашем торговом комплексе вы найдете много интересного!
    </div>
    <div class="aboutUs__mission">
        <our-mission></our-mission>
    </div>
</div>
</template>

<script>
import BigOneResponseComponent from "../../../components/BigOneResponseComponent";
import OurMission from "./OurMission";

export default {
    name: "AboutComponent",
    components: {
        BigOneResponseComponent,
        OurMission,
    },
}
</script>

<style lang="scss">

.aboutUs {
    &__header {
        @include superHeader($textBlack, "Montserrat - Ultra Light");
        margin: 30px 0;
    }
    &__text {
        @include miniBodyText($grayText, Montserrat);
        margin-bottom: 30px;
    }
    &__mission {

    }
}

</style>
