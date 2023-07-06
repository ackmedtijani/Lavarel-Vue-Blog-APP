<template>

<section>

    <div class="p-5 bg-slate-100">
        <div class="text-center">
            <p class="text-3xl"> Logo<span> Bang </span> </p>
        </div>
        <div>
            <p class="text-2xl font-bold my-3"> Sign In </p>
            <form action="">
                <div class="flex px-2 py-2 
                my-2 mb-5 space-x-4 bg-white
                rounded border focus-within:border-green-800">
                    <div>
                        <i class="pl-1 fa-solid fa-user"></i>
                    </div>
                    <input v-model="email" class="w-full focus:outline-none" type="text" 
                    placeholder="Email Address">
                </div>

                <div class="flex px-2 py-2 bg-white space-x-4
                bg-white border rounded focus-within:border-green-800">
                    <div>
                        <i class="pl-1 fa-solid fa-user"></i>
                    </div>
                        <input v-model="password" class ="w-full focus:outline-none" type="text"
                        placeholder = "Password">
                    <div class="">
                        <i class="fa-solid fa-user "></i>
                    </div>
                </div>

                <div id="remember-me" class="flex justify-between
                my-3">
                    <p class="space-x-2">
                        <input type="checkbox">
                        <label for=""> Remember Me</label>
                    </p>

                    <a class="" href="#">
                        Forgot Password? 
                    </a>

                </div>

                <button @click.prevent = "login()" class="w-full py-2 bg-blue-300
                rounded border">
                    Login In
                </button>
            </form>

            <div class= "my-3 " id="footer">
                <p class="text-center"> Terms of Service <span class="
                    text-slate-400">
                    and
                </span>
                Privacy Policy    
                </p>
            </div>
        </div>
    </div>
    </section>
</template>


<script>

import { mapMutations } from "vuex";
import axios from 'axios';
import store from '../../store'

    export default{
        name : 'LoginComponent',
        
        data(){

            return {
                email : '',
                password : ''
            }
        },

        computed: {
            ...mapMutations(["setUser", "setToken"]),
        },
        methods: {
            ...mapMutations(["setUser", "setToken"]),

             login(){
                    console.log(this.email , this.password)
                    axios.post('http://127.0.0.1:8000/api/login/',

                    {
                            'email' : this.email,
                            'password' : this.password,
                    },
                    { headers:{
                            'Accept' : 'application/json',
                            },

                    }
                    ).then( function( response ){
                        if( response.status != 201 ){
                            throw response.status;
                        }else{
                            console.log('JSON Response' , response.data)
                            console.log(response.data['user'] , response.data['token'])
                            return response.data;

                        }
                })
                    
            }
        }


    }
    
</script>