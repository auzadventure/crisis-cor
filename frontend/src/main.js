import Vue from 'vue'
import App from './App.vue'
import router from './router'


require ('./assets/ratchet/css/ratchet.css')
require ('./assets/css/mycss.css')



Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
