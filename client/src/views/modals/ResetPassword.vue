<template>
  <modal-frame>
    <big-paragraph class="mt-16 text-[32px] sm:mt-0">
      Create new password
    </big-paragraph>
    <small-paragraph class="mt-3">
      Your new password must be different from <br />
      previous used passwords
    </small-paragraph>
    <Form name="reset-password" class="mt-2">
      <input-field label="Password" name="password" star>
        <Field
          name="password"
          :type="type.passwordType"
          :placeholder="passwordPlaceholder"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
        <eye-slash
          class="absolute top-[45px] right-[13px] cursor-pointer"
          @click="togglePasswordType"></eye-slash>
      </input-field>
      <input-field label="Confirm password" name="confirm-password" star>
        <Field
          name="confirm-password"
          :type="type.confirmPasswordType"
          placeholder="Confirm password"
          class="w-[360px] py-[7px] px-[13px] text-base sm:w-[392px]" />
        <eye-slash
          class="absolute top-[45px] right-[13px] cursor-pointer"
          @click="toggleConfirmPasswordType"></eye-slash>
      </input-field>
      <big-button type="submit" class="mt-6 bg-blood">
        Reset password
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
import { reactive, ref, onMounted } from 'vue';
import { Form, Field } from 'vee-validate';
import ArrowVector from '../../components/icons/ArrowVector.vue';

const type = reactive({
  passwordType: 'password',
  confirmPasswordType: 'password',
});

const passwordPlaceholder = ref('');

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

onMounted(() => {
  if (window.innerWidth <= 640) {
    passwordPlaceholder.value = 'Password';
  } else {
    passwordPlaceholder.value = 'At least 8 &amp; max.15 lower case characters';
  }
});
</script>
