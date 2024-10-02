<template>
  <section class="w-full max-w-4xl mt-12 mb-12 sticky top-0">
    <div class="bg-gray-900 p-6 rounded-lg shadow-md">
      <p v-if="! items.length" class="text-gray-400">В корзине пусто.</p>
      <p v-if="items.length > 0" class="text-gray-200">В корзине {{ items.length }} товаров на общую сумму ₽{{ totalPrice }}</p>
      <button v-if="items.length > 0" @click="clearCart" class="mt-4 w-full bg-red-600 text-white py-2 rounded hover:bg-red-500">Перейти к оформлению</button>
    </div>
  </section>
</template>

<script>
import {cartService} from "../services/CartService";

export default {
  computed: {
    items() {
      return cartService.getItems();
    },
    totalPrice() {
      return cartService.getTotalPrice();
    }
  },
  methods: {
    clearCart() {
      cartService.clearCart();
    },
  }
}
</script>