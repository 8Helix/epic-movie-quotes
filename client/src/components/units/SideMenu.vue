<template>
  <div class="col-start-1 col-end-3">
    <div class="flex gap-8">
      <div
        :style="{
          backgroundImage:
            'url(https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1385&q=80)',
        }"
        class="h-[60px] w-[60px] rounded-full bg-cover bg-center"
        :class="{ 'border border-blood': selectedRoute.profile }"></div>
      <div class="flex flex-col">
        <p class="text-2xl">Nino Tabagari</p>
        <router-link to="/profile">Edit your profile</router-link>
      </div>
    </div>
    <div class="mt-10 flex gap-[50px]">
      <the-house class="ml-[10px]" :color="selectedRoute.newsFeed"></the-house>
      <router-link to="/news-feed" class="text-2xl">News feed</router-link>
    </div>
    <div class="mt-10 flex gap-[50px]">
      <camera-reels
        class="ml-[10px]"
        :color="selectedRoute.movies"></camera-reels>
      <router-link to="/movies" class="text-2xl">List of movies</router-link>
    </div>
  </div>
</template>

<script setup>
import TheHouse from '../icons/TheHouse.vue';
import CameraReels from '../icons/CameraReels.vue';
import { onMounted, reactive } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const selectedRoute = reactive({
  profile: false,
  newsFeed: '#fff',
  movies: '#fff',
});

onMounted(() => {
  if (route.path === '/profile') {
    selectedRoute.profile = true;
  } else if (route.path === '/news-feed') {
    selectedRoute.newsFeed = '#E31221';
  } else if (route.path === '/movies') {
    selectedRoute.movies = '#E31221';
  }
});
</script>
