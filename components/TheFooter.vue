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
  margin: 2rem;
  border-top: solid 1px var(--color-neutral);
  background-color: var(--color-primary);
}
footer > div {
  display: none !important;
  padding: 20px;
}
@media screen and (max-width: 1049px) {
  footer > div {
    display: block !important;
  }
}
</style>

<script>
</script>
