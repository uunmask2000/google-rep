<script src="https://www.google.com/recaptcha/api.js?render=6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV"></script>
<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>


<form id="form_id" method="post" action="your_action.php">
    <input type="text" readonly="readonly" id="g-recaptcha-response" name="g-recaptcha-response">
    <input type="text" readonly="readonly" name="action" value="validate_captcha">
     
</form>