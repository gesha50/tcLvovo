<template>
<div>
    <top-image
        :headerText="'Контакты'"
    ></top-image>
    <div class="container">
            <div class="pl-5 pr-5 pb-5" style="min-height: 237px; background: white;">
                <div class="row">
                    <div class="col-md">
                        <h2 class="contactHeader">Мы работаем для вас!</h2>
                    </div>
                </div>
                <div class="fullLine"></div>
                <div class="row">
                    <div class="col-md-6 contactBlock">
                        <contact-information></contact-information>
                    </div>
                    <div class="col-md-6 contactBlock">
                       <feed-back></feed-back>
                    </div>
                </div>
            </div>
    </div>
    <YandexMap></YandexMap>
</div>
</template>

<script>
import TopImage from "../../components/TopImage";
import YandexMap from "./YandexMap";
import FeedBack from "./FeedBack";
import ContactInformation from "./ContactInformation";

export default {
    name: "ContactIndex",
    components: {
        TopImage,
        YandexMap,
        FeedBack,
        ContactInformation,
    },
}
</script>

<style lang="scss">
.contactHeader  {
    @include superHeader($textBlack, "Montserrat - Ultra Light");
}
.fullLine {
    height: 1px;
    width: 100%;
    background: $yellow;
    margin-bottom: 35px;
}
.darkLine {
    width: 80%;
    height: 1px;
    background: $gray_4;
    margin: 30px 0;
}
.contactBlock{
    & h3 {
        @include miniHeader($textBlack, Montserrat);
    }
    & p {
        @include miniBodyText($grayText, Montserrat);
        padding: 25px 0;
    }
}
</style>
