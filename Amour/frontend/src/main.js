import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Axios from "axios";

Vue.config.productionTip = false

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.prototype.$http = Axios.create({
  baseURL: 'http://localhost:1199/v1'
});

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
