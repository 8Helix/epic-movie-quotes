<template>
  <div class="col-start-1 col-end-3">
    <div class="flex gap-8">
      <div
        :style="{
          backgroundImage:
            'url(https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1385&q=80)',
        }"
        class="h-[60px] w-[60px] rounded-full border border-blood bg-cover bg-center"></div>
      <div class="flex flex-col">
        <p class="text-2xl">Nino Tabagari</p>
        <router-link to="/profile">Edit your profile</router-link>
      </div>
    </div>
    <div class="mt-10 flex gap-[50px]">
      <the-house class="ml-[10px]"></the-house>
      <p class="text-2xl">News feed</p>
    </div>
    <div class="mt-10 flex gap-[50px]">
      <camera-reels class="ml-[10px]"></camera-reels>
      <p class="text-2xl">List of movies</p>
    </div>
  </div>
</template>

<script setup>
import TheHouse from '../icons/TheHouse.vue';
import CameraReels from '../icons/CameraReels.vue';
</script>
