<template>
  <div id="app">

    <NavBar/>

  <img width="100%" alt="Bigital's Logo: a rabbit with a cute pair of goggles and circruitry running throughout." src="./assets/logo.png">

    <HelloWorld msg="Brentyn Kicks Ass"/>

     <HelloWorld msg="Testing Stuff"/>

  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    NavBar,
    HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>