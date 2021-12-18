<template>
  <Nav>
    <div class="navbar">
      <NuxtLink to="/">
        <img height="40px" alt="Bigital Rabbit Logo" src="assets/logo.png" />
      </NuxtLink>
      <span> </span>
      <NuxtLink to="/"> Home </NuxtLink>
      <NuxtLink to="/services"> Services </NuxtLink>
      <NuxtLink to="/portfolio"> Portfolio </NuxtLink>
      <NuxtLink to="/about"> About </NuxtLink>
      <NuxtLink to="/contact"> Contact </NuxtLink>
      <span> </span>
      <NuxtLink to="/" v-show="FORFUTUREUSE">
        <img
          height="35px"
          alt="Bigital Rabbit Logo"
          src="../assets/common/cog.svg"
        />
      </NuxtLink>
    </div>

    <button @click="toggleNav">
      <img id="mobile_display" src="assets/menu.svg" alt="menu" width="20px" />
    </button>

    <div v-if="mobileNav" class="mobile_background">
      <div @click="toggleNav" class="mobile_menu">
        <NuxtLink to="/"> Home </NuxtLink>
        <NuxtLink to="/services"> Services </NuxtLink>
        <NuxtLink to="/portfolio"> Portfolio </NuxtLink>
        <NuxtLink to="/about"> About </NuxtLink>
        <NuxtLink to="/contact"> Contact </NuxtLink>
      </div>
    </div>
  </Nav>
</template>

<script>
export default {
  data() {
    return {
      mobileNav: false,
    };
  },
  methods: {
    toggleNav() {
      if (this.mobileNav) {
        this.mobileNav = false;
      } else {
        this.mobileNav = true;
      }
    },
  },
};
</script>

<style scoped>
Nav {
  vertical-align: middle;
  padding: 10px;
  margin: 0;
  text-align: center;
  font-family: var(--ff-accent);
  font-size: 1rem;
  font-stretch: narrower;
}

@media screen and (min-width: 1050px) {
  Nav {
    margin: 1rem;
  }
  .navbar {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
  }
  .navbar > a {
    text-decoration: none;
  }
  .navbar > *:hover {
    border-spacing: 4px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12x;
    border-radius: 12px;
    border: solid;
    border-color: var(--color-primary);
    transition: 0.5s;
    padding: 10px;
    cursor: pointer;
  }
  #mobile_display,
  .mobile_menu,
  button {
    display: none;
  }
}

@media screen and (max-width: 1049px) {
  .navbar {
    display: none;
  }
  button {
    background-color: unset;
    border: unset;
    padding: 0.6rem;
    margin: unset;
    cursor: pointer;
    z-index: 100;
    position: fixed;
    top: 1.5rem;
    right: 1.5rem;
    width: auto;
    max-width: 100px;
    height: auto;
    border-color: var(--color-special);
    border-style: solid;
    border-width: 0.2rem;
    background-color: white;
    border-radius: 10px;
  }
  #mobile_display {
    display: block;
  }
  .mobile_background {
    z-index: 25;
    position: fixed;
    top: 0;
    left: 0;
    width: 200vh;
    height: 100vh;
    margin: 0 auto;
    background: rgba(0, 0, 0, 0.8);
  }
  .mobile_menu {
    z-index: 30;
    position: fixed;
    left: calc(50% - 150px);
    width: 300px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 100px;
    padding: 1rem;
    background-color: #f5f5f5;
    color: #000;
    border-radius: 15px;
  }
  .mobile_menu > a {
    text-decoration: none;
    color: #000;
    padding: 1rem;
  }
}
</style>
