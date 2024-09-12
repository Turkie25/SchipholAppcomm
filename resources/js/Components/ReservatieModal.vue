<template>
  <transition name="fade">
    <div v-if="isVisible" class="fixed inset-0 flex items-center justify-center z-50">
      <div class="fixed inset-0 bg-black opacity-50" @click="closeModal"></div>
      <div class="bg-white p-8 rounded-lg shadow-lg z-10 w-1/2 max-w-lg" @click.stop>
        <slot></slot>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { defineEmits } from 'vue';

const props = defineProps({
  isVisible: {
    type: Boolean,
    default: false
  }
});

const emit = defineEmits(['update:isVisible']);

function closeModal() {
  emit('update:isVisible', false);
}
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
