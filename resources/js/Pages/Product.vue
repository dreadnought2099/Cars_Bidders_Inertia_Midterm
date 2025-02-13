<script setup>
import ProductCard from "@/Component/ProductCard.vue";
import MainLayout from "../Layout/MainLayout.vue";

const products = [
    {
        id: 1,
        name: "ASUS ROG Zephyrus G14",
        description:
            "A powerful gaming laptop with AMD Ryzen 9 and RTX 4060 GPU.",
        whole_sale_price: 85000,
        retail_price: 90000,
    },
    {
        id: 2,
        name: "MacBook Air M2",
        description:
            "Apple's lightweight and efficient laptop with the M2 chip.",
        whole_sale_price: 65000,
        retail_price: 70000,
    },
    {
        id: 3,
        name: "Custom Gaming PC",
        description:
            "Built with an Intel i9, RTX 4070, and 32GB RAM for high-end gaming.",
        whole_sale_price: 120000,
        retail_price: 130000,
    },
    {
        id: 4,
        name: "Apple iMac 24-inch",
        description:
            "An all-in-one desktop with an M1 chip and Retina display.",
        whole_sale_price: 100000,
        retail_price: 105000,
    },
    {
        id: 5,
        name: "iPhone 15 Pro Max",
        description:
            "Apple's latest flagship smartphone with an A17 Pro chip and titanium frame.",
        whole_sale_price: 75000,
        retail_price: 80000,
    },
];
</script>

<template>
    <MainLayout>
        <ProductCard :products="products" />
    </MainLayout>
</template>
