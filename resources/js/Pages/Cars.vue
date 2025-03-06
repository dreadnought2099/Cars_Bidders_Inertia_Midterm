<template>
    <MainLayout>
        <div class="flex justify-between items-center py-10 mx-4">
            <h1 class="text-4xl text-dark font-bold">
                Cars<span class="text-primary">.</span>
            </h1>

            <input
                v-model="searchQuery"
                type="text"
                placeholder="Search cars"
                class="p-2 border-2 focus:border-primary focus:ring-primary outline-none rounded w-64"
            />
        </div>

        <div v-if="filteredCars.length > 0" class="mx-4 grid grid-cols-3 gap-4">
            <div
                v-for="car in filteredCars"
                :key="car.id"
                class="card p-4 shadow-lg hover:text-primary rounded-lg hover:shadow-xl transition-all duration-300 w-full sm:max-w-sm md:max-w-md lg:max-w-xs xl:max-w-sm transform hover:scale-105 group cursor-pointer"
            >
                <h3 class="text-xl font-bold">
                    {{ car.make }} {{ car.model }} ({{ car.year }})
                </h3>
                <p>{{ car.miles }} miles</p>
            </div>
        </div>

        <div v-else class="text-center">
            <p>No cars available.</p>
        </div>
    </MainLayout>
</template>

<script setup>
import { ref, computed } from "vue";
import MainLayout from "../Layout/MainLayout.vue";

const props = defineProps({
    cars: Array,
});

const searchQuery = ref("");

const filteredCars = computed(() => {
    return props.cars.filter((car) => {
        return (
            car.make.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            car.model.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            car.year.toString().includes(searchQuery.value) ||
            car.miles.toString().includes(searchQuery.value)
        );
    });
});
</script>
