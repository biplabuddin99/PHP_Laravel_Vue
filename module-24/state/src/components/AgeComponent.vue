<script setup>
const model=defineModel()
</script>
<template>
<h2> From Age {{ model }}</h2>
<input type="text" v-model="model">
</template>
<style scoped></style>