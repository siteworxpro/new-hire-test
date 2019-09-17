// src/main.js

import Vue from 'vue'
import vuetify from './libs/vuetify'

import Index from './Components/Index.vue'

new Vue({
  vuetify,
  components: {
    Index
  }
}).$mount('#app')