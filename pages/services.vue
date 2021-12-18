<template>
  <div>
    <section>
      <h1 class="text-center">Service & Skills</h1>
      <div class="service-intro flex-center-responsive">
        <img
          src="../assets/common/logo.png"
          width="50%"
          alt="Phil the Digital Rabbit"
        />
        <p>
          Bigital offers premium software customization and programming for
          people and businesses that need it! The digital landscape is an
          absolute wilderness, so hire an expert to safely navigate your way.
        </p>
      </div>
    </section>

    <section class="text-center bg-plate">
      <h2>Familiar Toolbox</h2>
      <div class="flex-center">
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
        <DisplayItem
          image="icons/vue-js.svg"
          alt="Vue's Logo"
          url="https://vuejs.org/"
        />
        <DisplayItem
          image="icons/nuxt.png"
          alt="Nuxt's Logo"
          url="https://nuxtjs.org/"
        />
        <DisplayItem
          image="icons/blazor.png"
          alt="Blazor's Logo"
          url="https://dotnet.microsoft.com/en-us/apps/aspnet/web-apps/blazor"
        />
        <DisplayItem
          image="icons/react-js.svg"
          alt="React's Logo"
          url="https://reactjs.org/"
        />
        <DisplayItem
          image="icons/css3.svg"
          alt="CSS3's Logo"
          url="https://developer.mozilla.org/en-US/docs/Web/CSS"
        />
        <DisplayItem
          image="icons/sass.svg"
          alt="Sass's Logo"
          url="https://sass-lang.com/"
        />
        <DisplayItem
          image="icons/cpanel.png"
          alt="cPanel's Logo"
          url="https://cpanel.net/"
        />
        <DisplayItem
          image="icons/node-js.svg"
          alt="Node's Logo"
          url="https://nodejs.org/en/"
        />
        <DisplayItem
          image="icons/netlify.png"
          alt="Netlify's Logo"
          url="https://www.netlify.com/"
        />
        <DisplayItem
          image="icons/mongodb.png"
          alt="MongoDB's Logo"
          url="https://www.mongodb.com/"
        />
        <DisplayItem
          image="icons/javascript.svg"
          alt="Javascript's Logo"
          url="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
        />
        <DisplayItem
          image="icons/golang.svg"
          alt="Go's Logo"
          url="https://go.dev/"
        />
        <DisplayItem
          image="icons/c++.svg"
          alt="C++'s Logo"
          url="https://www.cplusplus.com/"
        />
        <DisplayItem
          image="icons/java.svg"
          alt="Java's Logo"
          url="https://www.java.com/"
        />
        <DisplayItem
          image="icons/php.png"
          alt="PHP's Logo"
          url="https://www.php.net/"
        />
        <DisplayItem
          image="icons/dotnet.png"
          alt=".NET's Logo"
          url="https://dotnet.microsoft.com/"
        />
        <DisplayItem
          image="icons/c-sharp.svg"
          alt="C#'s Logo"
          url="https://dotnet.microsoft.com/en-us/languages/csharp"
        />
        <DisplayItem
          image="icons/shopify.svg"
          alt="Shopify's Logo"
          url="https://shopify.dev/"
        />
        <DisplayItem
          image="icons/wordpress.svg"
          alt="Wordpress's Logo"
          url="https://wordpress.org/"
        />
        <DisplayItem
          image="icons/linux.png"
          alt="Linux's Logo"
          url="https://www.linux.org/"
        />
        <DisplayItem
          image="icons/ubuntu.png"
          alt="Ubuntu's Logo"
          url="https://www.ubuntu.com/"
        />
        <DisplayItem
          image="icons/git.svg"
          alt="Git's Logo"
          url="https://git-scm.com/"
        />
        <DisplayItem
          image="icons/github.svg"
          alt="Github's Logo"
          url="https://github.com/"
        />
        <DisplayItem
          image="icons/copilot.png"
          alt="Github Copilot Logo"
          url="https://copilot.github.com/"
        />
        <DisplayItem
          image="icons/bash.svg"
          alt="Bash's Logo"
          url="https://www.gnu.org/software/bash/"
        />
        <DisplayItem
          image="icons/powershell.svg"
          alt="PowerShell's Logo"
          url="https://docs.microsoft.com/en-us/windows-server/administration/windows-commands/powershell"
        />
        <DisplayItem
          image="icons/yaml.png"
          alt="YAML's Logo"
          url="https://www.yaml.org/"
        />
        <DisplayItem
          image="icons/matlab.svg"
          alt="Matlab's Logo"
          url="https://www.mathworks.com/products/matlab.html"
        />
        <DisplayItem
          image="icons/arduino.svg"
          alt="Arduino's Logo"
          url="https://www.arduino.cc/"
        />
      </div>
      <h2>Excited to Learn More With</h2>
      <div class="flex-center">
        <DisplayItem
          image="icons/golang.svg"
          alt="Go's Logo"
          url="https://go.dev/"
        />
        <DisplayItem
          image="icons/node-js.svg"
          alt="Node's Logo"
          url="https://nodejs.org/en/"
        />
        <DisplayItem
          image="icons/sql.png"
          alt="SQL's Logo"
          url="https://en.wikipedia.org/wiki/SQL"
        />
        <DisplayItem
          image="icons/flutter.svg"
          alt="Flutters's Logo"
          url="https://flutter.dev/"
        />
        <DisplayItem
          image="icons/kubernetes.svg"
          alt="Kubernetes's Logo"
          url="https://kubernetes.io/"
        />
        <DisplayItem
          image="icons/nginx.svg"
          alt="NGINX's Logo"
          url="https://www.nginx.com/"
        />
        <DisplayItem
          image="icons/haskell.svg"
          alt="Haskell's Logo"
          url="https://www.haskell.org/"
        />
        <DisplayItem
          image="icons/unity.svg"
          alt="Unitys's Logo"
          url="https://unity.com/"
        />
        <DisplayItem
          image="icons/ruby.svg"
          alt="Ruby's Logo"
          url="https://www.ruby-lang.org/"
        />
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
        title="Testing"
        description="We can help you test your software to ensure it's working as expected."
      />
      <ExtendedCard
        title="Automation"
        image="icons/automation.png"
        description="We can help you automate your workflow with our custom automation solutions."
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