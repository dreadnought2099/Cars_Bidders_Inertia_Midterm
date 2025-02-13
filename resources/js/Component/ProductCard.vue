<script setup>
import { defineProps } from "vue";

defineProps({
    products: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <h1 class="text-center text-2xl font-bold text-dark mb-16">Famous Paintings
        <div class="flex flex-wrap gap-6 justify-center">
            <div
                v-for="product in products"
                :key="product.id"
                class="bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 w-full max-w-xs flex flex-col cursor-pointer"
            >
                <h5 class="text-xl font-semibold text-dark-600 mb-2">
                    {{ product.name }}
                </h5>
                <img :src="product.image" :alt="product.name" class="w-full h-screen object-cover">
                <p class="text-base text-gray-700 mb-4 text-justify flex-grow">
                    {{ product.description }}
                </p>
                <div class="flex justify-between text-sm mt-auto">
                    <p class="text-red-500 font-semibold">
                        Wholesale: ₱{{ product.whole_sale_price.toFixed(2) }}
                    </p>
                    <p class="text-red-500 font-semibold">
                        Retail: ₱{{ product.retail_price.toFixed(2) }}
                    </p>
                </div>
            </div>
        </div>
    </h1>
</template>
