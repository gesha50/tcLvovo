<template>
<div>
    <div class="bgForBreadcrumb"></div>
    <div class="container blockForBreadcrumd">
        <div class="d-flex justify-content-between p-3">
            <h1 class="blockForBreadcrumd__header">{{ headerText }}</h1>
            <div class="blockForBreadcrumd__contact">
                <a class="blockForBreadcrumd__link" href="#">Связаться с нами
                    <div class="line"></div></a>
            </div>
        </div>
        <breadcrumb-component></breadcrumb-component>
    </div>
    <div style="margin-bottom: -237px" class="container">
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

<style scoped>

</style>
