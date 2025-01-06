<script setup>
import { inject } from 'vue';
const theme=inject('themx')
</script>
<template>
<div>
    <h1>Component- Theme Color = {{ theme.color }} <br/> Theme Size= {{ theme.size }}</h1>
</div>
</template>
<style scoped></style>