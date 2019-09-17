<template>
  <v-container>
    <v-row
      justify="center"
    >
      <v-flex md5>
        <SuccessMessage />
      </v-flex>
    </v-row>
  </v-container>
</template>
<script>
import SuccessMessage from '../Components/SuccessMessage.vue'

export default {
  components: {
    SuccessMessage
  }
}
</script>