<template>
  <div class="container catalog">
    <!-- <h1 class="font-weight-normal mb-3">Каталог</h1> -->
    <ProductsList></ProductsList>
  </div>
</template>

<script>
import ProductsList from '../components/products/ProductsList.vue';
export default {
  components: { ProductsList },
  name: "Catalog",
};
</script>