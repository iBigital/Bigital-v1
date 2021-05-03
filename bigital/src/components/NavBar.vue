<template>
    <div class="nav_wrapper">
    <div class="desktop">
      <ul> 
        <li id="nav_logo"> 
          <img 
          float="left" 
          height="50px" 
          alt="Bigital Rabbit Logo" 
          src="../assets/logo.png"
          > 
        </li>
        <li id="nav_item"><a href="/">Home</a></li>
        <li id="nav_item"><a href="/">Services</a></li>
        <li id="nav_item"><a href="/">"Company"</a></li>
        <li id="nav_item"><a href="/">Clients</a></li>
        <li id="nav_item"><a href="/">Contact</a></li>
      </ul>
      <div class="divider"> </div>
    </div>
    <div class="mobile">
      <div>
      <button @click="isShow = !isShow" class="nav_display"> <span class="iconify" data-icon="oi:menu" data-inline="false"></span> </button>
      </div> 
      <ul> 
        <li id="nav_logo"> 
          <img 
          float="left" 
          height="50px" 
          alt="Bigital Rabbit Logo" 
          src="../assets/logo.png"
          > 
          </li>
        <div style="margin-left:-50px !important;" v-show="isShow">
        <li id="nav_item"></li>
        <li id="nav_item" style="margin-top:-10px !important;"><a href="/">Home</a></li>
        <li id="nav_item"><a href="/">Services</a></li>
        <li id="nav_item"><a href="/">"Company"</a></li>
        <li id="nav_item"><a href="/">Clients</a></li>
        <li id="nav_item"><a href="/">Contact</a></li>
        </div>
      </ul>
      <div class="divider"> </div>
    </div>

    </div>
</template>

<script>
export default {
    name: 'NavBar',
    data: function () {
    return {
      isShow: false,
    };
  },
    props: {
    msg: String
    }
}
</script>

<style>
*{
  margin: 0 auto !important; 
}

@media screen and (min-width: 720px) { 

.mobile {
  display:none;
}

ul {
  text-decoration: none;
  list-style-type: none;
}
a {
  color:#2c3e50;
  text-decoration: none;
  transition: 0.5s;
  cursor: pointer;
  -webkit-transition:0.5s;
}
a:hover {
  border: black;
  border-spacing: 4px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6x;
  border-radius: 6px;
  border: 2px solid;
  transition: 0.5s;
  padding: 0 20px;
}

a::before, .box::after {
  width: 100%;
  height:100%;
  z-index: 3;
  content:'';
  position: absolute;
  top:0;
  left:0;
  box-sizing: border-box;
  -webkit-transform: scale(0);
  transform: scale(0);
  transition: 0.5s;
}

a::before {
  border-bottom: 3px solid #FFF;
  border-left: 3px solid #FFF;
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;
}

a::after {
  border-top: 3px solid #FFF;
  border-right: 3px solid #FFF;
  -webkit-transform-origin: 100% 0%;
  transform-origin: 100% 0%;
}

.nav_wrapper {
    position: fixed;
    width:100%;
    height:35px;
    padding-top:25px;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}
#nav_item {
  display: inline;
  padding: 4vw;
  font-size: 16px;
  margin-left:-15px !important;
}
#nav_logo {
  float:left;
  margin-top:-20px !important;
}
.icon_panel {
  float:left;
}
.nav_display {
  display: none;
}
.divider {
  float:left;
  width: 100%;
  height: 1px;
  background-color:black;
  position: bottom;
}

}

@media screen and (max-width: 719.5px) { 

.desktop {
  display:none;
}

ul {
  text-decoration: none;
  list-style-type: none;
}
a {
  color:#2c3e50;
  text-decoration: none;
  transition: 0.5s;
  cursor: pointer;
  -webkit-transition:0.5s;
}
a:hover {
  border: black;
  border-spacing: 4px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6x;
  border-radius: 6px;
  border: 2px solid;
  transition: 0.5s;
  padding: 0 20px;
}

a::before, .box::after {
  width: 100%;
  height:100%;
  z-index: 3;
  content:'';
  position: absolute;
  top:0;
  left:0;
  box-sizing: border-box;
  -webkit-transform: scale(0);
  transform: scale(0);
  transition: 0.5s;
}

a::before {
  border-bottom: 3px solid #FFF;
  border-left: 3px solid #FFF;
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;
}

a::after {
  border-top: 3px solid #FFF;
  border-right: 3px solid #FFF;
  -webkit-transform-origin: 100% 0%;
  transform-origin: 100% 0%;
}
.nav_wrapper {
    position: absolute;
    width:100%;
    height:35px;
    padding-top:30px;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
    position: fixed;
}
#nav_item {
  display:block;
  text-align: center;
  font-size: 16px;
  padding:15px;
  background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}
#nav_logo {
  float:left;
  margin-top:-20px !important;
}
.icon_panel {
  float:left;
}
.nav_display {
  float:right;
  margin-right:40px !important;
  margin-top:-14px !important;
  height:35px;
  width:45px;
}
.divider {
  float:left;
  width: 100%;
  height: 1px;
  background-color:black;
  position: bottom;
}

}

</style>
