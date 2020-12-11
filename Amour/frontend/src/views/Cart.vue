<template>
  <div class="container cart-page">
    <h1 class="font-weight-normal mb-3">Корзина</h1>
    <div class="cart-empty text-secondary" v-if="cart.total === 0">
      В корзине нет товаров
    </div>
    <div class="cart-table" v-if="cart.total > 0">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>Товар</th>
          <th>Стоимость</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="product in cart.products" :key="product.id" class="text-secondary"><!--????????????????????-->
          <td class="text-center" width="200">
            <div class="form-group">
              <img class="cart-image" v-bind:src="product.image">
            </div>
            {{product.name}}
          </td>
          <td>{{product.price}} ₽</td>
          <td>
            <button class="btn btn-purple btn-sm" v-on:click="remove(product)">Удалить</button>
          </td>
        </tr>
        <tr>
          <td><b>Итого:</b></td>
          <td colspan="2"><b>{{cart.total}} ₽</b></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
  import CartData from '@/components/cart/cart'
  export default {
    name: "Cart",
    data() {
      return {
        cart: CartData
      }
    },
    methods: {
      remove(item) {
        this.cart.remove(item)
      }
    }
  }
</script>