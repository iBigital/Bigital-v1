<template>
  <div>
    <section class="text-center">
      <h1>Portfolio</h1>
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
      />
      <ExtendedCard
        title="Call of Dooty 702"
        description="Local professional handyman and his crew's landing page. HTML, CSS, & Photoshop hosted on cPanel."
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
      />
      <ExtendedCard
        title="Guiding Light Preschool"
        description="Family daycare school made with plain HTML, CSS, JS, and PHP hosted on cPanel."
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
        githubAPI="https://github.com/Dvent1123/task-manager-api"
        thanksPerson="Daniel Ventura"
        thanksURL="https://www.venturadaniel.com/"
      />
      <ExtendedCard
        id="flip-it"
        title="Calisthenic Tracker"
        description="Workout goal based tracker made with React, Node, and MongoDB. Special thanks to Daniel Ventura."
        image="screenshots/calitrack.jfif"
        alt="Screenshot of Calisthenic Tracker's website."
        url="https://exercisemaphub.com/"
        github="https://github.com/Dvent1123/calisthenics-tracker-client"
        githubAPI="https://github.com/Dvent1123/calisthenics-tracker-api"
        thanksPerson="Dan the Man"
        thanksURL="https://www.venturadaniel.com/"
      />
    </section>
    <section>
      <p class="text-center"> Useful Software: </p>
      <ExtendedCard
        title="Email Signature"
        description="Oldfashion email signature using HTML, CSS, and Photoshop."
        
        alt="Screenshot of Email signature."
        github="https://github.com/Brehtyn/bgit-html-email-sig"
      />
      <ExtendedCard
        id="flip-it"
        title="Jake LED Box"
        description="Themed LED box made with Arduino, C++, and adafruit libraries."
        alt="Screenshot of Email signature."
        github="https://github.com/Brehtyn/jake-box"
      />
      <ExtendedCard
        title="Basic Web Skeleton"
        description="For HTML, CSS, and JavaScript websites. Optional PHP contact form."
        alt="Screenshot of Bweb Skeleton."
        github="https://github.com/Brehtyn/bgit-bweb-skel"
      />
    </section>
    <section class="text-center">
      <img
        src="../assets/common/logo.png"
        alt="Bigital's mascot and logo phil giant in all his glory."
      />
    </section>
  </div>
</template>

<style scoped>
</style>