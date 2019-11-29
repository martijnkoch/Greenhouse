import Vue from 'vue'
import App from './App.vue'
import vueHeadful from 'vue-headful';
import BootstrapVue from 'bootstrap-vue'

Vue.config.productionTip = false
Vue.component('vue-headful', vueHeadful);

import router from './router/index.js'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
