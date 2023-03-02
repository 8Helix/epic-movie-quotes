<template>
  <div class="relative" :class="{ 'h-screen overflow-hidden': overflow }">
    <div
      class="absolute top-0 right-0 z-0 h-screen w-screen bg-primary-dark"></div>
    <div class="bg-primary">
      <div class="relative z-10">
        <header
          class="flex h-[7.93vh] items-center justify-between px-[3.64vw]">
          <span class="text-sm uppercase text-cream md:text-base">
            Movie quotes
          </span>
          <div>
            <the-button
              class="mr-4 border border-white sm:border-none sm:bg-blood"
              @click="openRegister">
              Sign Up
            </the-button>
            <the-button
              class="hidden border border-white sm:inline-block"
              @click="openLogin">
              Log in
            </the-button>
          </div>
        </header>
        <div class="flex h-[66.6vh] flex-col items-center text-center">
          <p
            class="mt-[23.8vh] text-2xl font-bold text-cream md:text-4xl xl:text-6xl">
            Find any quote in <br />
            millions of movie lines
          </p>
          <the-button
            class="mt-8 bg-blood py-[7px] px-[14px] text-base md:mt-6 md:py-[9px] md:px-4 md:text-xl"
            @click="openLogin">
            Get started
          </the-button>
        </div>
      </div>
    </div>

    <div style="z-index: -1" class="section">
      <div class="flex">
        <img src="@/assets/images/image1.png" class="w-full" />
      </div>
    </div>
    <div class="" style="z-index: 200">
      <p class="text-5xl font-bold text-white">
        “You have to leave somethig behind to go forward”
      </p>
    </div>

    <!-- <div class="absolute top-0 ml-[170px]" style="z-index: 200">
      <div class="h-screen"></div>

      <p class="mt-96 text-5xl font-bold text-white" style="z-index: 12">
        “You have to leave somethig behind to go forward”
      </p>
    </div> -->

    <div class="section flex">
      <img src="@/assets/images/image2.png" class="w-full" />
    </div>
    <div class="" style="z-index: 205">
      <p class="text-5xl font-bold text-white">
        “You have to leave somethig behind to go forward”
      </p>
    </div>

    <div class="section flex">
      <img src="@/assets/images/image3.png" class="w-full" />
    </div>

    <teleport to="body ">
      <router-view></router-view>
    </teleport>
  </div>
</template>

<script setup>
import { ref, watch, onMounted } from 'vue';
import { useRouter, useRoute } from 'vue-router';

const router = useRouter();
const route = useRoute();

const overflow = ref(false);

onMounted(() => {
  if (route.path !== '/') {
    overflow.value = true;
  }

  const sections = document.querySelectorAll('.section');
  const paragraph = document.querySelector('.paragraph');

  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    for (let i = 0; i < sections.length; i++) {
      const section = sections[i];
      const sectionTop = section.offsetTop;
      const sectionBottom = sectionTop + section.offsetHeight;

      if (currentScroll > sectionTop && currentScroll < sectionBottom) {
        section.classList.add('sticky');
        const z = i === 0 ? -1 : i;
        section.style.zIndex = `${z}`;
        // paragraph.style.zIndex = `${z}`;
        // paragraph.style.position = 'relative';
      }
    }
  });
});

watch(
  () => route.path,
  () => {
    if (route.path === '/') {
      overflow.value = false;
    }
  }
);

function openRegister() {
  router.push('/register');
  overflow.value = true;
}
function openLogin() {
  router.push('/login');
  overflow.value = true;
}
</script>

<style>
.section {
  position: relative;
  z-index: 50;
}
.sticky {
  position: sticky;
  top: 0;
  left: 0;
}
</style>
