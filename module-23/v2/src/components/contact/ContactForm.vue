<script setup>
import { ref } from 'vue';
defineProps({
    displayPhone:{
        type:Boolean,
        default:true
    }
})
const name=ref('')
const email=ref('')
const phone=ref('')
const message=ref('')
function sendMessage(){
    console.log(name.value,email.value,phone.value,message.value);
}
</script>
<template>
            <div class="p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl">
          <h2 class="font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message</h2>
          <input type="text" v-model="name"
            class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 border border-black focus:outline-none p-4 mb-10"
            placeholder="Name">
          <input type="text" v-model="email"
            class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 border border-black focus:outline-none p-4 mb-10"
            placeholder="Email">
          <input type="text" v-show="displayPhone" v-model="phone"
            class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 border border-black focus:outline-none p-4 mb-10"
            placeholder="Phone">
          <textarea v-model="message"
            class="max-h-[200px] w-full text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 border border-black focus:outline-none p-4 mb-10"
            placeholder="Message"></textarea>
          <button @click="sendMessage()"
            class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 bg-black shadow-sm">Send</button>
        </div>
</template>
<style scoped></style>