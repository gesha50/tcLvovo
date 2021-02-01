<template>
    <div class="container">
        <div class="companyContent">
            <div class="row">
                <div class="col-md-3">
                    <aside-menu-component></aside-menu-component>
                    <aside-documents-component></aside-documents-component>
                </div>
                <div class="col-md-9">
                    <router-view />
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
.companyContent {
    background: $whiteText;
    margin-top: 575px;
}
</style>
