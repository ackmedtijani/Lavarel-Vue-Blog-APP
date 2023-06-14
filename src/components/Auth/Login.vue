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
                    <input class="w-full focus:outline-none" type="text" 
                    placeholder="Email Address">
                </div>

                <div class="flex px-2 py-2 bg-white space-x-4
                bg-white border rounded focus-within:border-green-800">
                    <div>
                        <i class="pl-1 fa-solid fa-user"></i>
                    </div>
                        <input class ="w-full focus:outline-none" type="text"
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

                <button class="w-full py-2 bg-blue-300
                rounded border">
                    Login In
                </button>
                </div>
            </form>

            <div class= "my-3 "id="footer">
                <p class="text-center"> Terms of Service <span class="
                    text-slate-400">
                    and
                </span>
                Privacy Policy    
                </p>
            </div>
        </div>

    </section>
</template>


<script>


    export default{
        name : 'LoginComponent',

        methods(){
    }
    

</script>