import store from './store'
import {
    createApp
} from 'vue';
//components
import ArticleMain from './components/article/ArticleMain.vue';

// initialize
const app = createApp({});
app.use(store)

app.component('article-main', ArticleMain);

app.mount('#app');
