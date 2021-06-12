<template>
    <div>
        <top-image
            :headerText="headerText"
        ></top-image>
        <div class="container">
            <div style="background: white">
                <div class="row">
                    <div class="col-md-3">
                        <aside-menu-component></aside-menu-component>
                        <aside-documents-component></aside-documents-component>
                    </div>
                    <div class="list col-md-9">
                        <div class="contentBlock">
                            <router-view />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <yandex-map
            v-if="currentRoute === 'territory'"
        ></yandex-map>
        <request-component></request-component>
    </div>
</template>

<script>
import AsideMenuComponent from "../../components/AsideMenuComponent";
import AsideDocumentsComponent from "../../components/AsideDocumentsComponent";
import TopImage from "../../components/TopImage";
import RequestComponent from "../../components/RequestComponent";
import YandexMap from "../Contact/YandexMap";
export default {
    data() {
      return {
          headerText: 'Наша компания',
      }
    },
    name: "ContentComponent",
    components: {
        AsideMenuComponent,
        AsideDocumentsComponent,
        TopImage,
        RequestComponent,
        YandexMap,
    },
    computed: {
      currentRoute(){
            return this.$route.name
        },
    },
}
</script>

<style lang="scss">

.companyContent {
    position: relative;
    background: $whiteText;
    margin-top: 575px;
    z-index: -1;
}
.list {
    min-height: 237px;
    position: relative;
    &__triangle {
        content: '';
        position: absolute;
        right: 15px;
        top: -60px;
        border: 30px solid transparent;
        border-bottom: 30px solid  #e1e1e1;
        border-left: 30px solid  #e1e1e1;
    }
}
.contentBlock {
    padding-right: 60px;
}
</style>
