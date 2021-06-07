<template> 
<div class="wrapper"> 

<img src="../assets/intro_pic.png" id="intro_pic_desktop">
<img src="../assets/intro_pic_small.png" id="intro_pic_mobile">

<div class="social"> 
<ul> 

<a href="https://github.com/Brehtyn"> <li> 
<img src="../assets/logo_github.png" height="40px" alt="Github">
</li> </a>
<a href="https://www.linkedin.com/in/brehtyn/"> <li> 
<img src="../assets/logo_linkedin.png" height="40px" alt="Linkedin">
</li> </a>
<a href="https://www.instagram.com/brehtyn/"> <li> 
<img src="../assets/logo_instagram.png" height="40px" alt="Instagram">
</li> </a> 
<a href="https://www.facebook.com/iBigital/"> <li> 
<img src="../assets/logo_facebook.png" height="40px" alt="Facebook">
</li> </a>

</ul>
</div>

<div class="info"> 
<p style="padding-left:50px;"> 

Bigital 
<img 
height="12px" 
alt="Bigital Rabbit Logo" 
src="../assets/simple_logo.png">     
| © 2021 All Rights Reserved 

</p>
</div>

</div>
</template>

<script> 

</script>

<style scoped>

@media screen and (min-width: 1080px ) {

 .wrapper {
    width:35vw;
    height:100vh;
    margin-top:60px !important;
    position:fixed;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}

#intro_pic_desktop {
    height:80vh;
    min-height:350px;
    max-height:900px;
}
#intro_pic_mobile {
    display:none;
}

.social {
    margin-top:-70px !important;
    float:left;
    position:fixed;
    z-index:3;
}
li {
    height:50px;
    width:50px;
    float:left;
    padding:10px;
}

li:hover {
    border: black;
    border-spacing: 4px;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12x;
    border-radius: 12px;
    border: 2px solid;
    transition: 0.5s;
    padding: 4px;  
    padding-top:10px;
}

.info {
    position:fixed;
    z-index:4;
}

}

@media screen and (max-width:1079.5px ) and (min-width: 720px ) {

.wrapper {
    width:100%;
    height:100vh;
    min-height:400px;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}

#intro_pic_desktop {
    display:none;
}
#intro_pic_mobile {
    height:100vh;
    min-height:350px;
    max-height:400px;
    background-size: auto;
}

ul {
    display:flex;
    margin-left:-40px !important;
}
li {
    padding:7px;
    flex-direction: column;
}

.info {
display:none;
}

}

@media screen and (max-width: 719.5px) { 

.wrapper {
    height:80vh;
    min-height:300px;
    background-image: radial-gradient(circle, #f5f5f5 0%, #f2f3f4 20%);
}

#intro_pic_desktop {
    display:none;
}
#intro_pic_mobile {
    height:100vw;
    min-height:250px;
    max-height:280px;
    background-size: auto;
    margin-top:50px !important;
}

ul {
    display:flex;
    margin-left:-40px !important;
}
li {
    padding:7px;
    flex-direction:column;
}

.info {
display:none;
}

}

</style>