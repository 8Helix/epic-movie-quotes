import { createApp } from 'vue';
import { createPinia } from 'pinia';

import './assets/main.css';
import TheLayout from './components/layout/TheLayout.vue';
import TheButton from './components/layout/TheButton.vue';
import BigButton from './components/layout/BigButton.vue';
import InputField from './components/layout/InputField.vue';
import ModalFrame from './components/layout/ModalFrame.vue';
import BigParagraph from './components/layout/BigParagraph.vue';
import SmallParagraph from './components/layout/SmallParagraph.vue';
import EyeSlash from './components/icons/EyeSlash.vue';

import App from './App.vue';
import router from './router';

const app = createApp(App);

app.use(createPinia());
app.use(router);
app.component('TheLayout', TheLayout);
app.component('TheButton', TheButton);
app.component('BigButton', BigButton);
app.component('InputField', InputField);
app.component('ModalFrame', ModalFrame);
app.component('EyeSlash', EyeSlash);
app.component('BigParagraph', BigParagraph);
app.component('SmallParagraph', SmallParagraph);

app.mount('#app');
