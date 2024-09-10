<template>
  <div>
    <h1>Create Event</h1>
    <form @submit.prevent="submit">
      <div>
        <label for="name">Name</label>
        <input type="text" v-model="form.name" id="name" required />
      </div>
      <div>
        <label for="description">Description</label>
        <textarea v-model="form.description" id="description" required></textarea>
      </div>
      <div>
        <label for="location">Location</label>
        <input type="text" v-model="form.location" id="location" required />
      </div>
      <div>
        <label for="duration">Duration</label>
        <input type="text" v-model="form.duration" id="duration" required />
      </div>
      <div>
        <label for="capacity">Capacity</label>
        <input type="number" v-model="form.capacity" id="capacity" required />
      </div>
      <div>
        <label for="start_time">Start Time</label>
        <input type="datetime-local" v-model="form.start_time" id="start_time" required />
      </div>
      <div>
        <label for="end_time">End Time</label>
        <input type="datetime-local" v-model="form.end_time" id="end_time" required />
      </div>
      <button type="submit">Create Event</button>
    </form>
  </div>
</template>

<script>
import { ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';

export default {
  props: {
    // Any props needed
  },
  setup() {
    const form = useForm({
      name: '',
      description: '',
      location: '',
      duration: '',
      capacity: '',
      start_time: '',
      end_time: '',
    });

    function submit() {
      form.post(route('dashboard.Events.store'));
    }

    return { form, submit };
  },
};
</script>
