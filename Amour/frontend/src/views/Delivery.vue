<template>
  <div class="container delivery">
    <h1 class="font-weight-normal">Доставка и возврат</h1>
    <p>{{page.text}}</p>
  </div>
</template>

<script>
import Axios from "axios";
export default {
  name: "Delivery",
  data() {
    return {
      page: {}
    };
  },
  created() {
    // const instance = Axios.create({
    //   baseURL: 'http://localhost:1199/v1',
    // });
    // instance
    this.$http
      .get('/page/delivery')
      .then((response) => (this.page = response.data));
  },
};
</script>