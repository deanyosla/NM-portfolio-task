<div id="code" class="code container">
          <div class="tab-1">
            <div class="code-snippet">
              <pre>
                  <code>
document.addEventListener(&quot;DOMContentLoaded&quot;, function () {
const form = document.querySelector(&quot;form&quot;);
const firstName = document.getElementById(&quot;f-name&quot;);
const lastName = document.getElementById(&quot;l-name&quot;);

                    
form.addEventListener(&quot;submit&quot;, function (event) {
event.preventDefault(); // Prevents the default form submission behavior

// Clears any previous error messages and removes error borders
      clearErrorMessages();

      let hasErrors = false;

if (firstName.value === &quot;&quot;) {
     displayErrorMessage(&quot;f-name-error&quot;, &quot;*First Name is required.&quot;);
     addErrorBorder(&quot;f-name&quot;);
     hasErrors = true;
     } else if (!/^[a-zA-Z]+$/.test(firstName.value)) {
        displayErrorMessage(&quot;f-name-error&quot;, &quot;*First Name can only contain letters.&quot;);
        addErrorBorder(&quot;f-name&quot;);
             hasErrors = true;
     }
                    
if (lastName.value === &quot;&quot;) {
     displayErrorMessage(&quot;l-name-error&quot;, &quot;*Last Name is required.&quot;);
     addErrorBorder(&quot;l-name&quot;);
     hasErrors = true;
     } else if (!/^[a-zA-Z]+$/.test(lastName.value)) {
       displayErrorMessage(&quot;l-name-error&quot;, &quot;*Last Name can only contain letters.&quot;);
       addErrorBorder(&quot;l-name&quot;);
            hasErrors = true;
      }
      if (hasErrors) {
        return;
    }

    form.reset();
    });
 });
                  </code>
              </pre>
            </div>
          </div>
          <div class="tab-2">
            <h2>Form Validation</h2>
            <p>
              I have created the following function using JavaScript. Which was
              used on the contact form to display error messages if a user were
              to enter a number or a symbol in both name input fields. <br />
              <br />
              <strong>IF</strong> function first looks if the name is strictly
              equal to an empty string, then it adds error message underneath
              the input fields and a red border to the input field. <br />
              <br />
              <strong>IF ELSE</strong> shows an error if anything other than
              letters are typed in.
            </p>
          </div>
          <div class="tab-3">
            <h2>Formatting of following code</h2>
            <p>
              To help me with the right formatting of the embedded code at the
              top I have used a JavaScript plugin, which helps with formatting
              to give it an effect as if it's written in code editing software.
              Otherwise I'd have to select every element and give each of those
              a class to change the colour and that would be time consuming.
            </p>
          </div>
        </div>