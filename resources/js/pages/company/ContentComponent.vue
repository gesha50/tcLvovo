<template>
    <div>
    <div class="bgForBreadcrumb"></div>
    <div class="container blockForBreadcrumd">
        <div class="d-flex justify-content-between p-3">
            <h1 class="blockForBreadcrumd__header">Наша компания</h1>
            <div class="blockForBreadcrumd__contact">
                <a class="blockForBreadcrumd__link" href="#">Связаться с нами
                    <div class="line"></div></a>
            </div>
        </div>
        <breadcrumb-component></breadcrumb-component>
    </div>
    <div class="container">
        <div class="companyContent">
            <div class="d-flex topContent">
                <div class="whiteBlock"></div>
                <div class="clearBlock"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <aside-menu-component></aside-menu-component>
                    <aside-documents-component></aside-documents-component>
                </div>
                <div class="list col-md-9">
                    <div class="list__triangle"></div>
                    <router-view />
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import AsideMenuComponent from "../../components/AsideMenuComponent";
import AsideDocumentsComponent from "../../components/AsideDocumentsComponent";
export default {
name: "ContentComponent",
    components: {AsideMenuComponent,AsideDocumentsComponent}
}
</script>

<style lang="scss">
.topContent {
    position: absolute;
    top: -60px;
    left: 0;
    height: 60px;
    width: 100%;
}
.whiteBlock{
    background: $whiteText;
    width: 100%;
}
.clearBlock{
    width: 63px;
}
.companyContent {
    position: relative;
    background: $whiteText;
    margin-top: 575px;
}
.list {
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
</style>
