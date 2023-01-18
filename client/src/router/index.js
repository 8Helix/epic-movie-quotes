/* eslint-disable no-unsafe-finally */
import { createRouter, createWebHistory } from 'vue-router';

import LandingPage from '../views/general/LandingPage.vue';
import RegisterModal from '../views/modals/RegisterModal.vue';
import NewsFeed from '../views/user/NewsFeed.vue';
import EditProfile from '../views/user/EditProfile.vue';
import RegisterEmailSent from '../views/modals/RegisterEmailSent.vue';
import RegisterSuccess from '../views/modals/RegisterSuccess.vue';
import LoginModal from '../views/modals/LoginModal.vue';
import ForgotPassword from '../views/modals/ForgotPassword.vue';
import ResetPassword from '../views/modals/ResetPassword.vue';
import PasswordEmailSent from '../views/modals/PasswordEmailSent.vue';
import EmailSuccess from '../views/modals/EmailSuccess.vue';
import NotFound from '../views/general/NotFound.vue';
import ForbiddenPage from '../views/general/ForbiddenPage.vue';
import isAuthenticated from './guards';
import { useAuthStore } from '@/stores/auth';
import axios from 'axios';

axios.defaults.withCredentials = true;

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      component: LandingPage,
      children: [
        { path: '/register', component: RegisterModal },
        { path: '/email/verify', component: RegisterEmailSent },
        { path: '/email/verify/:id/:hash', component: RegisterSuccess },
        { path: '/login', component: LoginModal },
        { path: '/forgot-password', component: ForgotPassword },
        { path: '/reset-password', component: ResetPassword },
        { path: '/password/recover', component: PasswordEmailSent },
        { path: '/email/changed', component: EmailSuccess },
      ],
    },
    { path: '/news-feed', component: NewsFeed, beforeEnter: isAuthenticated },
    { path: '/profile', component: EditProfile, beforeEnter: isAuthenticated },
    { path: '/403-forbidden', component: ForbiddenPage },
    { path: '/:notFound(.*)', component: NotFound },
  ],
});

// before loading any route we need to determine if user is authenticated or not
// if the application is being loaded for the first time, auth state is set to null,
// we need to check if user is authenticated, based on sending get request to /me
// and then set auth state to true or false based on response,
// we need that state beforehand because we use that state to protect our routes and manipulate ui

router.beforeEach(async (to, from, next) => {
  const store = useAuthStore();

  if (store.authenticated === null) {
    try {
      await axios.get(`${import.meta.env.VITE_BASE_BACKEND_URL}/me`);
      store.authenticated = true;
    } catch (err) {
      store.authenticated = false;
    } finally {
      return next();
    }
  }
  return next();
});

export default router;
