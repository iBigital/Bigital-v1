<template>
  <div>
    <section class="text-center">
      <h1>Services</h1>
      <div class="service-intro flex-center-responsive">
        <img
          src="../assets/common/logo.png"
          width="50%"
          alt="Phil the Digital Rabbit"
        />
        <p>
          Bigital offers premium software customization and programming for
          people and businesses that need it! The digital landscape is an
          absolute wilderness, so hire an expert to navigate your way.
        </p>
      </div>
    </section>
    <section class="bg-plate">
      <ExtendedCard
        title="Web Design"
        image="icons/desktop.svg"
        description="From simple landing pages to complex webapps featuring enterprise functionality: it'll be pretty too!"
      />
      <ExtendedCard
        id="flip-it"
        title="Hosting"
        image="icons/server.svg"
        description="Enviromentally friendly servers without compromising top notch performance."
      />
      <ExtendedCard
        title="Consulting"
        image="icons/consulting.svg"
        description="Is your production build slow or completely broken? Contact now to discuss custom consulting options."
      />
      <ExtendedCard
        id="flip-it"
        title="Automation"
        description="We can help you automate your workflow with our custom automation solutions."
      />
      <ExtendedCard
        title="Testing"
        description="We can help you test your software to ensure it's working as expected."
      />
      <ExtendedCard
        id="flip-it"
        title="Training"
        description="We can help you train your team to use your software."
      />
      <ExtendedCard
        title="Support"
        description="We can help you get your software up and running."
      />
      <ExtendedCard
        id="flip-it"
        title="Custom"
        description="We can help you build your software to your specifications."
      />
      <ExtendedCard
        title="Wait one second...?"
        description="A savy person might notice some of these services are lacking! Thats because an AI wrote the above information as a temporary placeholder while Bigital is building our clients needs."
      />
    </section>

    <section class="text-center">
      <p>More detailed offerings will be avaliable soon.</p>

      <br />
      <img
        src="../assets/strange_meeting.png"
        alt="Phil, Bigital's Logo, having wide eyes at meeting strange glowing rabbits in a blue alien place. Socks flying rocket. 'Your Data, Your Designer, Your Developer. Your Next Fullstack Expert'"
      />
    </section>
  </div>
</template>

<style scoped>
.service-intro {
  margin: 2rem;
  margin-bottom: 0;
}

.service-intro > p {
  padding: 1rem;
  text-align: left;
  flex-shrink: 1;
}

.service-intro > img {
  max-width: 300px;
  height: auto;
}
</style>