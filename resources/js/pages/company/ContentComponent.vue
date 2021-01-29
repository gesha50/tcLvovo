<template>
    <div class="container">
        <div class="companyContent">
            <div class="row">
                <div class="col-md-3">
                    <aside-component></aside-component>
                </div>
                <div class="col-md-9">
                    <router-view />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AsideComponent from "../../components/AsideComponent";
export default {
name: "ContentComponent",
    components: {AsideComponent}
}
</script>

<style lang="scss">
.companyContent {
    background: $whiteText;
    margin-top: 575px;
}
</style>
