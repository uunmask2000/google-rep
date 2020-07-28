<script src="https://www.google.com/recaptcha/api.js?render=6LfrJLcZAAAAADXGDWfjsEO7HjnuabjT5eQzTVNs"></script>
<script>
    grecaptcha.ready(function () {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('6LfrJLcZAAAAADXGDWfjsEO7HjnuabjT5eQzTVNs', {
                action: 'validate_captcha'
            })
            .then(function (token) {
                // add token value to form
                document.getElementById('g-recaptcha-response').value = token;
            });
    });

    function myFunction() {
        document.getElementById("form_id").submit();
    }
</script>


<form id="form_id" method="post" action="checkphp.php">
    <input type="text" readonly="readonly" id="g-recaptcha-response" name="g-recaptcha-response">
    <input type="text" readonly="readonly" name="action" value="validate_captcha">
    <input type="button" onclick="myFunction()" value="send"> </form>