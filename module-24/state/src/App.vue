<script setup>
import { person } from './data/person';
import NameComponent from './components/NameComponent.vue';
import ExternelComponent from './components/ExternelComponent.vue';
import ThemeComponent from './components/ThemeComponent.vue';
import { reactive } from 'vue';
import { inject,provide } from 'vue';
const them=reactive({
    color:'lime',
    size:'46'
})
provide('themx',them)
</script>
<template>
<h1>Name = {{ person.firstName }} {{ person.lastName }}</h1>
<NameComponent v-model:firstName="person.firstName" v-model:lastName="person.lastName"/>
<div @click="console.log(person)" class="bg-blue-500 hover:bg-blue-700 text-white font-blod py-2 px-4 rounded">Export</div>
<hr/>
<ExternelComponent/>
<br/>
<hr/>
<div class="mt-5">
    <h1>theme color= {{ them.color }}</h1>
    <h1>theme size= {{ them.size }}</h1>
</div>
<hr/>
<div class="mt-5">
<ThemeComponent/>
</div>
</template>
<style scoped>
</style>