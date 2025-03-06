<template>
    <MainLayout>
        <div class="text-6xl text-dark font-bold text-center py-16">
            <h2 class="text-4xl text-dark">
                {{ name }}<span class="text-primary">.</span>
            </h2>
            <p class="text-3xl text-dark">{{ course }} {{ year }}</p>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "../Layout/MainLayout.vue";
const name = "Raymart Magallanes";
const course = "BSIT";
const year = "III";
</script>
