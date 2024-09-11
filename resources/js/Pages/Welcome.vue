<script setup>
import {Head, Link} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import EventContainers from "@/Pages/events/eventContainers.vue";
import {ref} from "vue";

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});

const numberOfContainers = ref(12); // Adjust the number of containers as needed

function handleImageError() {
  document.getElementById('screenshot-container')?.classList.add('!hidden');
  document.getElementById('docs-card')?.classList.add('!row-span-1');
  document.getElementById('docs-card-content')?.classList.add('!flex-row');
  document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-white border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <!-- Logo -->
          <div class="flex-shrink-0">
            <Link :href="route('dashboard')">
              <ApplicationMark class="block h-9 w-auto"/>
            </Link>
          </div>

          <!-- Navigation Links -->
          <div class="hidden space-x-8 sm:flex sm:ml-auto">
            <Link :href="route('login')">
              Log in
            </Link>
            <Link :href="route('register')">
              Register
            </Link>
          </div>
        </div>
      </div>
    </nav>


    <div class="py-4 bg-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
          <input
              type="text"
              placeholder="Search..."
              class="w-full max-w-lg px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"></div>
      </div>
    </div>


    <div class="	flex justify-center  ">
      <div class="flex flex-wrap gap-3 flex w-10/12 justify-center">

        <event-containers
            v-for="index in numberOfContainers"
            :key="index"
        ></event-containers>
      </div>
    </div>
  </div>

</template>
