<?php
class Google_recaptcha_v3
{
    private $captcha;
    const secret = '6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV';
    const api_host = 'https: //www.google.com/recaptcha/api/siteverify?s';

    public function _construct($params)
    {
        $this->captcha = $params['g-recaptcha-response'];
    }

    public function get_Google_recaptcha_v3()
    {

        $url = self::api_host;
        $secret = self::secret;

        $url .= "?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

        $response = file_get_contents($url);
        // use json_decode to extract json response
        $response = json_decode($response);

        return $response;

    }
}

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
} else {
    $captcha = false;
}
if (!$captcha) {
    die('captcha error');
} else {
    $Google_recaptcha_v3 = new Google_Recaptcha($_POST);
    $response = $Google_recaptcha_v3->get_Google_recaptcha_v3();
    print_r($response);
    if ($response->success === false) {
        //Do something with error
        die('response error');
    }

    if ($response->success == true && $response->score <= 0.5) {
        //Do something to denied access
        echo '通过验证';
    } else {
        echo '不通过验证';
    }

}
