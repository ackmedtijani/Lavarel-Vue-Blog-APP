<template>


  <Navbar/>

    <RouterView/>

  <Footer>

  </Footer>



</template>

<script>

import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';

export default {
  name: 'App',
  components: {
    Navbar, 
    Footer
  }
}

</script>