<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
  </head>
  <body>
    <form id='demo-form' action="?" method="POST">
      <button class="g-recaptcha" data-sitekey="6LehIbcZAAAAAJme43XgwXLscKcZGK5ORn0HTS0e" data-callback='onSubmit'>Submit</button>
      <br/>
    </form>
  </body>
</html>