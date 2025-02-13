<script setup>
import ProductCard from "@/Component/ProductCard.vue";
import MainLayout from "../Layout/MainLayout.vue";

const products = [
    {
        id: 1,
        name: "Sony ZV-E1",
        description: "Sony ZV-E1 Full-frame vlog camera.",
        whole_sale_price: 134999,
        retail_price: 153999,
    },
    {
        id: 2,
        name: "Sony FX3",
        description: "Sony FX3 Cinema Line Full-frame camera.",
        whole_sale_price: 235000,
        retail_price: 258000,
    },
    {
        id: 3,
        name: "Sony FE 85mm F1.4 GM II SEL85F14GM2",
        description:
            "The Sony FE 85mm F1.4 GM II (SEL85F14GM2) is a high-performance prime lens designed for Sony's full-frame mirrorless cameras.",
        whole_sale_price: 120000,
        retail_price: 130000,
    },
    {
        id: 4,
        name: "Nanlite FC120C RGB LED Spotlight",
        description:
            "Find a multitude of color, control, and power options with the FC120C RGB LED Spotlight from Nanlite. .",
        whole_sale_price: 17115.75,
        retail_price: 19990,
    },
    {
        id: 5,
        name: "Blackmagic Design DaVinci Resolve Micro Color Panel",
        description:
            "The DaVinci Resolve Micro Color Panel is a compact yet powerful color panel that gives you all the control you need to create cinematic images.",
        whole_sale_price: 32277.76,
        retail_price: 37000,
    },
];
</script>

<template>
    <MainLayout>
        <ProductCard :products="products" />
    </MainLayout>
</template>
