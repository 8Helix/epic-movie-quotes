<template>
  <div
    :class="{
      popUpBack: popUp,
    }"
    class="absolute top-0 z-40 flex h-screen w-screen justify-center overflow-hidden bg-blurred backdrop-blur-[3px]"
    @click.self="close">
    <div
      :class="{
        'sm:min-h-96 mt-0 w-full self-stretch bg-primary sm:w-[601px] sm:self-start sm:bg-dark-blue':
          !popUp,
        'min-h-96 mt-20 w-[360px] self-start bg-dark-blue px-3 sm:w-[538px]':
          popUp,
      }"
      class="flex flex-col items-center rounded-[10px] pt-[53px] sm:mt-[13.79vh] sm:py-[53px]">
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router';
const router = useRouter();
const props = defineProps({
  popUp: Boolean,
});

function close() {
  router.push('/');
}
</script>

<style>
@media screen and (max-width: 660px) {
  .popUpBack {
    background: linear-gradient(
      187.16deg,
      #181623 0.07%,
      #191725 51.65%,
      #0d0b14 98.75%
    );
  }
}
</style>
