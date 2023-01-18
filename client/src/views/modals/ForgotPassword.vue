<template>
  <modal-frame>
    <big-paragraph class="mt-20 text-[32px] sm:mt-0">
      Forgot password?
    </big-paragraph>
    <small-paragraph class="mt-3">
      Enter the email and we&apos;ll send an email with <br />
      instructions to reset your password
    </small-paragraph>
    <Form name="forgot-password" class="mt-2">
      <input-field label="Email" name="email">
        <Field
          name="email"
          type="email"
          placeholder="Enter your email"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
      </input-field>
      <big-button type="submit" class="mt-6 bg-blood">
        Send instructions
      </big-button>
    </Form>
    <router-link
      to="/login"
      class="mt-8 flex items-center gap-3 text-gray-blue">
      <arrow-vector></arrow-vector> Back to log in
    </router-link>
  </modal-frame>
</template>

<script setup>
import { Form, Field } from 'vee-validate';
import ArrowVector from '../../components/icons/ArrowVector.vue';
</script>
