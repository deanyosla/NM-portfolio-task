const firstName = document.querySelector("#first_name");
const lastName = document.querySelector("#last_name");
const emailElement = document.querySelector("#email");
const subjectElement = document.querySelector("#subject");
const messageElement = document.querySelector("#message");
const btnClose = document.querySelector(".close");

const errorValidation = document.querySelector(".alert-fail");
const successValidation = document.querySelector(".alert-success");

const form = document.querySelector("#contact-form");

const isRequired = value => value === "" ? false : true; 
const isNameValid = (name) => {
    const regex = /^[A-Za-z\s-]+$/;
    return regex.test(name);
}

const isEmailValid = (email) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

const isPhoneValid = (number) => {
    
    
    const  regex = /^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/

    return regex.test(number);
}

const showError = (input) => {
    const formField = input;
    
    formField.classList.remove("success");
    formField.classList.add("error");
}

const showSuccess = (input) => {
    const formField = input;

    formField.classList.remove("error");
    formField.classList.add("success");
}

const checkFirstName = () => {
    let valid = false;

    const first_name = firstName.value;

    if (!isRequired(first_name) || !isNameValid(first_name))
    {
        showError(firstName)
    }
    else
    {
        showSuccess(firstName);
        valid = true;
    }

    return valid;
}
const checkLastName = () => {
    let valid = false;

    const last_name = lastName.value;

    if (!isRequired(last_name) || !isNameValid(last_name))
    {
        showError(lastName)
    }
    else
    {
        showSuccess(lastName);
        valid = true;
    }

    return valid;
}

const checkMessage = () => {
    let valid = false;

    const message = messageElement.value;

    if (!isRequired(message))
    {
        showError(messageElement);
    }
    else
    {
        showSuccess(messageElement);
        valid = true;
    }

    return valid;
}

const checkEmail = () => {
    let valid = false;

    const email = emailElement.value.trim();
    console.log(email);

    
    if (!isEmailValid(email))
    {
        showError(emailElement);
    }
    else
    {
        showSuccess(emailElement);
        valid = true;
    }

    return valid;
}

const checkSubject = () => {
    let valid = false;

    const subject = subjectElement.value;

    if (!isRequired(subject))
    {
        showError(subjectElement);
    }
    else
    {
        showSuccess(subjectElement);
        valid = true;
    }

    return valid;
}

btnClose.addEventListener("click", function (e) {
    e.preventDefault();

    if (errorValidation != null)
    {
        e.target.closest('div.alert-fail').remove();
    }
    
    if (successValidation != null)
    {
        e.target.closest('div.alert-success').remove();
    }
    
});

form.addEventListener("input", function (e){
    switch (e.target.id)
    {
        case "first_name":
             checkFirstName();
             break;
        case "last_name":
              checkLastName();
              break;

        case "email":
             checkEmail();
             break;

        case "subject":
             checkSubject();
             break;

        case "message":
             checkMessage();
             break;
    }
});