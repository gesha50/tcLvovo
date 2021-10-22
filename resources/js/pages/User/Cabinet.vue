<template>
    <div>
        <top-image
            :headerText="'Личный Кабинет'"
        ></top-image>
        <div class="container-lg">
            <div style="background: white">
                <div class="row">
                    <div class="col-12 px-5">
                        hgkvjb
                    </div>
                </div>
            </div>
        </div>
        <request-component></request-component>
    </div>
</template>

<script>
import TopImage from "../../components/TopImage";
import RequestComponent from "../../components/RequestComponent";

export default {
    name: "Cabinet",
    components: {
        TopImage,
        RequestComponent,
    },
}
</script>

<style scoped>

</style>
