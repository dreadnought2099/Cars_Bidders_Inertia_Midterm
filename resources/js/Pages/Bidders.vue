<template>
    <MainLayout>
        <div class="flex justify-between items-center py-10 mx-4">
            <h1 class="text-4xl text-dark font-bold">
            Bidders<span class="text-primary">.</span>
        </h1>

        <input
            v-model="searchQuery"
            type="text"
            placeholder="Search bidders"
            class="p-2 border-2 rounded focus:border-primary focus:ring-primary outline-none w-64"
        />
        </div>
        <div v-if="filteredBidders.length > 0" class="mx-4 grid grid-cols-3 gap-4">
            <div
                v-for="bidder in filteredBidders"
                :key="bidder.id"
                class="card p-4 shadow-lg hover:text-primary rounded-lg hover:shadow-xl transition-all duration-300 w-full sm:max-w-sm md:max-w-md lg:max-w-xs xl:max-w-sm transform hover:scale-105 group cursor-pointer"
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
