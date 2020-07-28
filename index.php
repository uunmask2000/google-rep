<html>
  <head>
    <title>reCAPTCHA demo: Explicit render for multiple widgets</title>
    <script type="text/javascript">
      var verifyCallback = function(response) {
        alert(response);
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6Le4IbcZAAAAALzVIMD0Ufsjx6dXT39puBRhgPZf',
          'theme' : 'light'
        });
        widgetId2 = grecaptcha.render(document.getElementById('example2'), {
          'sitekey' : '6Le4IbcZAAAAALzVIMD0Ufsjx6dXT39puBRhgPZf'
        });
        grecaptcha.render('example3', {
          'sitekey' : '6Le4IbcZAAAAALzVIMD0Ufsjx6dXT39puBRhgPZf',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
      };
    </script>
<!-- ---------------------------- -->
    <script>
    function onSubmit(token) {
      alert('thanks ' + document.getElementById('field').value);
    }

    function validate(event) {
      event.preventDefault();
      if (!document.getElementById('field').value) {
        alert("You must add text to the required field");
      } else {
        grecaptcha.execute();
      }
    }

    function onload() {
      var element = document.getElementById('submit');
      element.onclick = validate;
    }
  </script>
  </head>
  <body>
    <!-- The g-recaptcha-response string displays in an alert message upon submit. -->
    <form action="javascript:alert(grecaptcha.getResponse(widgetId1));">
      <div id="example1"></div>
      <br>
      <input type="submit" value="getResponse">
    </form>
    <br>
    <!-- Resets reCAPTCHA widgetId2 upon submit. -->
    <form action="javascript:grecaptcha.reset(widgetId2);">
      <div id="example2"></div>
      <br>
      <input type="submit" value="reset">
    </form>
    <br>
    <!-- POSTs back to the page's URL upon submit with a g-recaptcha-response POST parameter. -->
    <form action="?" method="POST">
      <div id="example3"></div>
      <br>
      <input type="submit" value="Submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

<!-- ---------------------------- -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <form>
      Name: (required) <input id="field" name="field">
      <div id='recaptcha' class="g-recaptcha"
          data-sitekey="6LdwI7cZAAAAAC7Vjqy83zMisAZh-ELXKMj188Az"
          data-callback="onSubmit"
          data-size="invisible"></div>
      <button id='submit'>submit</button>
    </form>
    <script>onload();</script>



  </body>
</html>
