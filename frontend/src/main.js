import Vue from 'vue'
import App from './App.vue'
import vueHeadful from 'vue-headful';
import BootstrapVue from 'bootstrap-vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret, faSearch } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUserSecret, faSearch)

Vue.component('vue-headful', vueHeadful);
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

import router from './router/index.js'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//Hover css libary 
require('./assets/css/hover-min.css')

Vue.use(BootstrapVue)

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
