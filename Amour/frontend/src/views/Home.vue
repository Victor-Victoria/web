<template>
  <div class="home">
    <Carousel></Carousel>

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4" v-for="item in items" :key="item.id">
          <Product v-bind:product="item"></Product>
        </div>
      </div>

      <hr class="featurette-divider" />
      <About v-bind:about="item"></About>
    </div>
  </div>
</template>

<script>
import Carousel from "@/components/Carousel.vue";
import Product from "@/components/products/Product.vue";
import About from "@/components/About.vue";
import Axios from "axios";

export default {
  name: "Home",
  components: { Carousel, Product, About },
  data() {
    return {
      items: []
    };
  },
  created() {
    const instance = Axios.create({
      baseURL: 'http://localhost:1199/v1'
    });
    instance
      .get('/product/home')
      .then((response) => (this.items = response.data));
  },
};
</script>

