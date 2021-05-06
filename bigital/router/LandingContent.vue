<template> 

<div class="wrapper">
     
<div class="desktop_spacer"></div>

<div class="content_wrapper">
<div class="notice_banner"> 
    Under Construction! Check 
    <a style='color: grey;' href="www.ibigital.com"> iBigital.com </a> 
    soon for the results! 
</div>

<img 
id="intro_pic" 
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

@media screen and (min-width: 1080px ) {

 .wrapper {
     width:100%;
     margin:0;
     padding:0;
     display: flex;
     flex-direction: row;
 }

.desktop_spacer {
    width:40vw;
    background-color: aqua;
}
.content_wrapper {
}
.notice_banner {    
    width:60vw;
    color:white;
    background-color: black;
    padding: 20px 0 20px 0;
    margin-top:60px !important;
}
#intro_pic {
    width: 650px;
}
 

}

@media screen and (max-width:1079.5px ) and (min-width: 720px ) {

 .wrapper {
    width:100%;
}

.desktop_spacer {
    display:none;
}
.content_wrapper {
}
.notice_banner {    
    width:60vw;
    color:white;
    background-color: black;
    padding: 20px 0 20px 0;
    margin-top:60px !important;
}
#intro_pic {
    width: 650px;
}

}

@media screen and (max-width: 719.5px) { 

 .wrapper {
    width:100%;
}

.desktop_spacer {
    display:none;
}
.content_wrapper {
}
.notice_banner {    
    width:60vw;
    color:white;

    background-color: black;
    padding: 20px 0 20px 0;
    margin-top:60px !important;
}
#intro_pic {
    width: 100%;
}

}

</style>