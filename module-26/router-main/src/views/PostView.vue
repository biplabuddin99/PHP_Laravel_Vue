<script setup>
import {ref, onBeforeMount} from 'vue'
// const posts = [
//     {
//         title: "My first blog post",
//         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc 1"
//     },
//     {
//         title: "My second blog post",
//         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc 2"
//     },
//     {
//         title: "My third blog post",
//         content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus nec nunc 3"
//     }
// ]

//onbeforeMount fetch from https://jsonplaceholder.typicode.com/posts

const posts = ref([])
onBeforeMount(async () => {
    const response = await fetch('https://jsonplaceholder.typicode.com/posts')
    posts.value = await response.json()
})
</script>

<template>
    <h1>{{ posts[$route.params.id-1].title }}</h1>
    <p>
        Post Id = {{ $route.params.id }}
    </p>
    <p>
        {{ posts[$route.params.id-1].body }}
    </p>
</template>

<style scoped>

</style>