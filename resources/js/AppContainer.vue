<template>
<div>
    <Header
        :userLogin="userLogin"
    ></Header>
    <main>
        <router-view></router-view>
    </main>
    <Footer></Footer>
</div>
</template>

<script>
import Header from "./components/Header";
import Footer from "./components/Footer";

export default {
    name: "AppContainer",
    data() {
      return {
          userLogin: false,
      }
    },
    components: {
        Header,
        Footer
    },
    created() {
        this.initAuth()
        this.isUserLogin()
    },
    methods: {
        initAuth() {
            axios.get('/sanctum/csrf-cookie')
            .then(res => {
                console.log(res)
            })
            .catch(e => {
                console.log(e)
            })
        },
      isUserLogin() {
          axios.get('/api/checkUser')
              .then(res => {
                  this.userLogin = res.data.success
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
