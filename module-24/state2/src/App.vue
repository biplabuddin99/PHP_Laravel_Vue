<script setup>
import { onMounted } from 'vue';
import ThemeSwitcher from './components/ThemeSwitcher.vue';
import { theme } from './data/theme';

//mounted
onMounted(()=>{
  if(savedTheme){
    Object.assign(theme.JSON.parse(savedTheme))
  }
})
</script>

<template>
<div class="container">
  <h1 class="with-[600px] height-[300px]" :class="[`bg-${theme.bgcolor}-500`,`text-${theme.textColor}-100`]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias molestiae quo praesentium veniam atque mollitia, quia ipsum minima ipsam corrupti? Libero doloribus alias facere a hic obcaecati. Cupiditate, modi veritatis?</h1>
  <!-- <p>Theme: {{ theme }}</p> -->
   <button class="mt-10 font-bold py-2 px-4 rounded" :class="`bg-${theme.bgcolor}-500 text-${theme.buttonTextColor}-100`">Save</button>
</div>
<div>
  <p class="mt-5" :class="`text-${theme.bgcolor}-800`">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut ipsum at hic vero maxime laborum voluptate cumque sed autem!
  </p>
</div>
<br>
<hr>
<ThemeSwitcher/>
</template>

<style scoped>

</style>
