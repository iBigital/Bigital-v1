<template>
  <div id="app">

    <TheNavbar />

    <TheIntro /> 

    <LandingContent />

  </div>
</template>

<script>
import TheNavbar from './components/TheNavbar.vue'
import TheIntro from './components/TheIntro.vue'
import LandingContent from './components/LandingContent.vue'

export default {
  name: 'App',
  components: {
    TheNavbar,
    TheIntro,
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