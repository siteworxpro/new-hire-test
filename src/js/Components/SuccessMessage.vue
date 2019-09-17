<template>
  <v-alert
    type="success"
    icon="fas fa-check"
  >
    {{ message }}
  </v-alert>
</template>
<script>
  export default {
    data () {
      return {
        message: 'You got your development environment working!'
      }
    }
  }
</script>