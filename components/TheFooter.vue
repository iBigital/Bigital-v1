<template>
  <footer>
    <div class="flex-center text-center">
      <p>
        Bigital
        <img
          height="12px"
          alt="Bigital Rabbit Logo"
          src="../assets/common/simple_logo.png"/> | © 2021 All Rights Reserved
      </p>
    </div>
  </footer>
</template>

<style>
footer {

  font-size: 1rem;
}
footer > div {
  display: none !important;
  padding: 20px;
  border-top: solid 1px var(--color-neutral);
  margin: 2rem;
}
@media screen and (max-width: 1049px) {
  footer > div {
    display: block !important;
    margin-bottom: 0;
  }
}
</style>

<script>
</script>
