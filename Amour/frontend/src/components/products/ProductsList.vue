<template>
  <div class="row">
    <div class="col-md-3">
      <div class="filter">
        <h5>Цвет</h5>
        <ul class="list-unstyled">
          <li v-for="colour in filter.colors" :key="colour.id">
            <label> <input type="checkbox" /> {{ colour }} </label>
          </li>
        </ul>
        <hr />
      </div>
      <div class="filter">
        <h5>Размер</h5>
        <ul class="list-unstyled">
          <li v-for="size in filter.sizes" :key="size.id">
            <label> <input type="checkbox" /> {{ size }} </label>
          </li>
        </ul>
        <hr />
      </div>
      <!-- <div class="filter">
              <h5>Длина</h5>
              <ul>
                  
              </ul>
              <hr>
          </div> -->
      <!-- <div class="filter">
              <h5>Категория</h5>
              <ul>
                  
              </ul>
              <hr>
          </div> -->
      <div class="filter">
        <h5>Цена</h5>
        <div class="d-flex">
          <input type="number" class="form-control mr-1" placeholder="от" />
          <input type="number" class="form-control" placeholder="до" />
        </div>
        <hr />
      </div>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-lg-4 product-list" v-for="item in items" :key="item.id">
          <Product v-bind:product="item"></Product>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Product from "@/components/products/Product.vue";
import Axios from "axios";

export default {
  name: "ProductList",
  components: { Product },
  data() {
    return {
      filter: {
        colors: ["Бежевый", "Серый", "Черный"],
        sizes: ["S", "M", "L"],
      },
      items: []
    };
  },
  created() {
    const instance = Axios.create({
      baseURL: 'http://localhost:1199/v1'
    });
    tinstance.get("/product/catalog")
      .then((response) => (this.items = response.data));
  },
};
</script>