<template>
  <modal-frame pop-up>
    <task-alt class="mt-0 sm:mt-2"></task-alt>
    <big-paragraph class="mt-4 sm:mt-5">Thank you!</big-paragraph>
    <p class="mt-6 text-center text-white sm:mt-8">
      Your account has been activated.
    </p>
    <router-link to="/login">
      <the-button
        class="mt-6 mb-24 bg-blood px-10 sm:mt-10 sm:mb-4 sm:w-[360px]">
        Go to my news feed
      </the-button>
    </router-link>
  </modal-frame>
</template>

<script setup>
import TaskAlt from '../../components/icons/TaskAlt.vue';
</script>
