<template>
    <Breadcrumbs/>
</template>

<script>
export default {
name: "BreadcrumbComponent"
}
</script>

<style lang="scss">

.breadcrumb {
    background-color: rgb(233 236 239 / 0%) !important;
}

.my_css {
    color: $whiteText;
    &:hover {
        text-decoration: none;
        color: $yellow;
    }
}

</style>
