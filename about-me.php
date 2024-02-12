<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Portfolio About Me Page" />
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
    <link rel="stylesheet" href="css/style.css" />

    <title>About me</title>
    <link rel="icon" type="image/icon" href="images/icons/folder-open.png" />
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
          class="banner-image banner-secondary"
          style="background-image: url('images/img-3.jpg')"
        >
          <div class="text">
            <h1 id="main"></h1>
            <p id="para-text"></p>
          </div>
        </div>
        <h1 class="about_h1">About Me</h1>
        <!-- about me -->
        <?php include ("inc/about.php"); ?>
        <!-- end of about me -->
      </div>
      <!-- end of main content -->
    </div>

    <script src="js/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/5cbcf5da8c.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
