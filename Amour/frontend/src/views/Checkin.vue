<template>
  <div class="container check-in">
    <form class="form-signin">
        <h1 class="mb-4 font-weight-normal text-center">Регистрация</h1>
        <label for="inputName" class="sr-only">User name</label>
        <input type="login" id="inputEmail" class="form-control" placeholder="Имя пользователя" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="login" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required autofocus>
        <label for="inputPassword" class="sr-only">Repeat password</label>
        <input type="passwordx2" id="inputPassword" class="form-control" placeholder="Повторите пароль" required>
        <div class="checkbox text-center mb-2">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-secondary btn-block" type="submit">Регистрация</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "CheckIn",
};
</script>