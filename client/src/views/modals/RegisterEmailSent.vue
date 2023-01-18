<template>
  <modal-frame pop-up>
    <send-check class="mt-0 sm:mt-5"></send-check>
    <big-paragraph class="mt-4 sm:mt-5">Thank you!</big-paragraph>
    <p class="mt-6 text-center text-white sm:mt-8 sm:px-12">
      Please check your email and follow the instructions to activate your
      account.
    </p>
    <a href="https://gmail.com/" target="_blank">
      <the-button
        class="mt-6 mb-24 bg-blood px-10 sm:mt-10 sm:mb-4 sm:px-[125px]">
        Go to my email
      </the-button>
    </a>
  </modal-frame>
</template>

<script setup>
import SendCheck from '../../components/icons/SendCheck.vue';
</script>
