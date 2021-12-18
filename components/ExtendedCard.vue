<template>
  <section class="flex-center-responsive">
    <div>
      <a :href="url">
        <img :src="image" :alt="alt" id="screenshot_image" />
      </a>
    </div>
    <div>
      <h3>{{ title }}</h3>
      <p>{{ description }}</p>
      <div class="flex-center-responsive">
        <a v-if="url" :href="url" class="btn"> Live Demo </a>
        <a v-if="github" :href="github" class="btn"> Github </a>
        <a v-if="githubAPI" :href="githubAPI" class="btn"> API Github </a>
        <a v-if="thanksURL" :href="thanksURL" class="btn">
          {{ thanksPerson }}
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: "Extended Card",
    },
    description: {
      type: String,
      default: "This is a extended card",
    },
    image: {
      type: String,
      default: "icons/cog.svg",
    },
    alt: {
      type: String,
      default: "Loading Cog",
    },
    url: {
      type: String,
      default: false,
      required: false,
    },
    github: {
      type: String,
      default: false,
      required: false,
    },
    githubAPI: {
      type: String,
      default: false,
      required: false,
    },
    thanksPerson: {
      type: String,
      default: false,
      required: false,
    },
    thanksURL: {
      type: String,
      default: false,
      required: false,
    },
  },
};
</script>

<style scoped>
section {
  width: 100%;
  max-width: 1000px;
  height: 100%;
  background-color: var(--color-neutral);
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: row;
  color: #000;
  background-color: var(--color-neutral);
  margin: 1rem auto;
}
section > div:last-of-type {
  padding: 0 3rem;
}
#flip-it {
  flex-direction: row-reverse;
}

@media screen and (min-width: 650px) {
  section > div > h3 {
    align-items: flex-start !important;
    align-self: flex-start !important;
  }
  section > div > a > img {
  padding-left: 2rem !important;
}
}

@media screen and (max-width: 650px) {
  section {
    flex-direction: column;
  }
  #flip-it {
    flex-direction: column;
  }
}

div {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

img {
  width: 100%;
  max-width: 150px;
  height: auto;
  padding: 1rem;
  margin-bottom: 1rem;
}
#screenshot_image {
  padding: 0;
  margin: 0;
  width: 100%;
  height: auto;
}
p {
  text-align: left;
  font-size: 1.2rem;
  margin: 1rem 0;
  color: var(--color-neutral-dark);
}
.btn {
  margin: 0.5rem 4rem;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  background-color: var(--color-primary);
  color: var(--color-special);
  width: 50%;
  min-width: 200px;
  color: black;
  text-decoration: none;
}
</style>