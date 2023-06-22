import { createRouter , createWebHashHistory } from "vue-router";
import PostCatogery from './components/Pages/PostCatogery.vue';
import PageViewer from './components/Pageviewer.vue'
import PostDetail from './components/Pages/PostDetail.vue';

const router = createRouter({
    history : createWebHashHistory(),
    routes: [
        {path : '/' , component : PageViewer },

        {path : '/categories/:index' ,component: PostCatogery},

        {path : '/blogs/:index' , component: PostDetail }
    ]
});

export default router;