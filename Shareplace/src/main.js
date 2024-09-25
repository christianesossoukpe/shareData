import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
import axios from 'axios';
import App from './App.vue'
import router from './router'
import PrimeVue from 'primevue/config';
import 'primeicons/primeicons.css';   // PrimeIcons for icons

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.use(axios);
// Utiliser PrimeVue dans l'application
app.use(PrimeVue);
app.mount('#app')
