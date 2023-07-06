<template>
    <section class="lg:px-8 p-3 bg-blue-100">
        <h2 class="text-center text-3xl"> Trending </h2>
        <Trending/>
        <h2 class="text-3xl py-10"> Recent Posts </h2>
        <div class="grid gap-4 md:grid-cols-3"> 
            <Posts/>
            <Posts/>
        </div>
    </section>
</template>


<script>

    import Trending from './PageViewComponents/Trending.vue';
    import Posts from './PageViewComponents/Posts.vue';
    import axios from 'axios';


    export default{
        name: 'PageViewer',
        components: {
            Trending,
            Posts
        },

        data(){
            return {
                posts: []
            }
        }, 
        created(){
           this.getPosts()
            
        },

        methods: {
            async getPosts(){
                var response = await axios.get('http://localhost:8000/api/v1/blogs');
                console.log(response.data);
            }
        }

        

    }
</script>

<style>

</style>


