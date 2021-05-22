<template>
<div>
    <top-image
        :headerText="'Страница не найдена'"
    ></top-image>
    <div class="container">
        <div style="background: white">
            <div class="list">
                <h1>Ошибка</h1>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";
import TopImage from "../components/TopImage";

export default {
    name: "404",
    components: {
        Header,
        Footer,
        TopImage,
    },
}
</script>

<style scoped>

</style>
