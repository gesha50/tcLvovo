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
                    <div class="contentBlock">
                        <router-view />
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
import AsideMenuComponent from "../../components/AsideMenuComponent";
import AsideDocumentsComponent from "../../components/AsideDocumentsComponent";
import BreadcrumbComponent from "../../components/Breadcrumbs/BreadcrumbComponent";
export default {
    name: "ContentComponent",
    components: {
        AsideMenuComponent,
        AsideDocumentsComponent,
        BreadcrumbComponent,
    },
}
</script>

<style lang="scss">
.bgForBreadcrumb {
    background: url("../../assets/img/stroyka.png") center center;
    filter: brightness(40%);
    background-size: cover;
    height: 550px;
    position: relative;
    z-index: -22;
}

.blockForBreadcrumd {
    position: relative;
    margin: -480px auto;
    z-index: 1;
    &__header {
        @include heading ($whiteText);
    }
    &__link {
        @include miniBodyText ($whiteText, $MontserratSB);
        &:hover .line {
            width: 100%;
        }
        &:hover {
            text-decoration: none;
            color: $whiteText;
        }
    }
}

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
.contentBlock {
    padding-right: 60px;
}
</style>
