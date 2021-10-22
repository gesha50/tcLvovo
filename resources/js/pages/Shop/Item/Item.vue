<template>
<div class="">
    {{ item.title }}
</div>
</template>

<script>
export default {
    name: "Item",
    props: ['slug', 'item'],
    created() {
        console.log(this.$route)
    }
}
</script>

<style scoped>

</style>
