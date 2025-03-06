<!-- resources/js/Pages/Bidders.vue -->
<template>
    <MainLayout>
        <h1 class="text-6xl text-dark font-bold text-center py-16">
            Bidders<span class="text-primary">.</span>
        </h1>

        <input
            v-model="searchQuery"
            type="text"
            placeholder="Search Bidders..."
            class="mb-4 p-2 border rounded"
        />

        <div v-if="filteredBidders.length > 0" class="grid grid-cols-3 gap-4">
            <div
                v-for="bidder in filteredBidders"
                :key="bidder.id"
                class="card p-4 shadow-lg"
            >
                <h3 class="text-xl font-bold">
                    {{ bidder.first_name }} {{ bidder.last_name }}
                </h3>
                <p>{{ bidder.email }}</p>
                <p>{{ bidder.address }}</p>
            </div>
        </div>

        <div v-else class="text-center">
            <p>No bidders available.</p>
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
