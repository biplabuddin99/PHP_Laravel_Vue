<script setup>
import { ref } from 'vue';
import NameComponent from './components/NameComponent.vue';
const firstName=ref("Jhon")
const lastName=ref("Doe")
</script>
<template>
 <h1>Name = {{ firstName }} {{ lastName }}</h1>
 <input type="text" v-model="firstName">
 <NameComponent v-model:firstName="firstName" :lastName="lastName"/>
</template>
<style scoped>
</style>