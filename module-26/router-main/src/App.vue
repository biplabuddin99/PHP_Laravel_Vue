<script setup>
import { computed } from 'vue';
import { RouterView, RouterLink } from 'vue-router';
import router from './router/index.js'
const logout = () => {
  localStorage.removeItem('loggedin');
  router.push({ name: 'Home' });
}

// const isLoggedIn = computed(() => {
//   return localStorage.getItem('loggedin') === '1';
// });

</script>

<template>
  <header class="bg-black border-b-light-100 border-b h-20 text-white items-center flex p-5 text-2xl">A Wonderful Blog</header>
  <section class="flex">
    <aside class="w-[450px] bg-black ">
      <section class="mt-[40px] text-white p-5">
        <ul class="flex flex-col space-y-5">
          <li >
            <RouterLink :to="{ name: 'Login' }">Login</RouterLink>
          </li>
          <li >
            <a href="#" @click="logout()">Logout</a>
          </li>
          <li>
            <RouterLink :to="{ name: 'Dashboard' }">Dashboard</RouterLink>
          </li>
          <li>
            <RouterLink :to="{ name: 'Home' }">Home</RouterLink>
          </li>
          <li>
            <a href="/about">About</a>
          </li>
          <li>
            <RouterLink :to="{ name: 'Contact' }">Contact</RouterLink>
          </li>
          <li>
            <RouterLink to="/blog">Blog</RouterLink>
          </li>

          <li>
            <RouterLink to="/post/1">Post 1</RouterLink>
          </li>
          <li>
            <RouterLink :to="{ name: 'Post', params: { id: 2 } }">Post 2</RouterLink>
          </li>
          <li>
            <RouterLink :to="{ name: 'Post', params: { id: 3 } }">Post 3</RouterLink>
          </li>

        </ul>
      </section>
    </aside>
    <main class="w-full min-h-screen p-5 prose">
      <RouterView />
    </main>

    <!-- named router view -->
    <RouterView name="sidebar" class="w-[450px] bg-black text-white p-5"></RouterView>
  </section>
  <footer></footer>

</template>

<style scoped></style>
