<template>
<div>
    <h3>Обратная связь</h3>
    <p>
        Будем рады ответить вам в ближайшее время! Заполните поля ниже.
    </p>
    <div v-if="idFeedback && !loading" class="text-center">
        Ваш запрос № {{idFeedback}} принят! <br>
        Мы свяжемся с вами в ближайшее время!
    </div>
    <spinner v-else-if="!idFeedback && loading"></spinner>
    <div v-else class="messageToTCLvovo">
            <input-feed-back
                v-for="(obj, index) in data"
                :key="index"
                :index="index"
                :item="obj"
                v-model="obj.value"
            ></input-feed-back>
        <button
            :disabled="!isAllInputsCorrect"
            class="btn btn-warning mt-3"
            @click="sendDataInputs"
        >
            Отправить
        </button>
    </div>
</div>
</template>

<script>
import InputFeedBack from "../../components/Inputs/InputFeedBack";
import Spinner from "../../components/Spinner/Spinner";

export default {
    data() {
      return {
          loading: false,
          idFeedback: null,
          data: [
              {
                  id: 'name',
                  placeholder: 'Введите Имя',
                  text: 'Имя',
                  value: '',
                  errorMessage: '',
                  validate: {
                      min: 0,
                      max: 32,
                  },
                  isCorrect: false,
              },
              {
                  id: 'phone',
                  placeholder: 'Введите телефон *',
                  text: 'Телефон',
                  value: '',
                  errorMessage: '',
                  validate: {
                      min: 10,
                      max: 18,
                  },
                  isCorrect: false,
              },
              {
                  id: 'email',
                  placeholder: 'Введите email',
                  text: 'Почтовый адрес',
                  value: '',
                  errorMessage: '',
                  validate: {
                      min: 0,
                      max: 32,
                  },
                  isCorrect: false,
              },
              {
                  id: 'theme',
                  placeholder: 'Введите тему сообщения',
                  text: 'Тема',
                  value: '',
                  errorMessage: '',
                  validate: {
                      min: 0,
                      max: 32,
                  },
                  isCorrect: false,
              },
              {
                  id: 'message',
                  class: 'messageToTCLvovo__message',
                  placeholder: 'Введите сообщение *',
                  text: 'Сообщение',
                  value: '',
                  errorMessage: '',
                  validate: {
                      min: 1,
                      max: 256,
                  },
                  isCorrect: false,
              },
          ],

      }
    },
    name: "FeedBack",
    components: {
        InputFeedBack,
        Spinner,
    },
    computed: {
        isAllInputsCorrect() {
            return !!(this.data[1].isCorrect
                && this.data[4].isCorrect);
        },
    },
    methods: {
        sendDataInputs() {
            this.loading = true
            let sendData = {
                'name': this.data[0].value,
                'phone': this.data[1].value,
                'email': this.data[2].value,
                'theme': this.data[3].value,
                'message': this.data[4].value
            }
            axios.post('/api/sendContactData', sendData)
            .then(res => {
                this.idFeedback = res.data.id
                this.loading = false
            })
            .catch(e => {
                console.log(e)
                this.loading = false
            })
        },
    },
}
</script>

<style lang="scss">

</style>
