<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio SCS Page" />
    <meta name="keywords" content="HTML, CSS, SCSS, SASS, JavaScript" />
    <meta name="author" content="Andrejs Volskis" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="js/hamburger/hamburgers.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>SCS Scheme</title>
    <link rel="icon" type="image/icon" href="images/icons/folder-open.png" />
  </head>
  <body>
    <div class="wrapper">
       <!-- side navigation -->
       <?php include ("inc/sidenav.php"); ?>
      <!-- mobile nav  -->
      <?php include ("inc/burger.php"); ?>
      <!-- main content -->
      <!-- scion scheme section -->
      <?php include ("inc/scion.php"); ?>
      <!-- end of main content -->
    <script src="js/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/5cbcf5da8c.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
