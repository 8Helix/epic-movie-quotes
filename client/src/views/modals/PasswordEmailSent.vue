<template>
  <modal-frame pop-up="true">
    <send-check class="mt-0 sm:mt-5"></send-check>
    <big-paragraph class="mt-4 sm:mt-5">Check your email</big-paragraph>
    <p class="mt-6 text-center text-white sm:mt-8 sm:px-14">
      We have sent a password recover instructions to your email
    </p>
    <big-button class="mt-10 bg-blood">Go to my email</big-button>
    <small-paragraph class="mt-8 mb-5">
      Skip, I&apos;ll confirm later
    </small-paragraph>
  </modal-frame>
</template>

<script setup>
import SendCheck from '../../components/icons/SendCheck.vue';
</script>
