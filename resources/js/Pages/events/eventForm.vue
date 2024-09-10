<template>
  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-10 px-4">
    <h1 class="text-xl font-bold mb-4">Create New Event</h1>
    <form @submit.prevent="submitForm">
      <!-- Form Fields -->
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input
            type="text"
            id="name"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea
            id="description"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        ></textarea>
      </div>

      <div class="mb-4">
        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
        <input
            type="text"
            id="location"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <div class="mb-4">
        <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
        <input
            type="time"
            id="duration"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <div class="mb-4">
        <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
        <input
            type="number"
            id="capacity"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <div class="mb-4">
        <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
        <input
            type="time"
            id="start_time"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <div class="mb-4">
        <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
        <input
            type="time"
            id="end_time"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm"
            required
        />
      </div>

      <button
          type="submit"
          class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"
      >
        Create Event
      </button>
    </form>
  </div>
</template>

<script>

</script>