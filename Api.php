<?php
class Google_Recaptcha
{

    // V3
    const secret = '6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV';
    const api_host = 'https://www.google.com/recaptcha/api/siteverify';

    public function _construct()
    {

    }

    public function result($captcha = "")
    {

        $url = self::api_host;
        $secret = self::secret;

        $url .= "?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

        $response = file_get_contents($url);
        // // use json_decode to extract json response
        $response = json_decode($response);

        return $response;

    }
}

if (isset($_POST['recaptcha'])) {
    $captcha = $_POST['recaptcha'];
} else {
    $captcha = false;
}

$class = new Google_Recaptcha();
$response = $class->result($captcha);

if ($response->success == true && $response->score <= 0.5) {
    echo '1';
} else {
    echo '2';
}

return;
