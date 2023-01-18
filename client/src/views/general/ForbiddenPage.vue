<template>
  <message-frame header="You shall not pass!">
    <template #image>
      <div class="relative">
        <the-gandolf class="relative z-10"></the-gandolf>
        <union-love class="-z-8 absolute bottom-11 left-[55px]"></union-love>
      </div>
    </template>
    <template #paragraph>
      <div class="mx-12 sm:mx-0">
        Sorry, but you don&apos;t have permission to access this page
      </div>
    </template>
  </message-frame>
</template>

<script setup>
import MessageFrame from '@/components/layout/MessageFrame.vue';
import TheGandolf from '@/components/icons/TheGandolf.vue';
import UnionLove from '@/components/icons/UnionLove.vue';
</script>
