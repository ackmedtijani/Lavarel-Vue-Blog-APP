<template>


    
        <div id="trending-article-1"  
            class="p-4 rounded-lg pt-40 bg-no-repeat bg-cover bg-center "
            :class="{'lg:row-span-2 lg:order-1' : post.id == 3}">
                <p class="text-white text-xl"> {{post.Title}} </p>
                <p> {{post.created_at }}</p>
        </div>


</template>

<script>

    export default{
        name: 'TrendingComponent',
        props : ['post'],

    }
</script>

<style scoped>
    #trending-article-1 {
        background-image: url('../../assets/img/property2.jpeg');

    }

</style>