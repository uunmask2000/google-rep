<?php

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
} else {
    $captcha = false;
}
echo '<pre>';
print_r($_POST);
if (!$captcha) {
    //Do something with error
} else {
    $secret = '6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV';
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    // use json_decode to extract json response
    $response = json_decode($response);

    print_r($response);

    if ($response->success === false) {
        //Do something with error
    }
}

//... The Captcha is valid you can continue with the rest of your code
//... Add code to filter access using $response . score
if ($response->success == true && $response->score <= 0.5) {
    //Do something to denied access
    echo '通过验证';
} else {
    echo '不通过验证';

}
