<template>
<div>
    <h3>Обратная связь</h3>
    <p>
        Будем рады ответить вам в ближайшее время! Заполните поля ниже.
    </p>
    <div class="messageToTCLvovo">
        <input
            placeholder="Введите Имя *"
            type="text"
            class="messageToTCLvovo__block
                                 messageToTCLvovo__name"
        >
        <input
            placeholder="Введите email *"
            type="email"
            class="messageToTCLvovo__block
                                 messageToTCLvovo__email"
        >
        <input
            placeholder="Введите тему сообщения"
            type="text"
            class="messageToTCLvovo__block
                                 messageToTCLvovo__theme"
        >
        <textarea
            placeholder="Введите сообщение *"
            class="messageToTCLvovo__block messageToTCLvovo__message"
        >
                            </textarea>
        <button :disabled="true" class="btn btn-warning">Отправить</button>
    </div>
</div>
</template>

<script>
export default {
    name: "FeedBack"
}
</script>

<style lang="scss">
.messageToTCLvovo {
    &__block {
        display: block;
        margin-bottom: 20px;
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
    &__theme {
        width: 60%;
        height: 30px;
    }
    &__message {
        width: 90%;
        height: 150px;
    }
}
</style>
