<div id="code" class="code container">
          <div class="tab-1">
            <div class="code-snippet">
            <h2>Form Validation</h2>
              <pre>
                  <code>
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
    const formField = input.parentElement;
    
    formField.classList.remove("success");
    formField.classList.add("error");
}

const showSuccess = (input) => {
    const formField = input.parentElement;

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
                  </code>
              </pre>
            </div>
          </div>

          <div class="tab-2">
            <h2>Code Explanation <i class="fa-solid fa-arrow-up"></i></h2>
            <p>
             <strong>JavaScript</strong> code block provides client-side form validation.<br>
            It defines functions to validate input fields for <strong>first name</strong>, <strong>last name</strong>, <strong>email</strong>, <strong>subject</strong>, and <strong>message</strong>.<br>
           <br>Regular expressions are used to validate email format and input patterns. The script listens for input events on form fields and triggers appropriate validation functions. Error and success classes are added dynamically to form elements based on validation results.<br>
              <br>Additionally, there's a button click event listener to remove alert messages when the close button is clicked.
            </p>
          </div>
          <div class="tab-3">
            <h2>Formatting of code examples</h2>
            <p>
              To help me with the right formatting of the embedded code at the
              top I have used a <strong>Highlight.js</strong> plugin, which helps with formatting
              to give it an effect as if it's written in code editing software.
              As I believe it looks much nicer to the eyes. 
            </p>
          </div>

          <!-- Second code snippet card -->
          <div class="tab-1">
            <div class="code-snippet">
              <h2>Database Connection</h2>
              <pre>
                  <code>
try {
    $env = parse_ini_file('.env');
    $host = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $username = $env["DB_USER"];
    $password = $env["DB_PASSWORD"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
          //echo "Connected to $dbname at $host successfully.";
    } 
    catch (PDOException $e) {
        die ("Could not connect to the database $dbname, $host, :" . $e->getMessage());
    }
}
catch (PDOException $e) {
    $_SESSION['errMsg'] = "Database details are not correct";
    
}
                  </code>
              </pre>
            </div>
          </div>
          <div class="tab-2">
            <h2>Code explanation <i class="fa-solid fa-arrow-up"></i></h2>
            <p>
             This PHP code block establishes a connection to a database using <strong>PDO (PHP Data Objects)</strong>.<br>
             <br>It reads database connection details from a .env file, such as host, database name, username, and password.<br>
             <br>If the connection fails, it catches the PDOException and sets an error message in the session variable <strong>$_SESSION['errMsg']</strong>.
            </p>
          </div>
          <div class="tab-3">
            
            <p>
             PHP code below defines a <strong>function postData()</strong> to insert contact form data into the database.<br>
            <br>It includes the <strong>dbConn.php</strong> file, which contains the database connection code from the first block.<br>
            Inside the function, it prepares an SQL statement to insert data into the contact table. It binds parameters and executes the statement.<br>
            <br>If an exception occurs during execution, it echoes an error message.
            </p>
            <h2>Code explanation <i class="fa-solid fa-arrow-down"></i></h2>
          </div>
            <div class="tab-1">
              <div class="code-snippet">
                <h2>Contact Form Database</h2>
                <pre>
                  <code>
function postData($firstName, $lastName, $email, $subject, $message)
{
    include("dbConn.php");

    try {
        $sql = $conn->prepare('
            INSERT INTO contact (first_name, last_name, email, subject, message)
            VALUES (:first_name, :last_name, :email, :subject, :message);
        ');

        $sql->bindValue(":first_name", $firstName, PDO::PARAM_STR);
        $sql->bindValue(":last_name", $lastName, PDO::PARAM_STR);
        $sql->bindValue(":email", $email, PDO::PARAM_STR);
        $sql->bindValue(":subject", $subject, PDO::PARAM_STR);
        $sql->bindValue(":message", $message, PDO::PARAM_STR);

        $sql->execute();
        return true;
    } catch (PDOException $e) {
        echo 'Unable to send data ' . $e->getMessage();
        exit;
    }
}
                  </code>
                </pre>
              </div>
            </div>
            <div class="tab-1">
              <div class="code-snippet">
                <h2>Session Initialisation</h2>
                <pre>
                  <code>
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
                  </code>
                </pre>
              </div>
            </div>
            <div class="tab-2">
            <h2>Code explanation <i class="fa-solid fa-arrow-up"></i></h2>
            <p>
            This <strong>PHP session code</strong> initializes session variables for storing success status and error messages related to a contact form.<br>
            <br>It <strong>sanitizes</strong> and <strong>validates</strong> input data received from the form fields, ensuring they meet specified criteria such as non-emptiness and correct format.</br>
            <br>Depending on the validation results, it either submits the form data to a database and sets success status, or sets error messages and redirects back to the contact form for user feedback.
            </p>
          </div>
          <div class="tab-3"> 
            <h2>Form Submission Handling</h2>
            <p>
    If all form fields pass validation, the data is submitted to the database using the <strong>postData()</strong> function.<br>
    Success status and error message session variables are reset, and a success flag is set.<br>

    <br>If any field fails validation, the code sets appropriate error messages, resets the success flag, and redirects back to the contact form with the error messages displayed.<br>
    The session variables <strong>$_SESSION['form_sent']</strong>, <strong>$_SESSION['success']</strong>, and <strong>$_SESSION['errorMessage']</strong> are set accordingly to control the display of success or error messages on the form.
            </p>
          </div>
</div>