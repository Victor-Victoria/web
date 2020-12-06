<template>
  <div class="container sign-in">
    <form class="form-signin">
        <h1 class="mb-4 font-weight-normal text-center">Авторизация</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="login" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Пароль" required>
        <div class="checkbox text-center mb-2">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-secondary btn-block" type="submit">Войти</button>
        <p class="reg mt-3 text-muted"><a href="#">Забыли пароль?</a> &middot;
        <router-link v-bind:to="{ name: 'CheckIn' }">Регистрация</router-link></p>
    </form>
  </div>
</template>

<script>
export default {
  name: "SignIn",
};
</script>