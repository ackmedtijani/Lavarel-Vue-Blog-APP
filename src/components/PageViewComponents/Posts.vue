<template>
    <div>
        <img src="../../assets/img/property2.jpeg"/>
        <p> {{ posts.type }} </p>
        <p> {{ posts.Title }}</p>
        <p class="grid grid-cols-3">
             <img class="w-1/6 rounded-full" src="../../assets/img/property2.jpeg"/>
             <span> {{ posts.author }}</span>
             <span> {{ posts.created_at }}</span>
        </p>

        <p> 
            {{ posts.created }}
        </p>
    </div>
</template>
<script>

    export default {
    name: "PostsComponents",
    props: ["posts"],


}

</script>
