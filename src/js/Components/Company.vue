<template>
  <div>
    <v-list>
      <v-list-item>
        <v-list-item-title>
          {{ company.name }}
        </v-list-item-title>
      </v-list-item>
    </v-list>
  </div>
</template>
<script>
  export default {
    props: {
      company: {
        type: Object,
        required: true
      }
    }
  }
</script>