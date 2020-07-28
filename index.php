<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
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
                document.getElementById('recaptcha').value = token;
            });
    });

    function myFunction() {
        document.getElementById("form_id").submit();
    }

    function check_google() {
        var recaptcha = document.getElementById("recaptcha").value;
        $.ajax({
            type: "POST",
            url: '/Api.php',
            data: {
                recaptcha: recaptcha
            }, // serializes the form's elements.
            success: function (data) {
                console.log(data);
            }
        });

    }
</script>


<form id="form_id" method="post" action="checkphp.php">
    <input type="text" readonly="readonly" id="recaptcha" name="recaptcha">
    <input type="text" readonly="readonly" name="action" value="validate_captcha">
    <input type="button" onclick="check_google()" value="check_google">
    <input type="button" onclick="myFunction()" value="send"> </form>