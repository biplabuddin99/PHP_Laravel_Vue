<script setup>
// import { theme } from '@/data/theme';
import { theme } from '../data/theme.js';
function updateTheme(value){
    theme.bgcolor=value
    theme.textColor=value
    theme.buttonColor=value
    theme.buttonTextColor=value
    localStorage.setItem('theme', JSON.stringify(theme))
}
</script>
<template>
<h2>Selecto Dropdown</h2>
<select @change="updateTheme($event.target.value)" name="" id="">
    <option value="gray">Gray</option>
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
</select>
</template>