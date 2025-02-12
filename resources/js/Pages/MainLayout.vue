<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-primary shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl text-secondary font-bold">RMAGALLANEZ</h1>
            <nav class="flex gap-6">
                <Link href="/" class="text-white font-semibold relative overflow-hidden group">
                    Home
                    <span class="absolute left-0 bottom-0 block w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </Link>
                <Link href="/about" class="text-white font-semibold relative overflow-hidden group">
                    About
                    <span class="absolute left-0 bottom-0 block w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </Link>
                <Link href="/contact" class="text-white font-semibold relative overflow-hidden group">
                    Contact us
                    <span class="absolute left-0 bottom-0 block w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </Link>
                <Link href="/faq" class="text-white font-semibold relative overflow-hidden group">
                    FAQ
                    <span class="absolute left-0 bottom-0 block w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
                </Link>

            </nav>
        </div>
    </div>
    <slot />
</template>

<style scoped>
nav {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}
</style>
