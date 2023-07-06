<template>

    
<div class="px-5 py-5 bg-slate-200">
    <form class="space-y-5">

        <div>
            <label> Post Title </label>
            <input v-model="title" class="border-" type="text" name="author">  
        </div>

        <div>
            <label> Post Content</label>
            <textarea v-model = "content" class="w-full" type = "text" name="author">

            </textarea>


        </div>

        <div>
            <label> Author </label>
            <input v-model="author" type = "text" name="author" >

        </div> 
            <label> Post Avatar </label>
            <input @change="handleFileUpload( $event )" type = "file" name="filename">
        <div>

        </div>

        <button @click.prevent = "createPost()" class="p-3 hover:bg-blue-300 bg-blue-500 text-white">
            Create Post
        </button>
    </form>
</div>
</template>


<script>

    import axios from 'axios'

    export default{
        name : 'CreatePostComponent',
        props : ['user'],

        data(){
            return {
                title : '',
                content : '',
                author : '',
                image : ''
            }
        },

        methods:{
            handleFileUpload(e){
                this.image = e.target.files[0]
            },

            createPost(){
                axios.post('http://127.0.0.1:8000/api/blogs/',

                JSON.stringify({
                        'Title' : this.title,
                        'Content' : this.content,
                        'author' : this.author,
                        'image' : this.image
                }),
                   { headers:{
                        'Accept' : 'application/json',
                        },

                   }
                ).then( function( response ){
                    if( response.status != 200 ){
                        console.log(response.Content)
                        throw response.status;
                    }else{
                        console.log('JSON Response' , response.json())
                        return response.json();

                    }
            })
                
        }

    }

}
</script>