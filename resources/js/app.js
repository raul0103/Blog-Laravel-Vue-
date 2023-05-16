import axios from 'axios';
import {
    createApp
} from 'vue';

//components
import ExampleComponent from './components/ExampleComponent.vue';

// axios 
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// initialize
const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');
