<?php
    include("inc/contact_data.php");
    
    if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }
    
    function sanatiseInput($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    function validateInput($postData, $input, $regex=true)
    {
        if (empty($postData) == true)
        {
            array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
            return false;
        }
        else if ($regex == false)
        {
            array_push($_SESSION['errorMessage'], "The " . $input . " format is incorrect.");
            return false;
        }
        else
        {
            return true;
        }
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstName = sanatiseInput($_POST['first_name']);
        $_SESSION['first_name'] = $firstName;

        $lastName = sanatiseInput($_POST['last_name']);
        $_SESSION['last_name'] = $lastName;

        $email = sanatiseInput($_POST['email']);
        $_SESSION['email'] = $email;

        $subject = sanatiseInput($_POST['subject']);
        $_SESSION['subject'] = $subject;

        $message = sanatiseInput($_POST['message']);
        $_SESSION['message'] = $message;
        
        $nameRegex = "/^[a-zA-Z-' ]*$/";
        $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

        $isFirstNameValid = validateInput($firstName, "first_name", preg_match($nameRegex, $firstName));
        $isLastNameValid = validateInput($lastName, "last_name", preg_match($nameRegex, $lastName));
        $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
        $isSubjectValid = validateInput($subject, "subject");
        $isMessageValid = validateInput($message, "message");

        if ($isFirstNameValid && $isLastNameValid && $isEmailValid && $isSubjectValid && $isMessageValid)
        {
            postData($firstName, $lastName, $email, $subject, $message);

            unset($_SESSION['first_name']);
            unset($_SESSION['last_name']);
            unset($_SESSION['email']);
            unset($_SESSION['subject']);
            unset($_SESSION['message']);

            $_SESSION['success'] = true;
            $_SESSION['errorMessage'] = [];

            $_SESSION['form_sent'] = true;

            // echo 'Data submitted to the Database Successfully';
            header("Location: index.php#contact-form");
        
            exit();

        }
        else
        {
            $_SESSION['form_sent'] = false;
            header("Location: index.php#contact-form");

            exit();
        }
    }
