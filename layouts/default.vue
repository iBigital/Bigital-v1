<template>
  <div>
    <TheHeader />
    
    <TheSidebar />

    <div id="page_wrapper">
      <Nuxt />
    </div>
    
    <TheFooter />
  </div>
</template>

<style scoped>

  #page_wrapper {
    position: fixed;
    top: 0;
    height: 100%;
    overflow-y: scroll;
    background-color: rgb(119, 159, 233);

  }
@media screen and (min-width: 1850px) {
  #page_wrapper {
    left: 600px;
    min-width: calc(100% - 615px);
  }
}
@media screen and (min-width: 1050px) and (max-width: 1850px) {
  #page_wrapper {
    left: 33vw;
  }
}
@media screen and (max-width: 1049px) {
  #page_wrapper {
    position: unset;
    overflow-y: unset;
  }
}

</style>