<template>
  <div class="relative mt-4">
    <label :for="name" class="mb-2 block text-white">
      {{ label }}<span v-if="!!star" class="ml-1 text-blood">*</span>
    </label>
    <slot></slot>
    <ErrorMessage :name="name" />
  </div>
</template>

<script setup>
import { ErrorMessage } from 'vee-validate';

const props = defineProps({
  name: String,
  label: String,
  star: {
    type: Boolean,
    required: false,
    defaul: false,
  },
});
</script>
