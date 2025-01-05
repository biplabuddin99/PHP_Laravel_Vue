<script setup>
// defineProps([ 'firstName','lastName' ])
const firstName=defineModel('firstName')
const lastName=defineModel('lastName')
</script>
<template>
 <h2>From Component {{ firstName }} {{ lastName }}</h2>
 <input type="text" v-model="firstName" placeholder="first Name">
</template>

<style scoped>
</style>