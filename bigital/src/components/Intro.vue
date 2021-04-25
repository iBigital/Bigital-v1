<template> 

<div class="wrapper"> 

<img src="../assets/intro_pic.png" id="intro_pic">

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
    background-image: radial-gradient(circle, #6bc9c6 0%, #b8baba 100%);
}

#intro_pic {
    height:80vh;
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