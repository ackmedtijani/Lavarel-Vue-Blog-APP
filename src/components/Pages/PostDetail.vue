<template>


    <div class="bg-no-repeat bg-cover bg-center">
        <p> {{ $route.params.index }} </p>
    </div>


</template>

<script>

    export default {
        
        name: 'PostDetailComponent',
        props : ['title' , 'content' , 'author' , 'category' , 'created'],

        data(){
            return {
                pages : null
            }
        },

        created(){

        }
    }
</script>