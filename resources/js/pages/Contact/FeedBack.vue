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
        <textarea
            :id="message.id"
            class="messageToTCLvovo__block
               messageToTCLvovo__name"
            :class="[isValidate, message.class]"
            :placeholder="message.placeholder"
            v-model="message.value"
        ></textarea>
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
          ],
          message:  {
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
                && this.message.isCorrect);
        },
        isValidate() {
            console.log(this.message.value)
            if (this.message.value === '') {
                this.message.errorMessage = '';
                return '';
            }
            if (this.isValid(this.message.value,
                this.message.validate.min,
                this.message.validate.max)
            ) {
                this.message.isCorrect = true;
                this.message.errorMessage = '';
                return 'messageToTCLvovo__correct';
            }
            this.message.errorMessage = 'данные заполнены не корректно!';
            this.message.isCorrect = false;
            return 'messageToTCLvovo__error';
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
                'message': this.message.value
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
        isValid(value, min, max) {
            return value.length > min && value.length < max
        },
    },
}
</script>

<style lang="scss">

</style>
