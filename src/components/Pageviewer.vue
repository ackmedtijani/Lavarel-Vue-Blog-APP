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
            {
            "title" : "Who is the all might here",
            "content": "Fuck the all might dafkjasdlffkasldf;asdfasdfkafsdf;;asdfkfas;flas",
            "created" : "July, 2019",
            "author": "Dr JT" ,
            'id' : 1
            },

            {
            "title" : "Who is the all might here",
            "content": "Fuck the all might dafkjasdlffkasldf;asdfasdfkafsdf;;asdfkfas;flas",
            "created" : "July, 2019",
            "author": "Dr JT" ,
            'id' : 2
            },

            {
                "title" : "Who is the all might here",
                "content": "Fuck the all might dafkjasdlffkasldf;asdfasdfkafsdf;;asdfkfas;flas",
                "created" : "July, 2019",
                "author": "Dr JT" ,
                'id' : 3,
            },


            {
                "title" : "Who is the all might here",
                "content": "Fuck the all might dafkjasdlffkasldf;asdfasdfkafsdf;;asdfkfas;flas",
                "created" : "July, 2019",
                "author": "Dr JT" ,
                'id' : 4,
            },

            {
                "title" : "Who is the all might here",
                "content": "Fuck the all might dafkjasdlffkasldf;asdfasdfkafsdf;;asdfkfas;flas",
                "created" : "July, 2019",
                "author": "Dr JT",
                'id' : 5 
            }

        ],


        methods: {
            async getPosts(){
                var response = await fetch('data.json');
                console.log(response.json);
            }
        }

        

            }
        }
    }
</script>
