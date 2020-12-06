<template>
  <div class="products text-center mb-5">
    <div class="form-group">
      <img class="img-fluid" v-bind:src="product.image" >
    </div>
    <h2>
      <router-link
        v-bind:to="{ name: 'Product', params: { url: product.url } }"
        class="text-secondary">{{ product.name }}</router-link>
    </h2>
    <p>
      <span class="price">{{ product.price }} ₽</span>
    </p>
    <p>
      <button class="btn btn-secondary" v-on:click="addToCart">Купить</button>
    </p>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: ["product"],
  methods: {
    addToCart() {
      alert("Товар " + this.product.name + " добавлен в корзину.");
    },
  },
};
</script>