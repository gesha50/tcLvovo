<template>
    <div class="ourMission">
        <div class="ourMission__block row justify-content-between">
            <mission-block
                v-for="item in 3" :key="item"
            ></mission-block>
        </div>
    </div>
</template>

<script>
import MissionBlock from "./MissionBlock";

export default {
    name: "OurMission",
    components: {
      MissionBlock,
    },
}
</script>

<style lang="scss">
.ourMission {
    margin-bottom: 40px;
}
</style>
