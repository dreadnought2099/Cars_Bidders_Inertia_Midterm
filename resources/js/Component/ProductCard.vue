<script>
import { defineProps } from "vue";

defineProps({
    products: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <div class="max-w-7xl mx-auto mb-4 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-center text-3xl font-bold text-blue-600 mb-10">
            Products
        </h1>
        <div class="flex flex-wrap gap-6 justify-center">
            <div
                v-for="product in products"
                :key="product.id"
                class="bg-white p-5 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 w-full max-w-xs flex flex-col"
            >
                <h5 class="text-xl font-semibold text-blue-600 mb-2">
                    {{ product.name }}
                </h5>
                <p class="text-base text-gray-700 mb-4 flex-grow">
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
    </div>
</template>
