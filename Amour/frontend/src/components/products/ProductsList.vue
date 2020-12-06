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

export default {
  name: "ProductList",
  components: { Product },
  data() {
    return {
      filter: {
        colors: ["Бежевый", "Серый", "Черный"],
        sizes: ["S", "M", "L"],
      },
      items: [
        {
          id: 1,
          name: "Боди без рукавов с открытой спиной",
          image: "images/t6.jpg",
          url: "боди-без-рукавов-с-открытой-спиной",
          price: 7000,
        },
        {
          id: 2,
          name: "Боди с открытой спиной",
          image: "images/t2_1.jpg",
          url: "боди-с-открытой-спиной",
          price: 7800,
        },
        {
          id: 3,
          name: "Укороченное худи Amour Sport",
          image: "images/t8_1.jpg",
          url: "укороченное-худи-amour-sport",
          price: 7500,
        },
        {
          id: 4,
          name: "Облегающие кожаные брюки",
          image: "images/t_13.jpg",
          url: "облегающие-кожаные-брюки",
          price: 17500,
        },
        {
          id: 5,
          name: "Меланжевый топ на молнии",
          image: "images/t_11.jpg",
          url: "меланжевый-топ-на-молнии",
          price: 6000,
        },
        {
          id: 6,
          name: "Укороченное худи Amour Sport",
          image: "images/t_10.jpg",
          url: "укороченное-худи-amour-sport",
          price: 7500,
        },
      ],
    };
  },
  created() {
    const instance = Axios.create({
      baseURL: "http://localhost:8080",
    });
    tinstance.get("/product/catalog")
      .then((response) => (this.items = response.data));
  },
};
</script>