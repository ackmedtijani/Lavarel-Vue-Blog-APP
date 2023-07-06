<template>
    <nav class="sticky top-0 bg-white flex justify-between p-2 
    lg:py-4">
        <h2> <router-link to="/"> Mini Blog</router-link>  </h2>
        <p class="lg:hidden" > <i class="fa-solid fa-bars"></i> </p>
        <div class="hidden lg:flex space-x-5">

            <router-link :to="`/categories/${links.links}`" v-for="links in navlinks" 
                     :key="links.id">
                {{ links.links }}
            </router-link>
            <a href=""> <i class="fas fa-search"></i> </a>
            <span v-show="isauthenticated" class="space-x-3">
                <router-link :to = "`/${links.links}`" v-for="links in authlinks" :key="links.id">
                    {{ links.links }}
                </router-link>
            </span>
        </div>
    </nav>

</template>


<script>
    export default{
        name:'NavbarCompoent',

        computed:{
            isauthenticated(){

                if (this.user != null) {
                    console.log('User is authenticated')
                    return false
                }
                console.log('User is not authenticated')
                return true
                
            }
        },

        data(){
            return{
                navlinks:[
                    {id : '1', links : 'Politics'} ,
                    {id : '2', links : 'Entertainment'},
                    {id : '3' , links : 'Travel'},
                ],

                user : null,

                authlinks : [ {id : '1' , links : 'Register'},
                    {id : '6' , links : 'Login'}
            ]

            }
        }
    }
</script>

