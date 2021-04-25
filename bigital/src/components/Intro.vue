<template> 
<div class="wrapper"> 

<img src="../assets/intro_pic.png" id="intro_pic">

<div class="social"> 
<ul> 

<li> <a href="https://github.com/Brehtyn"> 
<img src="../assets/logo_github.png" height="40px" alt="Github">
</a> </li>
<li> <a href="https://www.linkedin.com/in/brehtyn/"> 
<img src="../assets/logo_linkedin.png" height="40px" alt="Linkedin">
</a> </li>
<li> <a href="https://www.instagram.com/brehtyn/"> 
<img src="../assets/logo_instagram.png" height="40px" alt="Instagram">
</a> </li>
<li> <a href="https://www.facebook.com/iBigital/">  
<img src="../assets/logo_facebook.png" height="40px" alt="Facebook">
</a> </li>

</ul>
</div>

<div class="info"> 
<p style="padding-left:50px;"> 
<img height="10px" alt="Bigital Rabbit Logo" src="../assets/logo.png">            
Bigital SP | © 2021 All Rights Reserved 
</p>
</div>

</div>
</template>

<script> 

</script>

<style scoped>

@media screen and (min-width: 1080px ) {

 .wrapper {
    width:40vw;
    height:100%;
    margin-top:60px !important;
    position:fixed;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}

#intro_pic {
    height:80vh;
}

.social {
    width:40vw;
    margin-top:-70px !important;
    padding-top:40px;
    float:left;
    position:fixed;
    z-index:3;
}
li {
    height:50px;
    width:50px;
    float:left;
    padding:10px;

    border: none !important;
}

.info {
    width:40vw;
    position:fixed;
    float:left;
    text-align:left;
    z-index:4;
    padding-top:40px;
}

}

@media screen and (max-width:1079.5px ) and (min-width: 720px ) {

 .wrapper {
    width:100%;
    height:80vh;
    background-color:aqua;
}

}

@media screen and (max-width: 719.5px) { 

 .wrapper {
    width:100%;
    height:50vh;
    background-color:aqua;
}

}

</style>