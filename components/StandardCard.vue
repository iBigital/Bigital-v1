<template>
<div> 
    <img :src="image" :alt="alt" />
    <h3>{{title}}</h3>
    <p>{{description}}</p>
</div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'Standard Card'
        },
        description: {
            type: String,
            default: 'This is a standard card'
        },
        image: {
            type: String,
            default: 'icons/cog.svg'
        },
        alt: {
            type: String,
            default: 'Loading Cog'
        }
    }
    
}
</script>

<style scoped>

div {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    padding: 1.5rem;
    margin: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #000;
}
    
img {
    width: 100%;
    max-width: 150px;
    height: auto;
    padding: 1rem;
    margin-bottom: 1rem;
}

p {
    text-align: left;
    font-size: 1.2rem;
    margin: 1rem 0;
    color: var(--color-neutral-dark);
}

</style>