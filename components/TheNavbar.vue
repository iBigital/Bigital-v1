<template>
  <Nav>
    <div class="navbar">
      <NuxtLink to="/">
        <img height="40px" alt="Bigital Rabbit Logo" src="assets/logo.png" />
      </NuxtLink>
      <span> </span>
      <NuxtLink to="/services"> Services </NuxtLink>
      <NuxtLink to="/portfolio"> Portfolio </NuxtLink>
      <NuxtLink to="/about"> About </NuxtLink>
      <NuxtLink to="/contact"> Contact </NuxtLink>
      <span> </span>
      <NuxtLink to="/">
        <img
          height="35px"
          alt="Bigital Rabbit Logo"
          src="../assets/common/cog.svg"
        />
      </NuxtLink>
    </div>
    <img v-on="isActive" id="mobile_display" src="assets/menu.svg" width="20px" alt="menu" />
  </Nav>
</template>

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
  #mobile_display {
    display: none;
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
}

@media screen and (max-width: 1049px) {
  Nav {
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
  .navbar {
    display: none;
  }
  #mobile_display {
    display: block;
  }
}
</style>
