<template>
    <MainLayout>
        <!-- Header Section -->
        <div class="flex justify-between items-center py-10 mx-4">
            <h1 class="text-4xl text-dark font-bold">
                Bidders<span class="text-purple-500">.</span>
            </h1>

            <input
                v-model="searchQuery"
                type="text"
                placeholder="Search bidders"
                class="p-2 border-2 rounded-xl border-purple-300 focus:border-purple-500 focus:ring-purple-500 outline-none w-64"
            />
        </div>

        <!-- Bidders List Section -->
        <div
            v-if="filteredBidders.length > 0"
            class="mx-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
        >
            <div
                v-for="bidder in filteredBidders"
                :key="bidder.id"
                class="relative h-full"
            >
                <!-- Background Layer -->
                <span
                    class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"
                ></span>

                <!-- Foreground Bidder Card -->
                <div
                    class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 cursor-pointer group"
                >
                    <h3 class="text-lg font-bold text-gray-800 group-hover:text-purple-500">
                        {{ bidder.first_name }} {{ bidder.last_name }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 group-hover:text-purple-400">{{ bidder.email }}</p>
                    <p class="text-sm text-gray-600 group-hover:text-purple-400">{{ bidder.address }}</p>
                </div>
            </div>
        </div>

        <!-- No Bidders Available Message -->
        <div v-else class="text-center">
            <p>No bidders available at the moment.</p>
        </div>
    </MainLayout>
</template>

<script setup>
import { ref, computed } from "vue";
import MainLayout from "../Layout/MainLayout.vue";

const props = defineProps({
    bidders: Array,
});

const searchQuery = ref("");

const filteredBidders = computed(() => {
    return props.bidders.filter((bidder) => {
        return (
            bidder.first_name
                .toLowerCase()
                .includes(searchQuery.value.toLowerCase()) ||
            bidder.last_name
                .toLowerCase()
                .includes(searchQuery.value.toLowerCase()) ||
            bidder.email.toLowerCase().includes(searchQuery.value.toLowerCase())
        );
    });
});
</script>
