<script setup>

import{ref} from "vue";

let liste = [
  "Sean", "Paycee", "Müller"
];

let click = () => {
  console.log("Akc");
}

let counter = ref(0);

let plus = () => {
  counter.value++
}

let minus = () => {
  counter.value--
}

</script>



<template>
  <div>
    <h1>Hallo</h1>
    <p v-on:mouseover="click" v-on:click="click" v-for="name in liste" :key="name">
      {{name}}
    </p>

    <h1 :class="counter > 10 ? 'rot' : 'grün'">{{counter}}</h1>
    <button v-on:click="plus">Hinzufügen</button>
    <button v-on:click="minus">Abziehen</button>
    <p v-if="counter < 10">Kleiner als 10</p>
    <p v-else-if="counter == 10">Genu 10</p>
    <p v-else>Größer als 10</p>
  </div>
</template>


<style>
.rot {
  color: red;
}

.grün {
  color: green;
}
</style>