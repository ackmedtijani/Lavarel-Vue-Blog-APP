
<template>
    <h2> {{ $route.params.index }} </h2>
</template>


<script>

    export default{
        name: 'PostCatogeryComponent',
        props : ['title' , 'content' , 'author' , 'category' , 'created'],
        
    }
</script>