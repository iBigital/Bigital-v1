<template>
  <div id="app">

    <NavBar/>

    <Intro /> 

    <LandingContent />

  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'
import Intro from './components/Intro.vue'
import LandingContent from './components/LandingContent.vue'

export default {
  name: 'App',
  components: {
    NavBar,
    Intro,
    LandingContent
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