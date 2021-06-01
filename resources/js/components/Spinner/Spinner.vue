<template>
    <div class="spinner">
        <b-spinner :variant="'warning'" type="grow" label="Loading..."></b-spinner>
    </div>
</template>

<script>
export default {
    name: "Spinner"
}
</script>

<style lang="scss">
.spinner {
    margin: 80px 0;
    text-align: center;
}
</style>
