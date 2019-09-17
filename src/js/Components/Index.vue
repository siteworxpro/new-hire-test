<template>
  <v-content>
    <v-container>
      <v-flex sm6>
        <v-alert type="success">
          <v-icon>fad fa-check</v-icon>
          {{ message }}
        </v-alert>
      </v-flex>
    </v-container>
  </v-content>
</template>
<script>
    export default {
        data() {
            return {
              message: 'You got your development environment working!'
            }
        }
    }
</script>