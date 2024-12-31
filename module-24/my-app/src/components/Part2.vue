<script setup>
import { ref } from 'vue';
let number= ref({
    num1:500,
    num2:300
});

const plus=()=>{
  number.value.num1=number.value.num1+1;
}
const minus=()=>{
  number.value.num1=number.value.num1-1;
}
</script>

<template>
<h1>{{ number.num1 }}</h1>
<button @click="plus">Add</button>
<button @click="minus">Less</button>
</template>

<style scoped>
</style>
