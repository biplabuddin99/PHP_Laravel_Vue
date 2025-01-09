<script setup>
import {ref, onBeforeMount} from 'vue'
import { RouterLink } from 'vue-router';
const posts = ref([])
onBeforeMount(async () => {
    const response = await fetch('https://jsonplaceholder.typicode.com/posts')
    posts.value = await response.json()
})
</script>

<template>
    <h1>Blog</h1>
    <p>Welcome to the blog page</p>

  
    
    <article v-for="post in posts" :key="post.id">
        <h2>
            <RouterLink :to="{name:'Post', params: {id: post.id}}">
                {{ post.title }}
            </RouterLink>
        </h2>
    </article>
    
</template>

<style scoped>

</style>