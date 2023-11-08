const hamburger = document.querySelector('.hamburger');
const menu_nav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', function () {
    hamburger.classList.add('hamburger--emphatic');
    hamburger.classList.toggle("is-active");
    menu_nav.classList.toggle("is-active");
});




const headerTxt = "Hi, I'm Andrejs Volskis!";
const paraTxt = 'I am an aspiring Web Developer.';
let headerSpeed = 80;
let paraSpeed = 60;
let headerLength = 0;
let paraLength = 0;

function typeWriterHeader() {
    if (headerLength < headerTxt.length) {
        document.getElementById('main').innerHTML += headerTxt.charAt(headerLength);
        headerLength++;
        setTimeout(typeWriterHeader, headerSpeed);
    }
}
function typeWriterPara() {
    if (paraLength < paraTxt.length) {
        document.getElementById('para-text').innerHTML += paraTxt.charAt(paraLength);
        paraLength++;
        setTimeout(typeWriterPara, paraSpeed);
    }
}

function typeWriter() {
    typeWriterHeader();
    setTimeout(typeWriterPara, 3000);
}

typeWriter();

 // Working form validation

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const firstName = document.getElementById("f-name");
  const lastName = document.getElementById("l-name");
  const email = document.getElementById("email");
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  const message = document.getElementById("msg-field");

  form.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevents the default form submission behavior

      // Clears any previous error messages and removes error borders
      clearErrorMessages();

      let hasErrors = false;

      if (firstName.value === "") {
          displayErrorMessage("f-name-error", "*First Name is required.");
          addErrorBorder("f-name");
          hasErrors = true;
      }

      if (lastName.value === "") {
          displayErrorMessage("l-name-error", "*Last Name is required.");
          addErrorBorder("l-name");
          hasErrors = true;
      }

      if (email.value === "") {
          displayErrorMessage("email-error", "*Email Address is required.");
          addErrorBorder("email");
          hasErrors = true;
      } else if (!email.value.match(emailPattern)) {
          displayErrorMessage("email-error", "*Email Address is not valid.");
          addErrorBorder("email");
          hasErrors = true;
      }

      if (message.value.length < 40) {
          displayErrorMessage("msg-field-error", "*Message should be at least 40 characters long.");
          addErrorBorder("msg-field");
          hasErrors = true;
      }

      if (hasErrors) {
          return;
      }

      // Resets the form
      form.reset();
  });

  function displayErrorMessage(elementId, message) {
      const errorElement = document.getElementById(elementId);
      errorElement.textContent = message;
      errorElement.style.display = "block";
  }

  function addErrorBorder(inputId) {
      const inputField = document.getElementById(inputId);
      inputField.classList.add("error-border");
  }

  function clearErrorMessages() {
      const errorElements = document.getElementsByClassName("error-message");
      for (let i = 0; i < errorElements.length; i++) {
          errorElements[i].textContent = "";
          errorElements[i].style.display = "none";
      }

      const inputFields = document.querySelectorAll("input, #msg-field");
      for (let i = 0; i < inputFields.length; i++) {
          inputFields[i].classList.remove("error-border");
      }
  }
});

  
 
  