<template>
  <div>
    <section class="text-center">
      <h1>Easy breezy digital consulting from Bigital</h1>
      <div class="flex-center-responsive landing">
        <img
          src="../assets/high_flying.png"
          alt="Bigital's mascot and logo phil flying a biplane with his passenger & sidekick Socks. Some clouds"
        />
        <div class="flex-column">
          <p>
            Let an expert at Bigital guide your next project to soar to new
            heights!
          </p>
          <NuxtLink to="/contact">
            <button class="btn-CTA"><span> Connect Now </span></button>
          </NuxtLink>
        </div>
      </div>
    </section>

    <section class="text-center">
      <img
        src="../assets/drop_ship.png"
        alt="Phil parachuting from a biplane with crates while his passenger & sidekick Socks flies away. Some clouds"
      />
      <p>
        Prepared with a diverse toolset to get the job done on-time everytime.
      </p>
    </section>

    <section class="text-center bg-plate">
      <h2>Favorite Tools</h2>
      <div class="flex-center">
        <DisplayItem
          image="icons/css3.svg"
          alt="CSS3's Logo"
          url="https://developer.mozilla.org/en-US/docs/Web/CSS"
        />
        <DisplayItem
          image="icons/javascript.svg"
          alt="Javascript's Logo"
          url="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
        />
        <DisplayItem
          image="icons/nuxt.png"
          alt="Nuxt's Logo"
          url="https://nuxtjs.org/"
        />
        <DisplayItem
          image="icons/github.svg"
          alt="Github's Logo"
          url="https://github.com/"
        />
        <DisplayItem
          image="icons/cpanel.png"
          alt="cPanel's Logo"
          url="https://cpanel.net/"
        />
        <DisplayItem
          image="icons/golang.svg"
          alt="Go's Logo"
          url="https://go.dev/"
        />
        <DisplayItem
          image="icons/shopify.svg"
          alt="Shopify's Logo"
          url="https://shopify.dev/"
        />
        <DisplayItem
          image="icons/figma.svg"
          alt="Figma's Logo"
          url="https://www.figma.com/"
        />
        <DisplayItem
          image="icons/photoshop.svg"
          alt="Photoshop's Logo"
          url="https://www.adobe.com/products/photoshop.html"
        />
      </div>
    </section>

    <section class="text-center bg-plate">
      <h2>Service Packages</h2>
      <p>
        Whether you need a website, mobile app, hosting service, or software
        consulting, Bigital can craft the solutions your business or great idea
        needs to get going!
      </p>
      <div class="flex-center-responsive">
        <StandardCard
          title="Web Design"
          image="icons/desktop.svg"
          description="From simple landing pages to complex webapps featuring enterprise functionality: it'll be pretty too!"
        />
        <StandardCard
          title="Hosting"
          image="icons/server.svg"
          description="Enviromentally friendly servers without compromising top notch performance."
        />
        <StandardCard
          title="Consulting"
          image="icons/consulting.svg"
          description="Is your production build slow or completely broken? Contact now to discuss custom consulting options."
        />
      </div>
    </section>

    <section class="text-center">
      <h1>Community above all else.</h1>
      <img
        src="../assets/table_relief.png"
        alt="Bigital's mascot and logo phil finishing giving aid to Brown on a table while a crowd gathers."
      />
      <p>
        Supporting communities and helping others is imperative no matter where.
        <br />
        To give back, Bigital offers 70% off website & consulting services for
        nonprofits, charities, and other giving organizations. No strings
        attached.
      </p>
    </section>

    <section class="text-center bg-plate">
      <h2>Contact to Learn More</h2>
      <div class="flex-center-responsive">
        <ContactCard />
        <div class="contact-side-plate">
          <h3>What do you need help with?</h3>
          <p>
            Pro tip: Asking doesn't cost a thing! From small to large, Bigital
            is willing to hear out your troubles.
          </p>
          <p>
            Send messages with relevant details including project, timeline, and
            budget to begin as soon as today!
          </p>
        </div>
      </div>
    </section>

    <section class="text-center">
      <h1>Open source all the way.</h1>
      <img
        src="../assets/launch_prep.png"
        alt="Bigital's mascot and logo phil utilizing Brown's expertise to launch a rocket."
      />
      <p>
        Bigital strongly believes in the power of collaboration and wouldn't be
        possible without massive contribution to open source projects.
        <br />
        <br />
        To see the code running this page (and many other services), feel free
        to click here:
        <a href="https://github.com/Brehtyn?tab=repositories"> Github Repos </a>
      </p>
    </section>

    <section class="text-center bg-plate">
      <h2>Project Examples</h2>
      <p>
        Explore some of the projects Bigital has worked on. If you'd like to see
        more, check out this
        <NuxtLink to="/portfolio"> portfolio page. </NuxtLink>
      </p>
      <div>
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
      </div>
    </section>

    <section class="text-center">
      <br />
      <h1 class="text-center">Still curious to learn more?</h1>
      <p>
        Find out more about Bigital's services by visiting the
        <wbr /> 
        <NuxtLink to="/services">service page </NuxtLink> 
        or the company mission by clicking "our"
        <wbr />
        <NuxtLink to="/about">about page.</NuxtLink>
      </p>
    </section>

    <img
      class="img-cover"
      src="../assets/curiosity.png"
      alt="Bigital's mascot and logo phil flying a rocket in orbit around the earth."
    />
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.bg-plate > p {
  padding: 1rem;
}
.bg-plate > h1,
h2,
h3,
h4,
h5,
h6 {
  padding: 1rem;
}

.landing > img {
  width: 60%;
  height: auto;
}
.landing > .flex-column {
  padding: 1rem;
  align-self: center;
  justify-content: center;
  margin-right: 2rem;
}
.landing > .flex-column > p {
  padding: 1rem;
  font-size: 1.2rem;
  text-align: left;
}
.landing > .flex-column > a > button {
  margin-top: 2rem;
}

@media screen and (min-width: 769px) {
  .contact-side-plate {
    max-width: 40%;
  }
}
.contact-side-plate,
.contact-side-plate > * {
  padding: 1rem;
  text-align: left;
}
.contact-side-plate > p {
  color: var(--color-neutral-dark);
  font-size: 1rem;
}
</style>