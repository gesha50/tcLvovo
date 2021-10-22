<template>
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm navbar_edit">
            <img width="45px" src="/storage/без_фона.png" alt="">
            <router-link class="navbar-brand" :to="{name: 'index'}">
                ТК Львово
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'index'}">Главная</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'company'}">О нас</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'services'}">Услуги</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'gallery'}">Фотогаллерея</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'contact'}">Контакты</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'news'}">Новости</router-link></li>
                    <li @click="remove"><router-link class="nav-link my-nav-link" :to="{name: 'shop'}">Магазин</router-link></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <div class="search navbar-nav">
                    <a @click="remove" v-if="isAdmin" class="nav-link my-nav-link" href="/dashboard">
                        Админка
                    </a>
                    <a @click="remove" v-if="!userLogin" class="nav-link my-nav-link" href="/login">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                    <div @click="remove"  v-if="userLogin">
                        <router-link class="nav-link my-nav-link" :to="{name: 'cabinet'}">
                            <i class="fas fa-user-circle"></i>
                        </router-link>
                    </div>
                    <a @click="logout" v-if="userLogin" class="nav-link my-nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <div @click="remove">
                        <router-link class="nav-link my-nav-link" :to="{name: 'favourites'}">
                            <i class="fas fa-thumbs-up"></i>
                        </router-link>
                    </div>
                    <div @click="remove">
                        <router-link class="nav-link my-nav-link" :to="{name: 'cart'}">
                            <i class="fas fa-shopping-cart"></i>
                        </router-link>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Header",
    props: {
        userLogin: Boolean,
        isAdmin: Boolean,
    },
    methods: {
      remove() {
          let el = document.getElementById('navbarSupportedContent')
          if (el.classList.contains("show")) {
              el.classList.remove("show");
          }
          el.setAttribute('aria-expanded', 'false')
      },
        logout() {
            axios.post('logout')
            .then(response => {
                location.reload();
            })
            .catch(error => {
                location.reload();
            });
        }
    },
}
</script>

<style lang="scss">

.my-nav-link {
    //text-transform: uppercase;
    font-size: 17px;
    font-weight: 700;
    font-style: normal;
}
.navbar_edit {
    background: $yellow;
    color: $textBlack;
    font-family: Montserrat;
}

.search {
    font-size: 20px;
}
</style>
