import { createApp } from 'vue';
import HomePage from './pages/Home.vue';

import ContactForm from './components/ContactForm.vue';

const app = createApp({});

app.component('home-page', HomePage);
app.component('contact-form', ContactForm);

app.mount('#app');
