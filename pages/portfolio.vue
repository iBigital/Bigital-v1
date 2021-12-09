<template>
  <div>
    <section class="text-center">
      <h1>Portfolio</h1>
      <br >
      <p>Below are examples of my labor.</p>
    </section>
    <section>
      <p class="text-center"> Websites: </p>
      <ExtendedCard
        title="Bigital's Portfolio"
        description="Wonder where you've seen this before. Running on Nuxt and utilizing loads more."
        image="screenshots/bigital.jfif"
        alt="Screenshot of Bigital's website."
        url="https://ibigital.com/"
        github="https://github.com/Brehtyn/bgit-portfolio"
      />
      <ExtendedCard
        id="flip-it"
        title="Sudsy Serenity"
        description="A relaxing and peaceful soap store utilizing Shopify, Photoshop, and CSS."
        image="screenshots/sudsyserenity.jfif"
        alt="Screenshot of Sudsy Serenity's website."
        url="https://sudsyserenity.com/"
        github="https://github.com/Brehtyn?tab=repositories"
      />
      <ExtendedCard
        title="Call of Dooty 702"
        description="Local professional handyman and his crew's landing page. HTML, CSS, & Photoshop hosted on Cpanel."
        image="screenshots/cod702.jfif"
        alt="Screenshot of Call of Dooty's website."
        url="https://callofdooty702.com/"
        github="https://github.com/Brehtyn/CallofDooty"
      />
      <ExtendedCard
        id="flip-it"
        title="The Wooden Chick"
        description="A rustic themed sign store utilizing Shopify, Photoshop, and CSS."
        image="screenshots/woodenchick.jfif"
        alt="Screenshot of The Wooden Chick's website."
        url="https://sudsyserenity.com/"
        github="https://github.com/Brehtyn?tab=repositories"
      />
      <ExtendedCard
        title="Guiding Light Preschool"
        description="Family daycare school made with plain HTML, CSS, JS, and PHP hosted on Cpanel."
        image="screenshots/glcec.jfif"
        alt="Screenshot of GLCEC's website."
        url="https://www.glcec.org/"
        github="https://github.com/Brehtyn/G.L.C.E.C."
      />
      <ExtendedCard
        id="flip-it"
        title="Ooofta"
        description="Swedish entrepreneur's website for his ingenius backpacks. Wordpress and CSS."
        image="screenshots/ooofta.jfif"
        alt="Screenshot of OOOFTA's website."
        url="http://www.ooofta.com/"
        github="https://github.com/Brehtyn?tab=repositories"
      />
    </section>
    <section>
      <p class="text-center"> Collaborative Projects: </p>
      <ExtendedCard
        title="Todo Simply"
        description="Todo list made with React, Node, and MongoDB. Special thanks to Daniel Ventura."
        image="screenshots/todosimply.jfif"
        alt="Screenshot of Todo Simply's App."
        url="https://todo-simply.com/"
        github="https://github.com/Dvent1123/task-manager-client"
      />
      <ExtendedCard
        id="flip-it"
        title="Calisthenic Tracker"
        description="Workout goal based tracker made with React, Node, and MongoDB. Special thanks to Daniel Ventura."
        image="screenshots/calitrack.jfif"
        alt="Screenshot of Calisthenic Tracker's website."
        url="https://exercisemaphub.com/"
        github="https://github.com/Dvent1123/calisthenics-tracker-client"
      />
    </section>
    <section class="text-center">
      <img
        src="../assets/high_flying.png"
        alt="Bigital's mascot and logo phil flying a biplane with his passenger & sidekick Socks. Some clouds"
      />
      <p>More is coming soon.</p>
    </section>
  </div>
</template>
<script>
export default {};
</script>

<style scoped>
</style>