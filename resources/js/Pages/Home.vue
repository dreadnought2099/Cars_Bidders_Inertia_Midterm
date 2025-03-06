<template>
    <MainLayout>
        <div class="text-6xl text-dark font-bold text-center py-16">
            <h2 class="text-5xl text-dark py-4">
                {{ first_name }} <span class="text-purple-500">{{ last_name }}</span>
            </h2>
            <p class="text-4xl text-dark">{{ course }} <span class="text-purple-500">{{ year }}</span></p>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "../Layout/MainLayout.vue";
const first_name = "Raymart";
const last_name = "Magallanes";
const course = "BSIT";
const year = "III";
</script>
