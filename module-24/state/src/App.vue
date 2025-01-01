<script setup>
const color ='red';
</script>

<template>
<h1>Hello</h1>
<button class="text-white font-bold py-2 px-2 rounded" :class="`bg-${color}-500 hover:bg-${color}-700`">Button</button>

</template>

<style scoped>

</style>
