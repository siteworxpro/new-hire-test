<template>
  <v-content>
    <v-container>
      <v-flex sm6>
        <SuccessMessage />
      </v-flex>
    </v-container>
  </v-content>
</template>
<script>
import SuccessMessage from '../Components/SuccessMessage.vue'

export default {
  components: {
    SuccessMessage
  }
}
</script>