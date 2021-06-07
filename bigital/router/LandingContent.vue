<template> 

<div class="wrapper">
     
<div class="desktop_spacer"></div>

<div class="content_wrapper">
<div class="notice_banner">
    Under Construction! <wbr> Check 
    <a style='color: grey;' href="www.ibigital.com"> iBigital.com </a> 
    soon for the results! 
</div>

<img 
id="full_pic" 
alt="Bigital's Logo: a rabbit with a cute pair of goggles and circruitry running throughout." 
src="@/assets/header1.png"
>

<h1> Make technology simple. </h1>

<p> Simple static websites & dynamic webapps, embedded programs, all the way to preventative IT maintence! </p>

<p> Bigital will find your custom solution! </p>

<img 
id="full_pic" 
alt="Bigital's Logo: a rabbit with a cute pair of goggles and circruitry running throughout." 
src="@/assets/logo.png"
>

<p> Created by Brentyn Hanna </p>

</div>
</div>
</template>

<script> 

</script>

<style scoped>

*{
    font-size:20px;
}

h1 {
    text-align: center;
    font-size: 2.4em;
    padding:70px;
}

p{
    padding:50px;
    padding-top:0px;
}

#full_pic {
    width: 100%;
    background: linear-gradient(235deg,#56ff45, #7f5fff, #211552, #e80a08);
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
    margin-top:60px !important;
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
    margin-top:60px !important;
}
#full_pic {
    width: 100%;
}

}

</style>