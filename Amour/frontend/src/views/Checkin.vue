<template>
  <div class="container check-in">
    <form class="form-signin">
      <h1 class="mb-4 font-weight-normal text-center">Регистрация</h1>
      <form @submit="checkIn">
        <label for="name" class="sr-only">User name</label>
        <input
          type="login"
          id="name"
          class="form-control"
          v-model="name"
          placeholder="Имя пользователя"
          required
          autofocus
        />
        <div class="error">{{ errors.name }}</div>

        <label for="email" class="sr-only">Email address</label>
        <input
          type="login"
          id="email"
          class="form-control"
          v-model="email"
          placeholder="Email"
          required
          autofocus
        />
        <div class="error">{{ errors.email }}</div>

        <label for="password" class="sr-only">Password</label>
        <input
          type="password"
          id="password"
          class="form-control"
          v-model="password"
          placeholder="Пароль"
          required
          autofocus
        />
        <div class="error">{{ errors.password }}</div>

        <label for="rep_password" class="sr-only">Repeat password</label>
        <input
          type="password"
          id="rep_password"
          class="form-control"
          v-model="rep_password"
          placeholder="Повторите пароль"
          required
        />
        <div class="error">{{ errors.rep_password }}</div>
        
        <div class="checkbox text-center mb-2">
          <label>
            <input type="checkbox" value="remember-me" /> Запомнить меня
          </label>
        </div>
        <button class="btn btn-lg btn-secondary btn-block" type="submit">
          Регистрация
        </button>
      </form>
    </form>
  </div>
</template>

<script>
import User from "@/components/user/user";
import router from "@/router";
import Axios from "axios";
import MD5 from "crypto-js/md5";

export default {
  name: "CheckIn",
  data() {
    return {
      name: "",
      email: "",
      password: "",
      rep_password: "",
      errors: {}
    };
  },
  methods: {
    checkIn(e) {
      if (this.validate()) {
        this.$http
          .post("/user/registration", {
            name: this.name,
            email: this.email,
            password: this.password
          })
          .then((response) => {
            User.login(response.data);
            router.push({ name: "Home" });
          })
          .catch((errors) => {
            console.log(errors);
          });
        e.preventDefault();
      }
    },
    validate() {
      this.errors = {};
      if (this.name.trim().length === 0) {
        this.errors.name = "Заполните Имя пользователя.";
      }
      if (this.email.trim().length === 0) {
        this.errors.email = "Заполните Email.";
      }
      if (this.password.trim().length === 0) {
        this.errors.password = "Заполните Пароль.";
      }
      if (this.rep_password.trim().length === 0) {
        this.errors.rep_password = "Повторите пароль.";
      }
      if (this.password != this.rep_password) {
        this.errors.rep_password = "Пароли не совпадают!";
      }
      return Object.keys(this.errors).length === 0;
    },
  },
};
</script>