<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Inertia } from '@inertiajs/inertia';
import Modal from "@/Components/ReservatieModal.vue";
import Navbar from "@/Pages/Events/navbar.vue";
import {ref} from "vue";

function goToOverview() {
  Inertia.visit('/events'); // or the route name if using a named route
}

const props = defineProps({
  event: {
    type: Object,
    required: true
  }
});

const showModal = ref(false);

function openModal() {
  showModal.value = true;
}

function closeModal() {
  showModal.value = false;
}

</script>


<template>


  <navbar></navbar>

  <div class="bg-gray-100 min-h-screen py-8">

    <div class="flex justify-center">

      <div class="bg-white rounded-lg p-8 w-full max-w-4xl shadow-lg">

        <h1 class="text-3xl font-semibold mb-6">{{ event.name }}</h1>
        <div class="space-y-6">
          <div class="flex flex-col md:flex-row md:space-x-6">
            <div class="flex-1">
              <label class="block text-gray-700 font-medium mb-2">Location</label>
              <p class="text-gray-900">{{ event.location }}</p>
            </div>
            <div class="flex-1">
              <label class="block text-gray-700 font-medium mb-2">Duration</label>
              <p class="text-gray-900">{{ event.duration }}</p>
            </div>
            <div class="flex-1">
              <label class="block text-gray-700 font-medium mb-2">Capacity</label>
              <p class="text-gray-900">{{ event.capacity }}</p>
            </div>
          </div>
          <div class="space-y-4">
            <div class="flex flex-col md:flex-row md:space-x-6">
              <div class="flex-1">
                <label class="block text-gray-700 font-medium mb-2">Start Time</label>
                <p class="text-gray-900">{{ event.start_time }}</p>
              </div>
              <div class="flex-1">
                <label class="block text-gray-700 font-medium mb-2">End Time</label>
                <p class="text-gray-900">{{ event.end_time }}</p>
              </div>
            </div>
            <div>
              <label class="block text-gray-700 font-medium mb-2">Description</label>
              <p class="text-gray-900">{{ event.description }}</p>
            </div>
          </div>
          <primary-button @click="openModal" class="mt-6">
            Reserveer
          </primary-button>
        </div>
      </div>
    </div>
  </div>

  <Modal :isVisible="showModal" @update:isVisible="showModal = $event">
    <h2 class="text-lg font-semibold">{{ event.name }}</h2>
    <form @submit.prevent="closeModal">
      <div class="mb-4 mt-4">
        <label for="name" class="block text-gray-700 font-medium text-sm">Name</label>
        <input v-model="name" id="name" type="text" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm" required />
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium text-sm">Email</label>
        <input v-model="email" id="email" type="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm" required />
      </div>
      <div class="mb-4">
        <label for="number_of_people" class="block text-gray-700 font-medium text-sm">Number of People</label>
        <input v-model.number="numberOfPeople" id="number_of_people" type="number" min="0" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm" required />
      </div>
      <primary-button type="submit" >
        Submit
      </primary-button>
    </form>
  </Modal>

</template>


