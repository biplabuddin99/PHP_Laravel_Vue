<script setup>
defineProps([ 'firstName','lastName' ])
</script>
<template>
 <h2>From Component {{ firstName }} {{ lastName }}</h2>
 <input type="text" placeholder="first Name">
</template>

<style scoped>
</style>