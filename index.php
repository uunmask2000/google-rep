<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://www.google.com/recaptcha/api.js"></script>
     <script src="https://www.google.com/recaptcha/api.js?render=6Le9H7cZAAAAAMsQkeG_pnJxtlBhv9hlEzsUjB13"></script>
     <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
  <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Le9H7cZAAAAAMsQkeG_pnJxtlBhv9hlEzsUjB13', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
</head>
<body>
    <button class="g-recaptcha"
        data-sitekey="6Le9H7cZAAAAAMsQkeG_pnJxtlBhv9hlEzsUjB13"
        data-callback='onSubmit'
        data-action='submit'>Submit</button>
</body>
</html>
