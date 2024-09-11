<template>
  <div class="flex justify-center">
  <div class="bg-white shadow-md w-9/12	rounded-lg border border-gray-200 p-4  mt-6">
    <div class="flex justify-between">
    <h2 class="text-lg font-semibold mb-2">Name</h2>
      <button
          type="submit"
          class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700"
      >
        delete
      </button>    </div>
    <div class="space-y-2 flex flex-col gap-6">
      <div class="flex flex-row gap-5">
        <label class="block text-gray-700 font-medium text-sm">Location</label>
        <p class="mt-1 text-gray-900 text-sm"></p>

        <label class="block text-gray-700 font-medium text-sm">Duration</label>
        <p class="mt-1 text-gray-900 text-sm"></p>

        <label class="block text-gray-700 font-medium text-sm">Capacity</label>
        <p class="mt-1 text-gray-900 text-sm"></p>
      </div>

      <div class="flex flex-col gap-2">
        <div class="flex flex-row gap-5">
          <label class="block text-gray-700 font-medium text-sm">Start Time</label>
          <p class="mt-1 text-gray-900 text-sm"></p>

          <label class="block text-gray-700 font-medium text-sm">End Time</label>
          <p class="mt-1 text-gray-900 text-sm"></p>
        </div>
        <div>
          <label class="block text-gray-700 font-medium text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</label>
          <p class="mt-1 text-gray-900 text-sm"></p>
        </div>
      </div>

    </div>
  </div>
  </div>
</template>
<script setup>
</script>