<?php
session_start();
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

        $isFirstNameValid = validateInput($firstName, "First Name", preg_match($nameRegex, $firstName));
        $isLastNameValid = validateInput($lastName, "Last Name", preg_match($nameRegex, $lastName));
        $isEmailValid = validateInput($email, "Email", filter_var($email, FILTER_VALIDATE_EMAIL));
        $isSubjectValid = validateInput($subject, "Subject");
        $isMessageValid = validateInput($message, "Message");

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
            header("Location: #contact-form");
        
            exit();

        }
        else
        {
            $_SESSION['form_sent'] = false;
            header("Location: #contact-form");

            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Portfolio Main Page" />
    <meta name="keywords" content="HTML, CSS, SCSS, SASS, JavaScript" />
    <meta name="author" content="Andrejs Volskis" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="js/hamburger/hamburgers.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css"
    />
    
    <link rel="stylesheet" href="css/style.css" />

    <title>Andrejs Volskis | Portfolio</title>
    <link rel="icon" type="image/icon" href="images/icons/home.png" />
  </head>

  <body>
    <div class="wrapper">
      <!-- side navigation -->
      <?php include ("inc/sidenav.php"); ?>
      <!-- mobile nav  -->
      <?php include ("inc/burger.php"); ?>
      <!-- main content -->
      <div class="main-content">
        <div
          class="banner-image"
          style="background-image: url('images/img-3.jpg')"
        >
          <h1 id="main"></h1>
          <p id="para-text"></p>

          <div class="scroll">
            <a href="#portfolio" class="scroll-btn">scroll down</a>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
        </div>
        <!-- portfolio section -->
        <h1 class="card_h1">My Portfolio</h1>
        <?php include ("inc/portfolio.php"); ?>
        <!-- end of portfolio section --> 
        <!-- contact section --> 
        <h1 class="h1-forms">Contact Me</h1>
        <?php include ("inc/contact.php"); ?>
        <div class="scroll-up">
          <i class="fa-solid fa-chevron-up"></i><a href="#main">back to top</a>
        </div>
      </div>
      <!-- end of main content -->
    </div>
    <!-- scripts -->
    <script src="js/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form.js"></script>
    <script
      src="https://kit.fontawesome.com/5cbcf5da8c.js"
      crossorigin="anonymous"
    ></script>
    <!-- end of scripts -->
  </body>
</html>
