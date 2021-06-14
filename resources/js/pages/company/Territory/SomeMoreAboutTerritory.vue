<template>
<div class="someMoreAboutTerritory">
    <div>
        <b-button
            :class="visible ? 'someMoreAboutTerritory__collapsed' : 'bg-light'"
            :aria-expanded="visible ? 'true' : 'false'"
            aria-controls="'collapse-'+item.id"
            @click="visible = !visible"
            class="m-1"
        >
            <i class="someMoreAboutTerritory__icon fas fa-caret-right"></i>
        </b-button>
        <header class="someMoreAboutTerritory__header">{{ item.header }}</header>
        <b-collapse :id="'collapse-'+item.id" v-model="visible">
            <b-card>{{item.text}}</b-card>
        </b-collapse>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            visible: false,
        }
    },
    props: {
        item: Object,
    },
    name: "SomeMoreAboutTerritory",
}
</script>

<style lang="scss">
.someMoreAboutTerritory {
    &__icon {
        color: #c2c2c2;
        transform: rotate(0);
        transition: 0.5s;
    }
    &__collapsed .someMoreAboutTerritory__icon {
        transform: rotate(90deg);
        transition: 0.5s;
        color: #fff;
    }
    &__collapsed {
        background: $yellow_2 !important;
        & + .someMoreAboutTerritory__header {
            color: $yellow_2;
        }
    }
    &__header {
        display: inline-block;
    }
}
.card {
    border: none !important;
}
.btn-secondary {
    border: none !important;
}
</style>
