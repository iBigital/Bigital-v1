<template> 

<div class="wrapper">
     
<div class="desktop_spacer"></div>

<div class="content_wrapper">
<div class="notice_banner">
    Email <a href = "mailto:brentyn@ibigital.com?subject=New Website&body=Im interested in discussing a website!"> Brentyn@iBigital.com </a> to discuss your new website!
</div>

<img 
id="full_pic" 
alt="'Your Data, Your Designer, Your Developer, Your Next FullStack Expert' overlaid rabbits in a field, one flying a rocketship in the background" 
src="@/assets/header1.png"
>

<h1> Make technology simple. </h1>

<div class="homepage_intro"> 

<p> Landing websites & dynamic webapps, embedded programs, all the way to preventative IT maintenance! </p>

<p> Bigital will find your custom solution! </p>

<h2> Nice to meet you! </h2>

<p> My name is Brentyn Hanna, and this is my businesses website! 
<br/> <br/>
I hope there's enough here to catch your attention, but worry not more content is coming soon!
Please check back later, however if you'd like to see more now visit any social media located below my picture or just email me directly at
<br/> <br/>
<a href = "mailto:brentyn@ibigital.com?subject=New Website&body=Im interested in discussing a website!"> Brentyn@iBigital.com. </a>
</p>

</div>

<img 
id="full_pic" 
alt="Bigital's Logo: a rabbit with a cute pair of goggles and circruitry running throughout." 
src="@/assets/logo.png"
>

<br/><br/><br/>

<p> Created by Brentyn Hanna </p>

</div>
</div>
</template>

<script> 

</script>

<style scoped>

a { 
    color: rgb(156, 168, 172);
}

*{
    font-size:20px;
}

h1 {
    text-align: center;
    font-size: 2.4em;
    padding:70px;
}


h2 {
    text-align: center;
    font-size: 2.0em;
    padding:30px;
}

p{
    padding:50px;
    padding-top:0px;
}

#full_pic {
    width: 100%;
    background: linear-gradient(235deg,#d0ff00, #5f97ff, #211552, #e80a08);
    background-size: 200% 200%;
    -webkit-animation: BackgroundColorScrollAnimation 30s ease infinite;
    -moz-animation: BackgroundColorScrollAnimation 30s ease infinite;
    animation: BackgroundColorScrollAnimation 30s ease infinite;
}

@-webkit-keyframes BackgroundColorScrollAnimation {
    0%{background-position:0% 59%}
    50%{background-position:100% 42%}
    100%{background-position:0% 59%}
}
@-moz-keyframes BackgroundColorScrollAnimation {
    0%{background-position:0% 59%}
    50%{background-position:100% 42%}
    100%{background-position:0% 59%}
}
@keyframes BackgroundColorScrollAnimation {
    0%{background-position:0% 59%}
    50%{background-position:100% 42%}
    100%{background-position:0% 59%}
}

.homepage_intro {
    padding:0 15%;
}



@media screen and (min-width: 1080px ) {

 .wrapper {
     width:100%;
     margin:0;
     padding:0;
     display: flex;
     flex-direction: row;
 }

.desktop_spacer {
    width:35vw;
    background-color: aqua;
}
.content_wrapper {
    width:65vw;
}

.notice_banner {    
    width:65vw;
    color:white;
    background-color: black;
    padding: 20px 0;
    margin-top:60px !important;
}

}

@media screen and (max-width:1079.5px ) and (min-width: 720px ) {

 .wrapper {
    width:100%;
}

.desktop_spacer {
    display:none;
}

.notice_banner {    
    width:100%;
    color:white;
    background-color: black;
    padding: 20px 0 20px 0;
}
#full_pic {
    width: 100%;
}

}

@media screen and (max-width: 719.5px) { 

 .wrapper {
    width:100%;
}

.desktop_spacer {
    display:none;
}

.notice_banner {    
    width:100%;
    color:white;
    background-color: black;
    padding: 20px 0 20px 0;
}
#full_pic {
    width: 100%;
}

}

</style>