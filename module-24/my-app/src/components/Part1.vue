<script setup>
import { ref } from 'vue';
let number= ref(900);

const plus=()=>{
  number.value=number.value+1;
}
const minus=()=>{
  number.value=number.value-1;
}
</script>

<template>
<h1>{{ number }}</h1>
<button @click="plus">Add</button>
<button @click="minus">Less</button>
</template>

<style scoped>
</style>
