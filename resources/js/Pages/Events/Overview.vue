<script setup>
import {Head, Link} from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import EventContainers from "@/Pages/Events/EventContainers.vue";
import {onMounted, ref} from "vue";
import events from "./Events.vue";
import Nav from "@/Pages/Events/navbar.vue";
import Navbar from "@/Pages/Events/navbar.vue";

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


function handleImageError() {
  document.getElementById('screenshot-container')?.classList.add('!hidden');
  document.getElementById('docs-card')?.classList.add('!row-span-1');
  document.getElementById('docs-card-content')?.classList.add('!flex-row');
  document.getElementById('background')?.classList.add('!hidden');
}


const selectedOption = ref('');
const options = ref([]); // Array to hold flight data

// Fetch flight data from the backend
onMounted(async () => {
  try {
    const response = await fetch('/api/flights');
    if (!response.ok) throw new Error('Network response was not ok');
    options.value = await response.json();
  } catch (error) {
    console.error('Error fetching flights:', error);
  }
});

function handleChange(event) {
  selectedOption.value = event.target.value;
}

</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <navbar></navbar>

    <div class="py-4 bg-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
          <select
              v-model="selectedOption"
              @change="handleChange"
              class="w-full max-w-lg px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none"
          >
            <option value="" disabled>Select an option</option>
            <option
                v-for="option in options"
                :key="option.flight_number"
                :value="option.flight_number"
            >
              {{ option.flight_number }} - {{ option.flight_one_name }}
            </option>
          </select>
        </div>
      </div>
    </div>

    <div class="	flex justify-center  ">
      <div class="flex flex-wrap gap-3 flex w-10/12">

        <event-containers
            v-for="event in $page.props.events"
            :event="event"
        ></event-containers>
      </div>
    </div>
  </div>
</template>
