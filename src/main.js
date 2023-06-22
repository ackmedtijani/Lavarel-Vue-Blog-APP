import { createApp } from 'vue';
import App from './App.vue'
import '../public/index.css';
import router from './route';

const app = createApp(App);
app.use(router);
app.mount('#app');
