<template>
  <user-frame>
    <my-profile :blur="addEmail">
      <Form id="profile" class="pl-[84px]" @submit="onSubmit">
        <input-field class="-mt-[30px]" label="Username" name="username">
          <div>
            <Field
              type="text"
              name="username"
              class="w-[528px] rounded bg-gray-400 py-[9px] px-[17px] text-light-black outline-none" />
            <span class="ml-[33px] cursor-pointer">Edit</span>
          </div>
        </input-field>
        <div class="mt-[56px] h-[1px] w-[528px] bg-gray-400 opacity-50"></div>
        <input-field class="mt-10" label="Email" name="email">
          <div>
            <Field
              type="email"
              name="email"
              class="w-[528px] rounded bg-gray-400 py-[9px] px-[17px] text-light-black outline-none" />
            <span class="ml-[33px] cursor-pointer">Primary Email</span>
          </div>
        </input-field>
        <input-field class="mt-10" label="Email" name="email">
          <div class="flex items-center gap-[33px]">
            <Field
              type="email"
              name="email"
              class="w-[528px] rounded bg-gray-400 py-[9px] px-[17px] text-light-black outline-none" />
            <div class="flex items-center gap-[21px]">
              <span class="cursor-pointer">Make this primary</span>
              <div class="h-4 w-[1px] bg-gray-400"></div>
              <span class="cursor-pointer">Remove</span>
            </div>
          </div>
        </input-field>
        <the-button
          type="button"
          class="mt-10 flex items-center gap-2 border border-white py-[9px] px-[17px]"
          @click="openEmailModal">
          <plus-icon></plus-icon>
          <span>Add new email</span>
        </the-button>
        <div class="mt-10 h-[1px] w-[528px] bg-gray-400 opacity-50"></div>
        <input-field class="mt-10" label="Password" name="password">
          <div>
            <Field
              type="password"
              name="password"
              class="w-[528px] rounded bg-gray-400 py-[9px] px-[17px] text-light-black outline-none" />
            <span class="ml-[33px] cursor-pointer">Edit</span>
          </div>
        </input-field>
      </Form>
    </my-profile>
    <teleport to="body">
      <add-email v-if="addEmail" @close="closeEmailModal"></add-email>
    </teleport>
  </user-frame>
</template>

<script setup>
import { Form, Field } from 'vee-validate';
import { ref } from 'vue';
import MyProfile from '@/components/units/MyProfile.vue';
import UserFrame from '@/components/units/UserFrame.vue';
import AddEmail from '@/components/units/AddEmail.vue';
import PlusIcon from '@/components/icons/PlusIcon.vue';

const addEmail = ref(false);

function onSubmit(values) {
  console.log(values);
}

function openEmailModal() {
  addEmail.value = true;
}

function closeEmailModal() {
  addEmail.value = false;
}
</script>
