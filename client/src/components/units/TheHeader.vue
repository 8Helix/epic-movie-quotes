<template>
  <header
    class="flex h-[7.93vh] items-center justify-between bg-secondary px-[3.64vw]">
    <p class="col-start-1 uppercase text-cream">movie quotes</p>
    <div class="flex">
      <div class="relative">
        <the-bell></the-bell>
        <div
          class="absolute -top-1 -right-2 flex h-[25px] w-[25px] items-center justify-center rounded-full bg-blood text-white">
          3
        </div>
      </div>
      <div
        class="mr-4 ml-3 flex items-center gap-[10px] py-[7px] pr-[14px] pl-[22px]">
        <span class="text-white">Eng</span> <drop-vector></drop-vector>
      </div>
      <the-button
        class="col-start-12 justify-self-end border border-white"
        @click="logout">
        Log out
      </the-button>
    </div>
  </header>
</template>

<script setup>
import axiosInstance from '@/config/axios';
import { useRouter } from 'vue-router';
import { useAuthStore } from '@/stores/auth';
import DropVector from '../icons/DropVector.vue';
import TheBell from '../icons/TheBell.vue';

const authStore = useAuthStore();

const router = useRouter();

const logout = async () => {
  try {
    await axiosInstance.get('/logout');
    authStore.authenticated = false;
  } catch (err) {
    console.log(err);
  } finally {
    router.push('/');
  }
};
</script>
