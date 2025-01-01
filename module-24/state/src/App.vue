<script setup>
import { ref } from 'vue';
const color =ref('red');
const fontSize=ref("28");
</script>

<template>
<!-- <h1>Hello</h1> -->
<button class="text-white font-bold py-2 px-2 rounded" 
:class="`bg-${color}-500 hover:bg-${color}-700`"
:style="`font-size:${fontSize}px`"
>Button</button>
<div class="">
  <input type="text" class="border border-gray-400 p-2" v-model="color" placeholder="color">
<input type="number" class="border border-gray-400 p-2" v-model="fontSize" placeholder="fontSize">
</div>

</template>

<style scoped>

</style>
