<template>
  <v-container>
    <v-row>
      <v-col cols="12">
        <v-row
          justify="center"
        >
          <v-flex md6>
            <SuccessMessage />
          </v-flex>
        </v-row>
      </v-col>
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