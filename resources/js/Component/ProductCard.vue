<template>
    <div class="py-12 px-6">
        <h1
            class="text-center text-4xl sm:text-5xl lg:text-6xl font-bold text-dark mb-16"
        >
            Famous <span class="text-primary">Paintings</span>
        </h1>
        <div class="flex flex-wrap gap-6 justify-center">
            <div
                v-for="product in products"
                :key="product.id"
                class="bg-white hover:text-primary p-5 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 w-full sm:max-w-sm md:max-w-md lg:max-w-xs xl:max-w-sm transform hover:scale-105 group"
            >
                <h5 class="text-xl font-semibold mb-3 group-hover:text-primary">
                    {{ product.name }}
                </h5>
                <img
                    :src="product.image"
                    :alt="product.name"
                    class="w-full h-64 md:h-72 rounded-md mb-4 object-cover"
                />
                <p class="text-base text-gray-700 mb-4 text-justify flex-grow group-hover:text-primary">
                    {{ product.description }}
                </p>
                <div class="flex justify-between text-sm mt-auto">
                    <p class="text-dark font-semibold group-hover:text-primary">
                        Wholesale: ₱{{ product.whole_sale_price.toFixed(2) }}
                    </p>
                    <p class="text-dark font-semibold group-hover:text-primary">
                        Retail: ₱{{ product.retail_price.toFixed(2) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from "vue";

defineProps({
    products: {
        type: Array,
        required: true,
    },
});
</script>
