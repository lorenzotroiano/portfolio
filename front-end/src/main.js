import { createApp } from 'vue'
import './style.css'
import App from './App.vue'

import { router } from './router.js';

// boostrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';


createApp(App).use(router).mount('#app')