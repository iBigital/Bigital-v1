<template>
<div> 
    <a :href="url">
      <img :src="image" :alt="alt" />
    </a>
</div>
</template>

<script>
export default {
    props: {
        image: {
            type: String,
            default: 'icons/cog.svg'
        },
        alt: {
            type: String,
            default: 'Loading Cog'
        },
        url: {
            type: String,
            default: '#'
        }
    }
    
}
</script>

<style scoped>

div {
    width: 120px;
    height: auto;
    padding: 1rem;
}

img {
    width: 100%;
    height: auto;
}


</style>