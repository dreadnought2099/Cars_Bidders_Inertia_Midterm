<!-- resources/js/Pages/Cars.vue -->
<template>
    <MainLayout>
        <h1 class="text-6xl text-dark font-bold text-center py-16">
            Cars<span class="text-primary">.</span>
        </h1>

        <input
            v-model="searchQuery"
            type="text"
            placeholder="Search Cars..."
            class="mb-4 p-2 border rounded"
        />

        <div v-if="filteredCars.length > 0" class="grid grid-cols-3 gap-4">
            <div
                v-for="car in filteredCars"
                :key="car.id"
                class="card p-4 shadow-lg"
            >
                <h3 class="text-xl font-bold">
                    {{ car.make }} {{ car.model }}
                </h3>
                <p>{{ car.year }}</p>
                <p>{{ car.miles }} miles</p>
            </div>
        </div>

        <div v-else class="text-center">
            <p>No cars available.</p>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "../Layout/MainLayout.vue";

const props = defineProps({
    cars: Array,
});

const searchQuery = ref("");

const filteredCars = computed(() => {
    return props.cars.filter((car) => {
        return (
            car.make.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            car.model.toLowerCase().includes(searchQuery.value.toLowerCase())
        );
    });
});
</script>
