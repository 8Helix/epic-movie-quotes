<template>
  <message-frame header="Whoops!">
    <template #image>
      <the-ghost class="mt-7 sm:mt-[3.8vh]"></the-ghost>
      <the-eclipse class="mt-7 mb-7"></the-eclipse>
    </template>
    <template #paragraph> We can't see the page you are looking for</template>
  </message-frame>
</template>

<script setup>
import MessageFrame from '@/components/layout/MessageFrame.vue';
import TheGhost from '@/components/icons/TheGhost.vue';
import TheEclipse from '@/components/icons/TheEclipse.vue';
</script>
