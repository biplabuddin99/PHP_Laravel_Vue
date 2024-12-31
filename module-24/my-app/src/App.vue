<template>
  <Part1 />
  <hr>
  <Part2 />
  <hr>
  <Part3 />
  <!-- {{ products }} -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table">
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in products">
                <td>{{ item.title }}</td>
                <td>{{ item.category }}</td>
                <td>{{ item.price }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped></style>
<script setup>
import Part1 from './components/Part1.vue';
import Part2 from './components/Part2.vue';
import Part3 from './components/Part3.vue';
import { ref } from 'vue';
const products = ref([]);
CallApi();
async function CallApi() {
  const response = await fetch("https://dummyjson.com/products");
  const data = await response.json();
  console.log(data);
  products.value = data['products'];
}
</script>