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
      <div class="sidenav">
        <a class="index" href="index.html"><h1>AV</h1></a>
        <a href="about-me.html#about">
          <i class="fa-solid fa-address-card"></i>
          About Me
        </a>
        <a href="index.html#portfolio"
          ><i class="fa-solid fa-folder-open"></i> My Portfolio
        </a>
        <a href="code.html">
          <i class="fa-solid fa-code"> </i> Coding Examples
        </a>

        <a href="scs.html">
          <i class="fa-solid fa-graduation-cap"></i> SCS Scheme
        </a>

        <a href="index.html#contact">
          <i class="fa-solid fa-mobile-screen"></i> &nbsp;Contact Me
        </a>

        <div class="social-media">
          <!-- <a href="#" id="fb-ico"><i class="fa-brands fa-facebook-f"></i></a> -->
          <a
            href="https://www.linkedin.com/in/andrejs-volskis-32751b160/"
            class="li-ico"
            target="_blank"
            ><i class="fa-brands fa-linkedin-in"></i
          ></a>
          <a
            href="https://www.instagram.com/art_of_andyw/"
            class="insta"
            target="_blank"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://github.com/deanyosla/" target="_blank" class="github"
            ><i class="fa-brands fa-github"></i
          ></a>
        </div>
      </div>
      <!-- mobile nav  -->
      <button class="hamburger" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <div class="mobile-nav">
        <a class="index" href="index.html"><h1>AV</h1></a>
        <a href="about-me.html#about">
          <i class="fa-solid fa-address-card"></i>
          About Me
        </a>

        <a href="#portfolio">
          <i class="fa-solid fa-folder-open"></i> My Portfolio
        </a>

        <a href="code.html">
          <i class="fa-solid fa-code"> </i> Coding Examples
        </a>

        <a href="scs.html">
          <i class="fa-solid fa-graduation-cap"></i> SCS Scheme
        </a>

        <a href="#contact">
          <i class="fa-solid fa-mobile-screen"></i> &nbsp;Contact Me
        </a>

        <div class="social-media">
          <!-- <a href="#" id="fb-ico"><i class="fa-brands fa-facebook-f"></i></a> -->
          <a
            href="https://www.linkedin.com/in/andrejs-volskis-32751b160/"
            class="li-ico"
            target="_blank"
            ><i class="fa-brands fa-linkedin-in"></i
          ></a>
          <a
            href="https://www.instagram.com/art_of_andyw/"
            class="insta"
            target="_blank"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://github.com/deanyosla/" target="_blank" class="github"
            ><i class="fa-brands fa-github"></i
          ></a>
        </div>
      </div>

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
        <h1 class="card_h1">My Portfolio</h1>
        <div id="portfolio" class="project-card container">
          <div class="tab-1">
            <img
              class="project-img"
              src="images/net_webp.jpg"
              alt="Netmatters Webpage Assessment"
            />
            
            <p>
              Reconstructed the <strong>Netmatters Webpage</strong> from the ground up, employing a meticulous approach with a focus on responsible design principles. Utilized a technology stack comprising <strong>HTML</strong>, <strong>CSS</strong>, <strong>SASS</strong>, <strong>JavaScript</strong>, <strong>PHP</strong> to ensure a robust and visually appealing outcome.
            </p>
            <p>
              Ensured faithful adherence to the original aesthetics, emphasizing a responsible design framework for cohesiveness with the brand identity and optimal user experience.
            </p>
            
            <span class="code-icons">
              <i class="fa-brands fa-html5"></i>
              <i class="fa-brands fa-css3-alt"></i>
              <i class="fa-brands fa-sass"></i>
              <i class="fa-brands fa-js"></i>
              <i class="fa-brands fa-php"></i>
          </span>

            <a
              href="http://netmatters.andrejs-volskis.netmatters-scs.co.uk/"
              class="project-btn"
              target="_blank"
              >View Project <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div>
          <div class="tab-2">
            <img
              class="project-img"
              src="images/JS_array.png"
              alt="JavaScript Image Array Fetch API"
            />
            <p>
              Developed a straightforward image array fetching tool during my studies at Netmatters, leveraging the <strong>Picsum API</strong>. This project was crafted using a technology stack that includes <strong>HTML</strong>, <strong>CSS</strong>, <strong>SASS</strong>, and <strong>JavaScript</strong>.
            </p>
           <p>Utilized Local Storage for secure email and image storage. Persistent saved images on page reload offer a seamless user experience, with built-in features for direct management and removal.
          </p>
            
            <span class="code-icons">
              <i class="fa-brands fa-html5"></i>
              <i class="fa-brands fa-css3-alt"></i>
              <i class="fa-brands fa-sass"></i
            ><i class="fa-brands fa-js"></i>
          </span>
            <a href="http://js-array.andrejs-volskis.netmatters-scs.co.uk/" class="project-btn"
              >View Project <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div>
          <div class="tab-3">
            <img
            class="project-img"
            src="images/contact.png"
            alt="Netmatters PHP Assessment"
          />
          <p>
            Reconstructed the <strong>Netmatters</strong> Contact page from the ground up, implementing PHP and JavaScript form validation. Utilized a technology stack comprising <strong>HTML</strong>, <strong>CSS</strong>, <strong>SASS</strong>, <strong>JavaScript</strong>, <strong>PHP</strong> to ensure a robust and visually appealing outcome.
          </p>
          <p>
            Ensured faithful adherence to the original aesthetics, emphasizing a responsible design framework for cohesiveness with the brand identity and optimal user experience.
          </p>
          
          <span class="code-icons">
            <i class="fa-brands fa-html5"></i>
            <i class="fa-brands fa-css3-alt"></i>
            <i class="fa-brands fa-sass"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-php"></i>
        </span>

          <a
            href="http://netmatters.andrejs-volskis.netmatters-scs.co.uk/contact-us.php"
            class="project-btn"
            target="_blank"
            >View Project <i class="fa-solid fa-arrow-right"></i
          ></a>
          </div>
          <div class="tab-4">
            <img
              class="project-img"
              src="images/img-4.jpg"
              alt="Placeholder image for a project"
            />
            <p>Project coming soon...</p>
            <a href="#" class="project-btn"
              >View Project <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div>

          <!-- <div class="tab-5">
            <img
              class="project-img"
              src="images/img-4.jpg"
              alt="Placeholder image for a project"
            />
            <p>Project coming soon...</p>
            <a href="#" class="project-btn"
              >View Project <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div>
          <div class="tab-6">
            <img
              class="project-img"
              src="images/img-4.jpg"
              alt="Placeholder image for a project"
            />
            <p>Project coming soon...</p>
            <a href="#" class="project-btn"
              >View Project <i class="fa-solid fa-arrow-right"></i
            ></a>
          </div> -->
        </div>
        <h1 class="h1-forms">Contact Me</h1>
        <div class="contact-section container">
          <section id="contact">
            <h3>Get in Touch</h3>
            <p>
              Do you want to get in touch?<br />
              Give me a call at...
            </p>
            <h4><a href="tel:07741328964">07741328964</a></h4>
            <p>Or send me an email at...</p>
            <h4>
              <a href="mailto:deanyosla@icloud.com">deanyosla@icloud.com</a>
            </h4>
          </section>
          <section id="contact-form">
            <form>
              <h2>Send me a message <i class="fa-solid fa-arrow-right"></i></h2>
              <div class="input-row">
                <input id="f-name" type="text" placeholder="First Name*" />

                <input id="l-name" type="text" placeholder="Last Name*" />
              </div>
              <div class="input-rowTwo">
                <input id="email" type="email" placeholder="Email Address*" />

                <input id="subject" type="text" placeholder="Subject..." />
                <textarea id="msg-field" placeholder="Message..."></textarea>
              </div>
              <div>
                <button class="btn-submit" type="submit">Submit</button>
              </div>
              <span id="f-name-error" class="error-message"></span>
              <span id="l-name-error" class="error-message"></span>
              <span id="email-error" class="error-message"></span>
              <span id="msg-field-error" class="error-message"></span>
            </form>
          </section>
        </div>
        <div class="scroll-up">
          <i class="fa-solid fa-chevron-up"></i><a href="#main">back to top</a>
        </div>
      </div>
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
