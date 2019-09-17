<template>
  <v-card>
    <v-card-title>
      Company List
    </v-card-title>
    <v-card-text>
      <Company
        v-for="company in companies"
        :key="company.id"
        :company="company"
      />
    </v-card-text>
  </v-card>
</template>
<script>
  import Company from './Company.vue'
  import axios from 'axios'

  export default {
    components: {
      Company
    },
    data () {
      return {
        companies: []
      }
    },
    created() {
      this.fetchCompanies()
    },
    methods: {
      fetchCompanies () {
        axios.get('/api/v1/company')
          .then(response => {
            this.companies = response.data.payload
          })
      }
    }
  }
</script>