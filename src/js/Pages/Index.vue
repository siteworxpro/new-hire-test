<template>
  <v-content>
    <v-container>
      <v-flex sm6>
        <SuccessMessage />
        <CompanyList  />
      </v-flex>
    </v-container>
  </v-content>
</template>
<script>
import SuccessMessage from '../Components/SuccessMessage.vue'
import CompanyList from '../Components/CompanyList.vue'

export default {
  components: {
    CompanyList,
    SuccessMessage
  }
}
</script>