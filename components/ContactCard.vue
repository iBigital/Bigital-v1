<template>
  <div class="form" id="contactForm">
    <form
      name="generalcontactform"
      method="post"
      class="flex-center flex-column"
      action="forms/contactForm.php"
    >
      <span> Name: </span>
      <input
        type="text"
        class="private_form"
        name="name"
        placeholder="John Doe"
      />
      <span> Phone Number: </span>
      <input
        type="tel"
        class="private_form"
        name="phone"
        placeholder="(702)123-1234"
      />
      <span> Email: </span>
      <input
        type="email"
        class="private_form"
        name="email"
        placeholder="example@email.com"
      />
      <span> Service Level: </span>
      <div>
        <input type="radio" id="basic" name="service" value="Basic" />
        <label for="basic">Basic </label><br />
        <input type="radio" id="pro" name="service" value="Pro" />
        <label for="pro"> Pro </label><br />
        <input type="radio" id="business" name="service" value="Business" />
        <label for="business"> Business </label><br />
        <input type="radio" id="other" name="service" value="Other" checked />
        <label for="other"> Other </label>
      </div>

      <button
        class=""
        type="submit"
        value="Send Form"
        onclick="return validateForm()"
      >
        Submit
      </button>
    </form>
  </div>
</template>

<script>

</script>

<style scoped>

</style>