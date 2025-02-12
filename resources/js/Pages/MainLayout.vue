<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-primary shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <Link href="/" class="text-white font-semibold hover-underline">
                <h1 class="text-2xl text-secondary font-bold">RMAGALLANEZ</h1>
            </Link>
            <nav class="flex gap-7">
                <Link href="/" class="text-white font-semibold hover-underline">
                    Home
                </Link>
                <Link href="/about" class="text-white font-semibold hover-underline">
                    About
                </Link>
                <Link href="/contact" class="text-white font-semibold hover-underline">
                    Contact
                </Link>
                <Link href="/faq" class="text-white font-semibold hover-underline">
                    FAQ
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
