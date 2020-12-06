<template>
  <div class="container product">
    <ProductInfo v-bind:product="product"></ProductInfo>
  </div>
</template>

<script>
import ProductInfo from "@/components/products/ProductInfo";

export default {
  name: "Product",
  components: { ProductInfo },
  data() {
    return {
      product: {},
    };
  },
  created() {
    const url = this.$route.params.url;
    const result = {
      id: 3,
      name: "Худи Amour Sport",
      url: url,
      image: "images/t8.jpg",
      info:
        "Мы любим это укороченное худи за лаконизм стиля. Необработанный нижний край усиливает ноту casual в образе.",
      price: 7500,
    };
    this.product = result;
  },
};
</script>
