<template>
  <header class="w-full text-center py-8">
    <h1 class="text-4xl font-bold text-white">Пицца Нуар</h1>
    <p class="text-gray-400 text-sm mt-2">Где каждый кусок — шаг в бездну.</p>
  </header>

  <section class="w-full max-w-4xl mt-12 mb-12">
    <div class="bg-gray-900 p-6 rounded-lg shadow-md">
      <p class="text-gray-400">В корзине пусто.</p>
      <button class="mt-4 w-full bg-red-600 text-white py-2 rounded hover:bg-red-500">Перейти к оформлению</button>
    </div>
  </section>

  <section class="w-full max-w-4xl mt-12">
    <h2 class="text-2xl text-gray-200 mb-6">Наше меню</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <div v-for="pizza in pizzas" class="p-6 bg-gray-800 rounded-lg shadow-md">
        <img v-bind:src="pizza.image">
        <h3 class="text-lg font-semibold text-white mt-2">{{ pizza.name }}</h3>
        <p class="text-gray-400 mt-2">{{ pizza.description }}</p>
        <p class="text-gray-300 font-semibold mt-4">₽{{ pizza.price }}</p>
        <button class="mt-4 w-full bg-gray-700 text-white py-2 rounded hover:bg-gray-600">В корзину</button>
      </div>
    </div>
  </section>

  <footer class="w-full py-4 text-center border-t border-gray-700 mt-6">
    <p class="text-gray-500">© 2024 Пицца Нуар. Все права защищены.</p>
  </footer>
</template>

<script>
  export default {
    props: {
      pizzas: Array,
    },
  }
</script>

<style>
  body {
    background-color: #1b1b1b;
    color: #e5e5e5;
    font-family: 'Arial', sans-serif;
  }
</style>