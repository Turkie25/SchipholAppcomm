<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import EventForm from "@/Pages/events/eventForm.vue";
import EventContainers from "@/Pages/Events/EventContainers.vue";
import {ref} from "vue";
import EvenContainersAdmin from "@/Pages/Events/evenContainersAdmin.vue";
const numberOfContainers = ref(4); // Adjust the number of containers as needed

</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Events
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <event-form>

        </event-form>
      </div>

      <div class="	flex justify-center  ">
        <div class="flex flex-wrap gap-3 flex w-10/12">

<!--          <even-containers-admin-->
<!--              v-for="index in numberOfContainers"-->
<!--              :key="index"-->
<!--          ></even-containers-admin>-->
        </div>
      </div>

    </div>
  </AppLayout>
</template>