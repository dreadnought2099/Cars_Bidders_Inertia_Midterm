<script setup>
import ProductCard from "@/Component/ProductCard.vue";
import MainLayout from "../Layout/MainLayout.vue";

const products = [
    {
        id: 1,
        name: "Creation of Adam",
        description: "'The Creation of Adam' is one of the most famous fresco paintings in the world, created by Michelangelo around 1511–1512 as part of the Sistine Chapel ceiling in Vatican City. It is a masterpiece of the Italian Renaissance and one of the most iconic images in art history.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "image/CreationOfAdam.jpg",
    },
    {
        id: 2,
        name: "Starry Night",
        description: "'The Starry Night' is one of the most famous and recognizable paintings in the world, created by Vincent van Gogh in 1889. It is a masterpiece of Post-Impressionism, known for its swirling skies and emotional intensity.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "image/StarryNight.jpg",
    },
    {
        id: 3,
        name: "Napoleon Crossing the Alps",
        description:
            "'Napoleon Crossing the Alps' is an iconic Neoclassical painting by Jacques-Louis David, created between 1801 and 1805. It depicts Napoleon Bonaparte heroically leading his army through the Great St. Bernard Pass during his 1800 campaign against Austria.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "image/Napoleon.jpg",
    },
    {
        id: 4,
        name: "The Scream",
        description:
            "'The Scream' is one of the most famous and haunting paintings in art history, created by Norwegian artist Edvard Munch in 1893. It is considered a masterpiece of Expressionism, capturing raw emotion and existential angst.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "image/the-scream.jpg",
    },
    {
        id: 5,
        name: "Girl with a Pearl Earring",
        description:
            "'Girl with a Pearl Earring' is a famous painting by Johannes Vermeer, created around 1665 during the Dutch Golden Age. Often called the 'Mona Lisa of the North', it is known for its striking realism, soft lighting, and the mysterious expression of the subject.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "/image/girl with a pearl earring.jpg",
    },
    {
        id: 6,
        name: "Mona Lisa",
        description:
            "The Mona Lisa is one of the most famous paintings in the world, created by Leonardo da Vinci between 1503 and 1506 (though some believe he worked on it until 1517). It is a Renaissance masterpiece, housed in the Louvre Museum in Paris, France.",
        whole_sale_price: 100,
        retail_price: 199,
        image: "/image/monalisa.jpg",
    },
];
</script>

<template>
    <MainLayout>
        <ProductCard :products="products" />
    </MainLayout>
</template>
