<template>
  <modal-frame>
    <big-paragraph>Log in to your account</big-paragraph>
    <small-paragraph class="mt-3">
      Welcome back! Please enter your details.
    </small-paragraph>
    <Form name="register" class="mt-2" @submit="onSubmit">
      <input-field label="Email" name="email">
        <Field
          name="email"
          type="email"
          placeholder="Enter your email"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
      </input-field>
      <input-field label="Password" name="password">
        <Field
          name="password"
          :type="passwordType"
          placeholder="Password"
          class="w-[360px] py-[7px] pl-[13px] pr-[40px] text-base sm:w-[392px]" />
        <eye-slash
          class="absolute top-[45px] right-[13px] cursor-pointer"
          @click="togglePasswordType"></eye-slash>
      </input-field>
      <div class="mt-4 flex items-center justify-between">
        <div>
          <Field
            id="remember"
            type="checkbox"
            name="remember"
            value="false"
            class="mr-2 accent-light-blue focus:outline-0" />
          <label for="remember" class="text-white">Remember me</label>
        </div>
        <router-link to="/forgot-password" class="text-light-blue underline">
          Forgot password
        </router-link>
      </div>
      <big-button type="submit" class="mt-4 bg-blood">Sign in</big-button>
    </Form>
    <big-button class="mt-4 border border-white">
      <google-logo class="inline"></google-logo>
      Sign in with Google
    </big-button>
    <small-paragraph class="mt-8">
      Don't have an account yet?
      <router-link to="/register" class="text-light-blue underline">
        Sign up
      </router-link>
    </small-paragraph>
  </modal-frame>
</template>

<script setup>
import { ref } from 'vue';
import axiosInstance from '@/config/axios';
import { useAuthStore } from '@/stores/auth';
import { useRouter } from 'vue-router';
import { Form, Field } from 'vee-validate';
import GoogleLogo from '../../components/icons/GoogleLogo.vue';

const authStore = useAuthStore();

const router = useRouter();

const passwordType = ref('password');

function togglePasswordType() {
  if (passwordType.value === 'password') {
    passwordType.value = 'text';
  } else {
    passwordType.value = 'password';
  }
}

const onSubmit = async (values) => {
  try {
    const response = await axiosInstance.post(`/login`, values);
    axiosInstance.defaults.withCredentials = true;
    authStore.authenticated = true;
    console.log('yo');
    router.push('/feed');
  } catch (err) {
    console.log(err);
  }
};
</script>
