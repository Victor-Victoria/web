<template>
  <section class="product row">
    <div class="col-md-5">
      <img class="img-fluid" v-bind:src="product.image">
    </div>
    <div class="col-md-7">
      <div class="product-description">
        <h1>{{ product.name }}</h1>
        <p v-for="propertyValue in product.propertiesValues" :key="propertyValue.id">
          <span v-if="propertyValue.property.id === 3">{{propertyValue.value}}</span>
        </p>
      </div>

      <div class="product-configuration">
        <div class="product-color">
          <span>Цвет</span>

          <div class="color-choose">
            <div>
              <input
                data-image="beige"
                type="radio"
                id="beige"
                name="color"
                value="beige"
                checked
              />
              <label for="beige"><span></span></label>
            </div>
            <div>
              <input
                data-image="grey"
                type="radio"
                id="grey"
                name="color"
                value="grey"
              />
              <label for="grey"><span></span></label>
            </div>
            <div>
              <input
                data-image="black"
                type="radio"
                id="black"
                name="color"
                value="black"
              />
              <label for="black"><span></span></label>
            </div>
          </div>
        </div>

        <div class="cable-config">
          <span>Размер</span>

          <div class="cable-choose">
            <button class="mr-1">S</button>
            <button class="mr-1">M</button>
            <button>L</button>
          </div>
        </div>

        <table class="table table-bordered product-description">
          <tbody>
            <tr v-for="propertyValue in product.propertiesValues" :key="propertyValue.id">
              <td v-if="propertyValue.property.id != 3">
                <b>{{ propertyValue.property.name }}</b>
              </td>
              <td v-if="propertyValue.property.id != 3">
                {{ propertyValue.value }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="product-price">
        <span>{{ product.formattedPrice }}</span>
        <a><button class="btn btn-secondary" v-on:click="addToCart">Купить</button></a>
      </div>
    </div>
  </section>
</template>

<script>
import CartData from "@/components/cart/cart";
import User from "@/components/user/user";
import Order from "@/components/cart/order";
import router from "@/router";

export default {
  name: "ProductInfo",
  props: ["product"],
  data() {
    return {
      userId: 0,
      productId: 0,
      price: 0,
      errors: {},
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
            Order.add(response.data);
            })
          .catch((errors) => {console.log(errors)});
      }
    },
  },
};
</script>