<template>
        <div id="trending-article-1" 
            v-for="post in posts" :key="post.title" 
         class="p-4 rounded-lg pt-40 lg:order-0 bg-no-repeat bg-cover bg-center">
            <p class="text-white text-xl"> {{post.title}} </p>
            <p> {{post.date }}</p>
        </div>
    
</template>

<script>
    export default{
        name: 'TrendingPageViewComponent',
        props : ['posts'],

    }
</script>

<style scoped>
    #trending-article-1 {

        background-image: url('../../assets/img/property2.jpeg');
        
    
    }

</style>