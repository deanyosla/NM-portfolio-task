document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const firstName = document.getElementById("f-name");
    const lastName = document.getElementById("l-name");
    const email = document.getElementById("email");
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const subject = document.getElementById("subject");
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
        } else if (!/^[a-zA-Z]+$/.test(firstName.value)) {
          displayErrorMessage("f-name-error", "*First Name can only contain letters.");
          addErrorBorder("f-name");
          hasErrors = true;
        }
  
        if (lastName.value === "") {
            displayErrorMessage("l-name-error", "*Last Name is required.");
            addErrorBorder("l-name");
            hasErrors = true;
        } else if (!/^[a-zA-Z]+$/.test(lastName.value)) {
          displayErrorMessage("l-name-error", "*Last Name can only contain letters.");
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
        // Check the message length and content
        const messageValue = message.value.trim();
        const messageLength = messageValue.length;
  
        if (messageLength === 0 || /^\s+$/.test(messageValue)) {
            displayErrorMessage("msg-field-error", "*Message cannot be empty or contain only spaces.");
            addErrorBorder("msg-field");
            hasErrors = true;
        } else if (messageLength < 40) {
            displayErrorMessage("msg-field-error", "*Message should be at least 40 characters long.");
            addErrorBorder("msg-field");
            hasErrors = true;
        }
        
        if (subject.value === "") {
          addErrorBorder("subject");
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
  
        const inputFields = document.querySelectorAll("input, #subject, #msg-field");
        for (let i = 0; i < inputFields.length; i++) {
            inputFields[i].classList.remove("error-border");
        }
    }
  });