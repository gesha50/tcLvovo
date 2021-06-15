<template>
<div>
    <span class="messageToTCLvovo__errorText"
      v-if="item.errorMessage">
            {{ item.errorMessage }}
    </span>
    <input
        :class="[isValidate, item.class]"
        :placeholder="item.placeholder"
        type="text"
        :id="item.id"
        class="messageToTCLvovo__block
               messageToTCLvovo__name"
        :value="item.value"
        @change="$emit('input', $event.target.value)"
    >
</div>
</template>

<script>
export default {
    name: "InputFeedBack",
    props: {
        item: Object,
        modelValue: String,
        index: Number,
    },
    computed: {
        isValidate() {
            console.log(this.item.value)
            if (this.item.value === '') {
                this.item.errorMessage = '';
                return '';
            }
            if (this.isValid(this.item.value,
                this.item.validate.min,
                this.item.validate.max)
            ) {
                this.item.isCorrect = true;
                this.item.errorMessage = '';
                return 'messageToTCLvovo__correct';
            }
            this.item.errorMessage = 'данные заполнены не корректно!';
            this.item.isCorrect = false;
            return 'messageToTCLvovo__error';
        },
    },
    methods: {
        isValid(value, min, max) {
            return value.length > min && value.length < max
        },
    },

}
</script>

<style lang="scss">
.messageToTCLvovo {
    &__block {
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        background-color: #f8f8f8;
        border: none;
        font-size: 12px;
        padding: 9px;
        &:focus {
            outline: none;
            border: 1px solid $yellow;
        }
    }
    &__name,
    &__email,
    &__phone,
    &__theme {
        width: 60%;
        height: 30px;
    }
    &__message {
        width: 90%;
        height: 150px;
    }
    &__correct {
        background: white;
        border: 1px solid $yellow;
    }
    &__error {
        background: lightcoral;
        border: 1px solid red;
    }
    &__errorText {
        color: lightcoral;
        font-size: 12px;
        & + .messageToTCLvovo__block {
            margin-top: 1px;
        }
    }
}
</style>
