<template>
    <MainLayout>
        <!-- Header Section -->
        <div class="flex justify-between items-center py-10 mx-4">
            <h1 class="text-4xl text-dark font-bold">
                Cars<span class="text-purple-500">.</span>
            </h1>

            <input
                v-model="searchQuery"
                type="text"
                placeholder="Search cars"
                class="p-2 border-2 rounded-xl border-purple-300 focus:border-purple-500 focus:ring-purple-500 outline-none w-64"
            />
        </div>

        <!-- Cars List Section -->
        <div
            v-if="filteredCars.length > 0"
            class="mx-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"
        >
            <div
                v-for="car in filteredCars"
                :key="car.id"
                class="relative h-full group"
            >
                <!-- Background Layer -->
                <span
                    class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500  rounded-lg"
                ></span>

                <!-- Foreground Car Card -->
                <div
                    class="relative h-full p-5 bg-white border-2 border-purple-500  rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 cursor-pointer group"
                >
                    <div class="flex items-center -mt-1">
                        <h3
                            class="my-2 ml-3 text-lg font-bold text-gray-700 group-hover:text-purple-500"
                        >
                            {{ car.make }} {{ car.model }} ({{ car.year }})
                        </h3>
                    </div>
                    <p
                        class="mt-3 mb-1 text-xs font-medium text-gray-500 group-hover:text-purple-400 uppercase"
                    >
                        ____________
                    </p>
                    <p class="mb-2 text-gray-600 group-hover:text-purple-400">
                        {{ car.miles }} miles
                    </p>
                </div>
            </div>
        </div>

        <!-- No Cars Available Message -->
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
