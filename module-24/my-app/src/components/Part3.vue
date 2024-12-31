<script setup>
import { reactive } from 'vue';
let number= reactive({
    num1:500,
    num2:300
});

const plus=()=>{
  number.num1=number.num1+1;
}
const minus=()=>{
  number.num1=number.num1-1;
}
</script>

<template>
<h1>{{ number.num1 }}</h1>
<button @click="plus">Add</button>
<button @click="minus">Less</button>
</template>

<style scoped>
</style>
