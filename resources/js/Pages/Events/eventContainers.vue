<template>
  <div class="bg-white shadow-md w-3/4 rounded-lg border border-gray-200 p-4 max-w-md mx-auto mt-6">
    <h2 class="text-lg font-semibold mb-2">{{ event.name }}</h2>
    <div class="space-y-2 flex flex-col gap-6">
      <div class="flex flex-row gap-5">
        <label class="block text-gray-700 font-medium text-sm">{{ event.location }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>

        <label class="block text-gray-700 font-medium text-sm">{{ event.duration }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>

        <label class="block text-gray-700 font-medium text-sm">{{ event.capacity }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>
      </div>

      <div class="flex flex-col gap-2">
      <div class="flex flex-row gap-5">
        <label class="block text-gray-700 font-medium text-sm">{{ event.start_time }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>

        <label class="block text-gray-700 font-medium text-sm">{{ event.end_time }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>
      </div>
      <div>
        <label class="block text-gray-700 font-medium text-sm">{{ event.description }}</label>
        <p class="mt-1 text-gray-900 text-sm"></p>
      </div>
    </div>

    </div>
  </div>
</template>
<script setup>
defineProps({
  event: {
    type: Array,
  }});
</script>