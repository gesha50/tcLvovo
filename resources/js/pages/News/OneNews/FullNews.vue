<template>
<div>
    {{oneNews.title}}
    {{ oneNews.preview}}
    {{ oneNews.description}}

</div>
</template>

<script>
export default {
    name: "FullNews",
    props: {
        oneNews: Array | Object,
    }
}
</script>

<style lang="scss">

</style>
