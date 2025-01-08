<script setup>
import { onMounted } from 'vue'
import ThemeSwitcher from './components/ThemeSwitcher.vue';
import { theme } from './data/theme';
// import { useStore } from './data/store';
// const store = useStore();
import {store} from './data/normalstore'


//mounted
onMounted(() => {
  const savedTheme = localStorage.getItem('theme')
  if (savedTheme) {
    Object.assign(theme, JSON.parse(savedTheme))
  }
})
</script>

<template>
  <div class="mt-2">
    <ThemeSwitcher />
  </div>
  <!-- <div class="container">
    <h1 class="with-[600px] height-[300px]" :class="[`bg-${theme.bgcolor}-500`, `text-${theme.textColor}-100`]">Lorem
      ipsum dolor sit amet consectetur adipisicing elit. Molestias molestiae quo praesentium veniam atque mollitia, quia
      ipsum minima ipsam corrupti? Libero doloribus alias facere a hic obcaecati. Cupiditate, modi veritatis?</h1>
    <p>Theme: {{ theme }}</p>
    <button class="mt-10 font-bold py-2 px-4 rounded"
      :class="`bg-${theme.bgcolor}-500 text-${theme.buttonTextColor}-100`">Save</button>
  </div>
  <div>
    <p class="mt-5" :class="`text-${theme.bgcolor}-800`">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut ipsum at hic vero maxime laborum voluptate cumque
      sed autem!
    </p>
  </div> -->
  <br>
  <hr>
  <div class="container mt-5">
    <div class="width-[600px] height-[300px] p-10" :class="[
      `bg-${theme.bgcolor}-500`,
      `text-${theme.textColor}-100`
    ]">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit maxime dolore accusamus at repellendus
      cupiditate quaerat sapiente nobis aperiam quod.
    </div>
    <p class="mt-5" :class="`text-${theme.bgcolor}-800`">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, recusandae. Suscipit, alias sit? Ullam culpa
      veniam impedit eaque omnis error?
    </p>
    <button class="mt-10 font-bold py-2 px-4 rounded"
      :class="`bg-${theme.buttonColor}-500 hover:bg-${theme.buttonColor}-700 text-${theme.buttonTextColor}-100 `">
      Button
    </button>
  </div>
  <div class="mt-10">
    Store Value: {{ store.counter }}
    <button @click="store.increase()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2">
      ++
    </button>
    <button @click="store.decrease()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      --
    </button>
  </div>
</template>

<style scoped></style>
