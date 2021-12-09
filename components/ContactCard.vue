<template>
  <div>
    <form name="generalcontactform" method="post" action="#">
      <div class="half-split">
        <span> First Name: </span>
        <span> Last Name: </span>
      </div>
      <div class="half-split">
        <input type="text" class="private_form" name="fname" />
        <input type="text" class="private_form" name="lname" />
      </div>
      <span> Email: </span>
      <input type="email" class="private_form" name="email" />
      <span> Interested In </span>
      <select class="private_form" name="service">
        <option value="" selected disabled hidden>Select</option>
        <option value="Web">Web Design</option>
        <option value="Programming">Programming Help</option>
        <option value="Hosting">Hosting / Server Services</option>
        <option value="Consulting">Developer Consulting</option>
        <option value="Other">Other (details please)</option>
      </select>

      <span> Comments: </span>
      <textarea type="text" class="private_form" name="comment" />

      <button type="submit" value="Send Form" v-on:click="validateForm()">
        Send Message
      </button>
    </form>

    <div class="temp">
      <div class="half-split">
        <h3>Email :</h3>
      </div>
      <div class="half-split">
        <p>Brentyn@iBigital.com</p>
      </div>
      <div class="half-split">
        <h3>Located :</h3>
      </div>
      <div class="half-split">
        <p>Las Vegas, Nevada</p>
      </div>
    </div>
  </div>
</template>

<script>
function validateForm() {
  var k = document.forms["generalcontactform"]["fname"].value;
  if (k == "") {
    alert("Please provide your name.");
    return false;
  }
  var k = document.forms["generalcontactform"]["email"].value;
  if (k == "") {
    alert("Please provide your email address.");
    return false;
  }

  var k = document.forms["generalcontactform"]["service"].value;
  if (k == "") {
    alert("Please include your desired service.");
    return false;
  }
}
</script>


<style scoped>
.temp {
  padding: 1rem;
  margin: 1rem;
}
.temp > div {
  padding: 1rem;
}

form {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 2rem;
  background-color: var(--color-neutral);
  text-align: left;
  color: #000;
  font-family: var(--ff-accent);
  font-size: 1rem;
  display: none;
}

span {
  display: block;
  margin: 0.5rem 0;
}
input,
textarea,
select,
button {
  display: block;
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.half-split {
  display: flex;
  flex-direction: row;
}
.half-split > span,
.half-split > input {
  width: 50%;
}
.half-split > span:last-child,
.half-split > input:last-child {
  margin-left: 10px;
}

textarea {
  height: 80px;
}

button {
  margin: auto;
  margin-top: 1rem;
  background-color: var(--color-button);
}
</style>