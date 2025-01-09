<script setup>
import {ref} from 'vue'
import router from '../router/index.js'
const username = ref('')
const password = ref('')



const login = () => {
    if(username.value === 'admin' && password.value === 'admin') {
        localStorage.setItem('loggedin', 1)
        router.push({name: 'Dashboard'})
    } else{
        alert('Invalid username or password')
    }
}
</script>

<template>
    <h1>Login</h1>
    <p>Welcome to the login page</p>
    <form @submit.prevent="login" action="">
        Username: <input type="text" v-model="username" /><br />
        Password: <input type="password" v-model="password" /><br />
        <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login</button>
    </form>
</template>

<style scoped>

</style>