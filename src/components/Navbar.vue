<template>
    <nav class="w-full px-3 flex justify-between md:py-5">
        <p> Mini Blog </p>

        <div class="md:hidden">
            <a>
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
        <div class="hidden md:flex space-x-3">
            <router-link :to="`/`">
                Home
            </router-link>
            <router-link :to="`/categories/${link.link}`" v-for="link in navlinks" :key="link.id" > 
                {{ link.link }}
            </router-link>
        </div>

    </nav>
</template>

<script>
    export default{
        name: 'NavbarComponent',

        data(){
            return{
                navlinks : [
                    {id : 1 , link : 'Politics'},
                    {id : 2 , link : 'Travel'},
                    {id : 3 , link : 'Entertainment'},
                    {id : 4 , link : 'Sports'}
                ]
            }
        }
    }
</script>