<template>
    <section >

        <div class="p-3 lg:px-20 bg-gray-100">

            <h1 class="text-center text-3xl"> Trending </h1>
             <div class="grid md:grid-cols-3 gap-4 py-5">
                <router-link v-for="post in posts" :key="post.id" :to="`/blogs/${post.id}`">
                    <Trending :post="post"/>
                </router-link>
            </div>
                 
        </div>

        <div class="px-3 lg:px-20 my-5">

            <h2 class="m-5 text-4xl"> Recent Posts </h2>

            <div class="grid md:grid-cols-3 gap-4">
                <router-link v-for="post in posts" :key="post.id" :to="`/blogs/${post.id}`">
                    <Posts :posts="post"/>
                </router-link>
            </div>

        </div>
    </section>
</template>

<script>

    import Trending from './PageViewComponents/Trending.vue';
    import Posts from './PageViewComponents/Posts.vue';

    export default{
        name: 'PageviewerComponent',
        components: {
            Trending,
            Posts
        },

        data(){
            return {
                posts: [
                    {id : 1 , Title : 'What is the photo' , Content : 'This is the photo',
                     image : '' , author : 'What is the name' , created_at : 'July, 2019'},

                    {id : 2 , 'Title' : 'What is the photo' , Content : 'This is the photo',
                     image : '' , author : 'Carol Atkinson' , created_at : 'July, 2019'},

                     {id : 3 , 'Title' : 'What is the photo' , Content : 'This is the photo',
                     image : '' , author : 'Tijani Ahmed' , created_at : 'June, 2019'},

                     {id : 4 , 'Title' : 'What is the photo' , Content : 'This is the photo',
                     image : '' , author : 'What is the name' , created_at : 'July, 2019'},

                     {id : 5 , 'Title' : 'What is the photo' , Content : 'This is the photo',
                     image : '' , author : 'What is the name' , created_at : 'July, 2019'},

                ],
            }
        }
}    
</script>