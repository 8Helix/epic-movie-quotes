<template>
  <div class="relative flex h-screen w-screen justify-center bg-primary">
    <div class="absolute mt-[103px] flex flex-col items-center sm:top-[179px]">
      <slot name="image"></slot>
      <h1 class="text-2xl font-bold text-white sm:text-[47px]">
        {{ header }}
      </h1>
      <p class="mt-4 text-center text-base font-medium text-white sm:text-2xl">
        <slot name="paragraph"></slot>
      </p>
      <router-link to="/">
        <the-button
          class="mt-8 bg-blood px-7 py-[7px] sm:mt-[47px] sm:px-[17px] sm:py-[9px]">
          Return home
        </the-button>
      </router-link>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  header: String,
});
</script>
