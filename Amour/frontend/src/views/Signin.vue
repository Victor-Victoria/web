<template>
  <div class="container sign-in">
    <form class="form-signin">
      <h1 class="mb-4 font-weight-normal text-center">Авторизация</h1>
      <form @submit="signIn">
        <label for="email" class="sr-only">Email address</label>
        <input
          type="email"
          id="email"
          class="form-control"
          v-model="email">
        <div class="error">{{ errors.email }}</div>
        <label for="password" class="sr-only">Password</label>
        <input
          type="password"
          id="password"
          class="form-control mb-3"
          v-model="password">
        <div class="error">{{ errors.password }}</div>
        <div class="checkbox text-center mb-2">
          <label>
            <input type="checkbox" value="remember-me" /> Запомнить меня
          </label>
        </div>
        <button class="btn btn-lg btn-secondary btn-block" type="submit">
          Войти
        </button>
      </form>
      <p class="reg mt-3 text-muted">
        <a href="#">Забыли пароль?</a> &middot;
        <router-link v-bind:to="{ name: 'CheckIn' }">Регистрация</router-link>
      </p>
    </form>
  </div>
</template>

<script>
  import User from '@/components/user/user'
  export default {
    name: "SignIn",
    data() {
      return {
        email: '',
        password: '',
        errors: {}
      }
    },
    methods: {
      signIn(e) {
        if (this.validate()) {
          const result = {
            name: 'Виктория',
            email: 'vika@ya.ru',
            accessToken: 'jsdlf732649823709!ew98r#$432'
          }
          User.login(result)
        }
        e.preventDefault()
      },
      validate() {
        this.errors = {}
        if (this.email.trim().length === 0) {
          this.errors.email = 'Заполните Email.'
        }
        if (this.password.trim().length === 0) {
          this.errors.password = 'Заполните Пароль.'
        }
        return Object.keys(this.errors).length === 0
      }
    }
  }
</script>