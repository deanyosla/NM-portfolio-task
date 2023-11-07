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

 // Working submission form

function validateForm() {
    const firstName = document.getElementById("f-name").value;
    const lastName = document.getElementById("l-name").value;
    const email = document.getElementById("email").value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const message = document.getElementById("msg-field").value;

    function displayErrorMessage(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.textContent = message;
        errorElement.style.display = "block";
      
        // Apply the error border class to the corresponding input field
        const inputField = document.getElementById(elementId.replace("-error", ""));
        inputField.classList.add("error-border");
      }
      
      function clearErrorMessages() {
        const errorElements = document.getElementsByClassName("error-message");
        for (let i = 0; i < errorElements.length; i++) {
          errorElements[i].textContent = "";
          errorElements[i].style.display = "none";
      
          // Remove the error border class from all input fields
          const inputField = document.getElementById(errorElements[i].id.replace("-error", ""));
          inputField.classList.remove("error-border");
        }
      }
  
    // Clear any previous error messages and remove error borders
    clearErrorMessages();
  
    let hasErrors = false;
  
    if (firstName === "") {
      displayErrorMessage("f-name-error", "*First Name is required.");
      hasErrors = true;
    }
  
    if (lastName === "") {
      displayErrorMessage("l-name-error", "*Last Name is required.");
      hasErrors = true;
    }
  
    if (email === "") {
      displayErrorMessage("email-error", "*Email Address is required.");
      hasErrors = true;
    } else if (!email.match(emailPattern)) {
      displayErrorMessage("email-error", "*Email Address is not valid.");
      hasErrors = true;
    }
  
    if (message.length < 40 ) {
      displayErrorMessage("msg-field-error", "*Message should be at least 40 characters long.");
      hasErrors = true;
    }
  
    if (hasErrors) {
      return false;
    }
    form.reset();
    return true;
  }
  






// Not working for now 

// document.addEventListener("DOMContentLoaded", function () {
//     const form = document.getElementById("contact-form");
//     const firstName = document.getElementById("f-name");
//     const lastName = document.getElementById("l-name");
//     const email = document.getElementById("email");
//     const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//     const message = document.getElementById("msg-field");
  
//     form.addEventListener("submit", function (event) {
//       event.preventDefault(); // Prevent the default form submission behavior
  
//       // Clear any previous error messages and remove error borders
//       clearErrorMessages();
  
//       let hasErrors = false;
  
//       if (firstName.value === "") {
//         displayErrorMessage("f-name-error", "*First Name is required.");
//         addErrorBorder("f-name");
//         hasErrors = true;
//       }
  
//       if (lastName.value === "") {
//         displayErrorMessage("l-name-error", "*Last Name is required.");
//         addErrorBorder("l-name");
//         hasErrors = true;
//       }
  
//       if (email.value === "") {
//         displayErrorMessage("email-error", "*Email Address is required.");
//         addErrorBorder("email");
//         hasErrors = true;
//       } else if (!email.value.match(emailPattern)) {
//         displayErrorMessage("email-error", "*Email Address is not valid.");
//         addErrorBorder("email");
//         hasErrors = true;
//       }
  
//       if (message.value.length < 40 ) {
//         displayErrorMessage("msg-field-error", "*Message should be at least 40 characters long.");
//         addErrorBorder("msg-field");
//         hasErrors = true;
//       }
  
//       if (hasErrors) {
//         return;
//       }
//       function displayErrorMessage(elementId, message) {
//         const errorElement = document.getElementById(elementId + "-error");
//         errorElement.textContent = message;
//         errorElement.style.display = "block";
//       }
    
//       function addErrorBorder(inputId) {
//         const inputField = document.getElementById(inputId);
//         inputField.classList.add("error-border");
//       }
    
//       function clearErrorMessages() {
//         const errorElements = document.getElementsByClassName("error-message");
//         for (let i = 0; i < errorElements.length; i++) {
//           errorElements[i].textContent = "";
//           errorElements[i].style.display = "none";
//         }
    
//         const inputFields = document.querySelectorAll(".input-row input");
//         for (let i = 0; i < inputFields.length; i++) {
//           inputFields[i].classList.remove("error-border");
//         }
//       }
    
//       function clearFormFields() {
//         form.reset();
//       }
//       // If there are no errors, submit the form programmatically
//       form.submit();
  
//       // Clear the form fields
//       clearFormFields();
//     });
//   });
  
  
 
  