<script setup>
defineProps([
    'heading',
    'message'
])
</script>
<template>
<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <span class="font-medium">Info alert!</span> change a few things up and try submitting again.
    <br/>
    <span class="font-medium">{{ heading }}</span>{{message}}
</div>
</template>
<style scoped>
</style>