<template>
  <modal-frame>
    <big-paragraph>Create an account</big-paragraph>
    <small-paragraph class="mt-3">Start your journey!</small-paragraph>
    <Form name="register" class="mt-2" @submit="onSubmit">
      <input-field label="Name" name="username" star>
        <Field
          name="username"
          type="text"
          :placeholder="placeholder.namePlaceholder"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
      </input-field>
      <input-field label="Email" name="email" star>
        <Field
          name="email"
          type="email"
          placeholder="Enter your email"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
      </input-field>
      <input-field label="Password" name="password" star>
        <Field
          name="password"
          :type="type.passwordType"
          :placeholder="placeholder.passwordPlaceholder"
          class="w-[360px] py-[7px] pl-[13px] pr-[40px] text-base sm:w-[392px]" />
        <eye-slash
          class="absolute top-[45px] right-[13px] cursor-pointer"
          @click="togglePasswordType"></eye-slash>
      </input-field>
      <input-field label="Confirm password" name="password_confirmation" star>
        <Field
          name="password_confirmation"
          :type="type.confirmPasswordType"
          :placeholder="placeholder.confirmPasswordPlaceholder"
          class="w-[360px] py-[7px] pl-[13px] pr-[40px] text-base sm:w-[392px]" />
        <eye-slash
          class="absolute top-[45px] right-[13px] cursor-pointer"
          @click="toggleConfirmPasswordType"></eye-slash>
      </input-field>
      <big-button type="submit" class="mt-6 bg-blood"> Get started </big-button>
    </Form>
    <big-button class="mt-4 border border-white">
      <google-logo class="inline"></google-logo>
      Sign up with Google
    </big-button>
    <small-paragraph class="mt-8">
      Already have an account?
      <router-link to="/login" class="text-light-blue underline">
        Log in
      </router-link>
    </small-paragraph>
  </modal-frame>
</template>

<script setup>
import { reactive, onMounted } from 'vue';
import { useRouter } from 'vue-router';
import axiosInstance from '@/config/axios';
import { Form, Field } from 'vee-validate';
import GoogleLogo from '../../components/icons/GoogleLogo.vue';

const router = useRouter();

const type = reactive({
  passwordType: 'password',
  confirmPasswordType: 'password',
});

const placeholder = reactive({
  namePlaceholder: '',
  passwordPlaceholder: '',
  confirmPasswordPlaceholder: '',
});

function togglePasswordType() {
  if (type.passwordType === 'password') {
    type.passwordType = 'text';
  } else {
    type.passwordType = 'password';
  }
}

function toggleConfirmPasswordType() {
  if (type.confirmPasswordType === 'password') {
    type.confirmPasswordType = 'text';
  } else {
    type.confirmPasswordType = 'password';
  }
}

const onSubmit = async (values) => {
  try {
    const response = await axiosInstance.post(`/register`, values);
    router.push('/email/verify');
  } catch (err) {
    console.log(err);
  }
};

onMounted(() => {
  if (window.innerWidth <= 640) {
    placeholder.namePlaceholder = 'Enter your name';
    placeholder.passwordPlaceholder = 'Password';
    placeholder.confirmPasswordPlaceholder = 'Password';
  } else {
    placeholder.namePlaceholder = 'At least 3 & max.15 lower case characters';
    placeholder.passwordPlaceholder =
      'At least 8 & max.15 lower case characters';
    placeholder.confirmPasswordPlaceholder = 'Confirm password';
  }
});
</script>
