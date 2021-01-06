<template>
  <div class="products text-center mb-5">
    <div class="form-group">
      <router-link
        v-bind:to="{ name: 'Product', params: { url: product.url } }"
      >
        <img class="img-fluid" v-bind:src="product.image" />
      </router-link>
    </div>
    <h2>
      <router-link
        v-bind:to="{ name: 'Product', params: { url: product.url } }"
        class="text-secondary"
        >{{ product.name }}</router-link
      >
    </h2>
    <p>
      <span class="price">{{ product.formattedPrice }}</span>
    </p>
    <p>
      <button class="btn btn-secondary" v-on:click="addToCart">Купить</button>
    </p>
  </div>
</template>

<script>
import CartData from "@/components/cart/cart";
import User from "@/components/user/user";
import Order from "@/components/cart/order";
import router from "@/router";
import Axios from "axios";

export default {
  name: "Product",
  props: ["product"],
  data() {
    return {
      userId: 0,
      productId: 0,
      price: 0,
    };
  },
  methods: {
    addToCart() {
      CartData.add(this.product);
      if (User.isAuth()) {
        this.$http
          .post("/order/create", {
            userId: User.id,
            productId: this.product.id,
            price: this.product.price
          })
          .then((response) => {
            Order.add(response.data);})
          .catch((errors) => {console.log(errors)});
      }
    },
  },
};
</script>