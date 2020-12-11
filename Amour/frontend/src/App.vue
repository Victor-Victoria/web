<template>
  <div id="app">
    <header>
      <div class="container">
        <nav class="blok-menu">
          <div class="logo-box">
            <h1 class="logo">
              <router-link v-bind:to="{ name: 'Home' }">
                <img src="images/logo/amour_8.png" alt="Amour" />
              </router-link>
            </h1>
          </div>
          <div class="navbar-inverse">
            <ul class="menu">
              <li>
                <router-link v-bind:to="{ name: 'Catalog' }"
                  >Каталог</router-link
                >
              </li>
              <li>
                <router-link v-bind:to="{ name: 'Delivery' }"
                  >Доставка и возврат</router-link
                >
              </li>
              <li>
                <router-link v-bind:to="{ name: 'Contact' }"
                  >Контакты</router-link
                >
              </li>
              <li><span class="ti-search"></span></li>
              <li v-if="user.isAuth()">
                <router-link v-bind:to="{name: 'Profile'}">{{user.email}}</router-link>
              </li>
              <li v-else>
                <router-link v-bind:to="{ name: 'SignIn' }"
                  ><span class="ti-user"></span
                ></router-link>
              </li>
              <li>
                <CartWidget></CartWidget>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <main role="main">
      <router-view />
    </main>

    <footer class="container">
      <hr class="featurette-divider" />
      <p class="float-right"><a href="#">Вернуться наверх</a></p>
      <p>
        &copy; 2020 Amour, Inc. &middot;<a href="#">Конфиденциальность</a>
        &middot; <a href="#">Условия</a>
      </p>
    </footer>
  </div>
</template>


<script>
import CartWidget from '@/components/cart/CartWidget'
import User from '@/components/user/user'

export default {
  components: {CartWidget},
  data() {
    return {
      user: User
    }
  },
}
</script>
