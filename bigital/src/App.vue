<template>
  <div id="app">

    <NavBar/>

    <Intro /> 

    <LandingContent />

    <img width="100%" alt="Bigital's Logo: a rabbit with a cute pair of goggles and circruitry running throughout." src="./assets/logo.png">

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