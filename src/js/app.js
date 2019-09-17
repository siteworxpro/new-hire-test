import Vue from 'vue'
import vuetify from './libs/vuetify'

import Index from './Pages/Index.vue'

new Vue({
  vuetify,
  components: {
    Index
  }
}).$mount('#app')