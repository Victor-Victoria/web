<template>
  <div class="container profile">
    <h1 class="font-weight-normal mb-3">{{user.name}}</h1>
    <h4 class="font-weight-normal">{{user.email}}</h4>
    <hr>
    <router-link :to="{name: 'Home'}">
      <button class="btn btn-purple" v-on:click="logout">Выйти</button>
    </router-link>
  </div>
</template>

<script>
  import User from '@/components/user/user'
  export default {
    name: "Profile",
    data() {
      return {
        user: User
      }
    },
    methods: {
      logout() {
        User.logout()
        //location.reload()
      }
    }
  }
</script>