<template>
  <Nav>

      <img src="menu.svg" width="20px" alt="menu">

  </Nav>
</template>

<style scoped> 

  Nav {
    z-index: 100;
    position: fixed;
    top: 1.5rem;
    right: 2.5rem;
    width: auto;
    max-width: 100px;
    height: auto;
    border-color: var(--color-menu-border);
    border-style: solid;
    border-width: .2rem;
    background-color: white;
    border-radius: 10px;
    vertical-align: middle;
    padding: 10px;
    padding-bottom: 2px;
    margin: 0;
    text-align: center;
  }

  Nav:hover {
    border-spacing: 4px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12x;
    border-radius: 12px;
    transition: 0.5s;
    padding: 15px;
    padding-bottom: 7px;
    cursor: pointer;
  }

</style>
