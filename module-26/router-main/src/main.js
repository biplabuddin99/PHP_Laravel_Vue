import './assets/main.css'
import router from '@/router/index.js'

import { createApp } from 'vue'
import App from './App.vue'

// createApp(App).mount('#app')

const app = createApp(App)
app.use(router)
app.mount('#app')

