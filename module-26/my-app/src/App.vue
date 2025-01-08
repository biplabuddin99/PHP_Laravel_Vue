<script setup>
import {ref} from "vue";
const firstName=ref('')
</script>

<template>
<h1>Vue Js Form </h1>
<input type="text" v-model="firstName" placeholder="first name"/>{{ firstName }}
</template>

<style scoped>

</style>
