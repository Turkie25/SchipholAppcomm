<script setup>
import {Link} from "@inertiajs/vue3";
import ApplicationMark from "@/Components/ApplicationMark.vue";
</script>

<template>
  <nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link :href="route('events')">
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
</template>
