<template>
  <div class="wrapper">
    <img src="../assets/common/intro_pic_small.png" id="intro_pic_mobile" />

    <div id="intro_pic_desktop" class="flex-center">
      <img src="../assets/common/intro_pic.png" />
    </div>

    <div class="social flex-center">
      <a href="https://github.com/Brehtyn">
        <img
          src="../assets/common/logo_github.png"
          height="40px"
          alt="Github"
        />
      </a>
      <a href="https://www.linkedin.com/in/brehtyn/">
        <img
          src="../assets/common/logo_linkedin.png"
          height="40px"
          alt="Linkedin"
        />
      </a>
      <a href="https://www.instagram.com/brehtyn/">
        <img
          src="../assets/common/logo_instagram.png"
          height="40px"
          alt="Instagram"
        />
      </a>
      <a href="https://www.facebook.com/iBigital/">
        <img
          src="../assets/common/logo_facebook.png"
          height="40px"
          alt="Facebook"
        />
      </a>
    </div>

    <div class="info flex-center">
      <p>
        Bigital
        <img
          height="12px"
          alt="Bigital Rabbit Logo"
          src="../assets/common/simple_logo.png"/> | © 2021 All Rights Reserved
      </p>
    </div>
  </div>
</template>

<style scoped>

.wrapper {
  background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}
.social {
  flex-direction: row;
}

@media screen and (min-width: 1050px) {
  .wrapper {
    z-index: 50;
    position: fixed;
    float: left;
    width: 33vw;
    max-width: 600px;
    height: calc(100vh + 21px);
    margin-top:-21px;
    background-color: #fff;
    border-right: 1px solid #e5e5e5;
  }
  #intro_pic_desktop {
    padding-top: 25px;
    height: 85vh;
  }
  #intro_pic_desktop > img {
    height: auto;
    max-height: 85vh;
    max-width: calc(100% - 1rem);
    padding-left: 1rem;
  }
  #intro_pic_mobile {
    display: none;
  }
  a:hover {
    border: black;
    border-spacing: 4px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12x;
    border-radius: 12px;
    border: 2px solid;
    transition: 0.5s;
    padding: 4px;
    padding-top: 6px;
  }
  .social {
    margin: -35px 0 35px 0;
  }
  .info {
    padding-left: 1rem;
    margin-top: -25px;
  }
}

@media screen and (max-width: 1049px) {
  .wrapper {
    height: fit-content;
    padding-bottom: 20px;
  }
  #intro_pic_desktop {
    display: none;
  }
  #intro_pic_mobile {
    width: 100%;
    height: auto;
    background-size: auto;
  }
  .social {
    padding-top: 20px;
  }
  .info {
    display: none;
  }
}
</style>