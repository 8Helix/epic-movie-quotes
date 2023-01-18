<template>
  <div class="bg-primary backdrop-blur-xl">
    <the-header></the-header>
    <the-layout class="h-screen pt-8 text-white">
      <side-menu></side-menu>
      <slot></slot>
    </the-layout>
  </div>
</template>

<script setup>
import TheHeader from './TheHeader.vue';
import SideMenu from './SideMenu.vue';
</script>
