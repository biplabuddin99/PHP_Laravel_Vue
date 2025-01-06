<script setup>
import { person } from '@/data/person';
function updateData(){
    person.firstName="Abdul"
    person.lastName="Karim"
    person.age= "50"
}
</script>
<template>
<hr/>
<h1 class="text-2xl text-center">Component</h1>
<h1>Name= {{ person.firstName }} {{ person.lastName }}</h1>
<button @click="updateData()" class="bg-red-500 text-white font-bold py-2 px-4 rounded">Click Me</button>
</template>
<style></style>