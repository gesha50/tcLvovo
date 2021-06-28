<template>
<div>
    <Header
        :userLogin="isAdmin"
    ></Header>
    <main>
        <router-view></router-view>
    </main>
    <Footer></Footer>
</div>
</template>

<script>
import Header from "./components/Header";
import Footer from "./components/Footer/Footer";

export default {
    name: "AppContainer",
    data() {
      return {
          isUser: false,
          isAdmin: false,
      }
    },
    components: {
        Header,
        Footer
    },
    created() {
        this.initAuth()
    },
    methods: {
        initAuth() {
            axios.get('/sanctum/csrf-cookie')
            .then(res => {
                console.log(res)
                this.isUserLogin()
            })
            .catch(e => {
                console.log(e)
            })
        },
      isUserLogin() {
          axios.get('/api/checkUser')
              .then(res => {
                  console.log(res.data)
                  this.isUser = res.data.isUser
                  this.isAdmin = res.data.isAdmin
              })
              .catch(e => {
                  console.log(e)
              })
      },
    },
}
</script>

<style scoped>

</style>
