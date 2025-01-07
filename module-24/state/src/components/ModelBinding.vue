<script setup>
import { ref } from 'vue';
import NameComponent from './components/NameComponent.vue';
import AgeComponent from './components/AgeComponent.vue';
const firstName = ref("Jhon")
const lastName = ref("Doe")
const age = ref('25')
</script>
<template>
   <h1>Name = {{ firstName }} {{ lastName }} {{ age }}</h1>
   <input type="text" v-model="firstName">
   <NameComponent v-model:firstName="firstName" v-model:lastName="lastName" />
   <div>
      <AgeComponent v-model="age" />
   </div>
</template>
<style scoped></style>