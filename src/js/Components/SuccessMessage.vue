<template>
  <v-alert type="success">
    <v-icon>fad fa-check</v-icon>
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