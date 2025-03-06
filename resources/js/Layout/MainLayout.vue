<template>
    <div>
        <!-- Navigation Bar -->
        <div class="bg-primary shadow-md">
            <div
                class="container mx-auto flex justify-between items-center p-5"
            >
                <Link
                    href="/"
                    class="text-2xl text-white font-bold hover-underline"
                    >Midterm</Link
                >
                <nav class="flex gap-7">
                    <Link
                        href="/"
                        class="text-white text-xl font-semibold hover-underline"
                        >Home</Link
                    >
                    <Link
                        href="/bidders"
                        class="text-white text-xl font-semibold hover-underline"
                        >Bidders</Link
                    >
                    <Link
                        href="/cars"
                        class="text-white text-xl font-semibold hover-underline"
                        >Cars</Link
                    >
                </nav>
            </div>
        </div>

        <!-- Slot for Page Content -->
        <slot />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"; // Import Link from Inertia
</script>

<style scoped>
nav {
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
}
</style>
