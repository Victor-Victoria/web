<template>
  <div class="container contact">
    <h1 class="font-weight-normal">Наши контакты</h1>
    <p>{{ page.text }}</p>
  </div>
</template>

<script>
import Axios from "axios";
export default {
  name: "Contact",
  data() {
    return {
      page: {}
    };
  },
  created() {
    const instance = Axios.create({
      baseURL: 'http://localhost:1199/v1',
    });
    instance
      .get('/page/contact')
      .then((response) => (this.page = response.data));
  },
};
</script>
