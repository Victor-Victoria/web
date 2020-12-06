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
      <About v-bind:product="item"></About>
    </div>
  </div>
</template>

<script>
import Carousel from "../components/Carousel.vue";
import Product from "../components/products/Product.vue";
import About from "../components/About.vue";

export default {
  name: "Home",
  components: { Carousel, Product, About },
  data() {
    return {
      items: [
        {
          id: 1,
          name: "Боди без рукавов с открытой спиной",
          url: "боди-без-рукавов-с-открытой-спиной",
          image: "images/t6.jpg",
          price: 7000,
        },
        {
          id: 2,
          name: "Боди с открытой спиной",
          url: "боди-с-открытой-спиной",
          image: "images/t2_1.jpg",
          price: 7800,
        },
        {
          id: 3,
          name: "Укороченное худи Amour Sport",
          url: "укороченное-худи-amour-sport",
          image: "images/t8_1.jpg",
          price: 7500,
        },
      ],
    };
  },
  created() {
    const instance = Axios.create({
      baseURL: "http://localhost:8080",
    });
    instance
      .get("/product/home")
      .then((response) => (this.items = response.data));
  },
};
</script>

