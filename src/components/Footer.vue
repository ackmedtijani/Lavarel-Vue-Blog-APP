<template>

    
    <section class="px-4 lg:px-10 grid gap-4 md:grid-cols-3 py-20 text-slate-500 bg-slate-800">
        <div class="space-y-5">
            <p class="text-white text-xl">  About Us </p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Placeat reprehenderit magnam deleniti quasi saepe, consequatur 
                atque sequi delectus dolore veritatis obcaecati quae, repellat
                 eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
        </div>
        <div class="grid grid-cols-2">
           <a v-for="links in footerlinks" :key="links.id" href=""> 
            {{ links.name }}
         </a>
        </div>

        <div class="space-y-3">
            <p class="text-white text-lg"> Connect With Us </p>
            <p class="space-x-3">
                <a v-for="i in icons" :key="i.id" href=""> 
                    <i :class="i.icon"></i> 
                 </a>
            
        </p>
        </div>
    </section>
</template>

<script>

    export default{
        name: 'FooterComponent',
        data(){
            return{
                icons: [
                {'id' : 1,'icon': 'fa-brands fa-facebook'} ,
                {'id' : 2, 'icon': "fa-brands fa-instagram"},
                {'id' : 3,'icon' : 'fa-brands fa-twitter'},
                {'id' : 4, 'icon' : 'fa-brands fa-linkedin'},
                {'id' : 5, 'icon' : 'fa-regular fa-envelope'} 
            ],
                footerlinks:
                [
                    {'id': 1 , 'name' : 'About'},
                    {'id' : 2 , 'name' : 'Advertise'},
                    {'id' : 3 , 'name' : 'Careers'},
                    {'id' : 4 , 'name' : 'Subscribers'},
                    {'id' : 5 , 'name' : 'Travel'},
                    {'id' : 6 , 'name' : 'Lifestyle'},
                    {'id' : 7 , 'name' : 'Sports'},
                    {'id' : 8 , 'name' : 'Nature'}
                ]
            }
        }
    }

</script>

<style>
</style>
>>>>>>> e8affea (first frontend commit)
