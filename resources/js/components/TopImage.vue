<template>
<div>
    <div class="bgForBreadcrumb"></div>
    <div class="container-lg blockForBreadcrumb">
        <div class="d-flex justify-content-between p-2">
            <h1 class="blockForBreadcrumb__header">{{ headerText }}</h1>
            <div class="blockForBreadcrumb__contact">
                <router-link
                    class="blockForBreadcrumb__link"
                    :to="{name: 'contact'}"
                >Связаться с нами
                    <div class="line"></div>
                </router-link>
            </div>
        </div>
        <breadcrumb-component></breadcrumb-component>
    </div>
    <div style="margin-bottom: -237px" class="container-lg">
        <div class="companyContent">
            <div class="d-flex topContent">
                <div class="whiteBlock"></div>
                <div class="clearBlock"></div>
            </div>
            <div style="position: relative; height: 238px" class="row">
                <div class="list__triangle"></div>
            </div>
        </div>
    </div>
</div>
</template>

<script>

import BreadcrumbComponent from "./Breadcrumbs/BreadcrumbComponent";

export default {
    name: "TopImage",
    props: {
      headerText: String,
    },
    components: {
        BreadcrumbComponent,
    },
}
</script>

<style lang="scss">
.bgForBreadcrumb {
    background: url("../assets/img/stroyka.png") center center;
    filter: brightness(40%);
    background-size: cover;
    height: 550px;
    position: relative;
    z-index: -22;
}

.blockForBreadcrumb {
    position: relative;
    margin: -480px auto;
    z-index: 1;
    &__header {
        @include heading ($whiteText);
    }
    &__link {
        @include miniBodyText ($whiteText, $MontserratSB);
        @media (max-width: 350px) {
            font-size: 14px;
            line-height: 16px;
        }
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
</style>
