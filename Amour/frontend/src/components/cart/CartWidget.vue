<template>
  <router-link v-bind:to="{name: 'Cart'}">
    <span v-if="cart.total === 0" class="ti-shopping-cart"></span>
    <span v-if="cart.total > 0" class="ti-shopping-cart-full"> {{cart.total}} ₽</span>
  </router-link>
</template>

<script>
  import CartData from '@/components/cart/cart'

  export default {
    name: "CartWidget",
    data() {
      let data = CartData
      data.load()
      return {
        cart: data
      }
    },
  }
</script>