<template>
    <div class="newsDataBlock">
        <div class="newsDataBlock__top">
            {{ date }}
        </div>
        <div class="newsDataBlock__bottom">
            {{ month }}
        </div>
    </div>
</template>

<script>
import toDateFromFullDate from "../../filters/toDateFromFullDate";
import toMonthFromFullDate from "../../filters/toMonthFromFullDate";
import toMonthLetters from "../../filters/toMonthLetters";

export default {
    name: "DateMonth",
    props: {
        created_at: String,
    },
    computed: {
      date() {
          return toDateFromFullDate(this.created_at)
      },
      month() {
          let month = toMonthFromFullDate(this.created_at)
          return toMonthLetters(month)
      },
    },
}
</script>

<style lang="scss">
.newsDataBlock {
    width: 50px;
    height: 90px;
    text-align: center;
    &__top, &__bottom {
        height: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    &__top {
        background: $black;
        @include miniHeader($whiteText, Montserrat)
    }
    &__bottom {
        background: $yellow;
        @include miniText($black, Montserrat);
        text-transform: uppercase;
    }
}
</style>
