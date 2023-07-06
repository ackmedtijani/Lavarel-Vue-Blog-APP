import { createRouter , createWebHashHistory } from "vue-router";
import PostDetail from './components/Pages/PostDetail.vue'
import PostCatogery from './components/Pages/PostCatogery.vue'
import PageViewer from './components/Pageviewer.vue'
import Login from './components/Auth/Login.vue';
import Register from './components/Auth/Register.vue';
import CreatePost from './components/Pages/CreatePost.vue'

const router = createRouter({
    history : createWebHashHistory(),
    routes: [

        {
            path : '/' , component : PageViewer
        },
        {
            
            path :'/blogs/:index' , name:'PostDetail' , component : PostDetail 
        },
    
        {
            path: '/categories/:index' , name:'PostCatogery' , component: PostCatogery
        },
        {
            path: '/login' , component : Login
        },
        {
            path: '/register' , component : Register
        },
        {
            path: '/create-post' , component : CreatePost
        }
    ]
}) 


export default router;