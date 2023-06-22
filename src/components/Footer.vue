<template>
   <section class="px-5 bg-slate-700">
        <div class="px-3 py-20 lg:px-20 text-slate-400 grid md:grid-cols-3 gap-4">
            <div>
                <h1 class="text-white mb-5"> About us </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
            </div>

            <div class="grid md:grid-cols-2">
                <router-link :to="`/categories/${links.link}`" v-for="links in footerlinks" :key="links.id" >
                    {{ links.links }}

                </router-link>
            </div>
            <div>
                <p> Connect With Us </p>
                <p> 
                    <a href="">
                    </a>
                    
                    <a href=""></a>
                    
                    <a href=""></a>
                    
                    <a href=""></a>
                    
                    <a href=""></a>
                </p>
            </div>
        
        </div>
   </section>
</template>

<script>
    export default{
        name: 'FooterComponent',
        data(){
            return {
                footerlinks:[
                {id : 1 , link : 'Politics'},
                    {id : 2 , link : 'Travel'},
                    {id : 3 , link : 'Entertainment'},
                    {id : 4 , link : 'Sports'}
                ]
            } 
        }
    }
</script>