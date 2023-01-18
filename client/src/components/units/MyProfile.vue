<template>
  <div class="col-start-4 col-end-11" :class="{ 'opacity-20': blur }">
    <p class="ml-[30px] text-2xl font-medium text-white">My profile</p>
    <div
      class="mt-[126px] min-h-[535px] w-[998px] rounded-xl bg-black pb-[77px] backdrop-blur-sm">
      <div class="relative -top-[70px] left-[405px]">
        <div
          :style="{
            backgroundImage:
              'url(https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1385&q=80)',
          }"
          class="h-[188px] w-[188px] rounded-full bg-cover bg-center"></div>
        <p class="mt-2 text-xl text-white">Upload new photo</p>
      </div>
      <slot></slot>
    </div>
    <div class="mt-10 flex w-[998px] items-center justify-end gap-[26px]">
      <span class="cursor-pointer font-[20px]">Cancel</span>
      <the-button
        type="submit"
        form="profile"
        name="profile"
        class="bg-blood py-[9px] px-[17px] font-[20px]">
        Save changes
      </the-button>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  blur: Boolean,
});
</script>
