<template>
    <MainLayout>
        <div class="space-y-4 text-center">
            <h1 class="text-6xl text-dark font-bold text-center py-16">
                Connect with me<span class="text-primary">.</span>
            </h1>
            <div class="flex flex-col items-center">
                <a
                    href="https://instagram.com/skerm_art/"
                    target="_blank"
                    class="text-lg hover:text-primary hover-underline-red inline-block"
                    >Instagram</a
                >
                <a
                    href="https://www.youtube.com/@paradoxx_the_art"
                    target="_blank"
                    class="text-lg hover:text-primary hover-underline-red inline-block"
                    >YouTube</a
                >
                <a
                    href="https://www.letterboxd.com/RMAGALLANEZ/"
                    target="_blank"
                    class="text-lg hover:text-primary hover-underline-red inline-block"
                    >Letterboxd</a
                >
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "../Layout/MainLayout.vue";
</script>
