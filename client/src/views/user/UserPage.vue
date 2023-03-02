<template>
  <div class="bg-primary backdrop-blur-xl">
    <the-header></the-header>
    <the-layout class="h-screen pt-8 text-white">
      <side-menu></side-menu>
      <p>{{ store.auth }}???????????????????????????</p>
      <router-view></router-view>
    </the-layout>
  </div>
</template>

<script setup>
import TheHeader from '../../components/units/TheHeader.vue';
import SideMenu from '../../components/units/SideMenu.vue';
import { useAuthStore } from '@/stores/auth.js';

const store = useAuthStore();
</script>
