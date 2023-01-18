<template>
  <div
    class="absolute top-[346px] left-[50%] z-20 w-[615px] -translate-x-2/4 rounded-xl bg-black pt-6 pb-10">
    <big-paragraph class="ml-8 mb-6">Add new Email</big-paragraph>
    <div class="h-[1px] w-full bg-gray-400"></div>
    <input-field class="mt-[60px] ml-8" label="Email" name="email">
      <Field
        type="email"
        name="email"
        class="w-[528px] rounded bg-gray-400 py-[9px] px-[17px] text-light-black outline-none" />
    </input-field>
    <div class="mr-[55px] mt-14 flex items-center justify-end gap-8">
      <span
        class="cursor-pointer font-[20px] text-white"
        @click="$emit('close')">
        Cancel
      </span>
      <the-button
        class="bg-blood py-[9px] px-[17px] font-[20px]"
        @click="$emit('close')">
        Add
      </the-button>
    </div>
  </div>
</template>

<script setup>
import { Form, Field } from 'vee-validate';
const emit = defineEmits(['close']);
</script>
