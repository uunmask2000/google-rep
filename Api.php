<?php
class Google_Recaptcha
{

    // V3
    const secret = '6LfrJLcZAAAAAJJ5a-YfsAg_arWfg0xcsBtQjlZV';
    const api_host = 'https://www.google.com/recaptcha/api/siteverify?s';

    public function _construct()
    {

    }

    public function result($captcha = "")
    {

        $url = self::api_host;
        $secret = self::secret;

        echo $url .= "?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

        $response = file_get_contents($url);
        // // use json_decode to extract json response
        $response = json_decode($response);

        return $response;

    }
}

echo '<pre>';
$captcha = '03AGdBq26gVGDA8X_xa-HegSHU3nlC7CUn3oB-SmaurfcbQuwlg7Tl8hzycQr0TgWDtmnyCo5_MAcZnZxvDDcO_khRJs6EbaVS_HZDXD2ufLpKFPrude6l7vVvcMeCzrQQNdGx3VB1veP6shaMoiwBjinKHyEG4_iUOWWyzdrHMptk63JBc6KvC7xeML5lSB0XNtrkk4zpeI9yCgpEWFE3AmrRXNfxCB88nRIvQNGdK_SQOKnMxOuVU--4Ot4Fm39b7evslgX53jJkydMRTFjRiAKluYEFDxES5Z8a5obeWtaogkVxEZHoCeeLZpVPp45zE1TCWXytCyr1-46ha84ir-AI8qBrTTpOUVmTu1ZGL7oEPgQl_YVoVSiNfQAP4bkP6uQgCbuuYND5_xQcB3eXPv3Ec8VOGshtwkciBVQFSwdimyTZws1cGek';

$class = new Google_Recaptcha();
$response = $class->result($captcha);
print_r($response);

// if (isset($_POST['g-recaptcha-response'])) {
//     $captcha = $_POST['g-recaptcha-response'];
// } else {
//     $captcha = false;
// }
// if (!$captcha) {
//     die('captcha error');
// } else {
//     $Google_recaptcha_v3 = new Google_Recaptcha($_POST);
//     $response = $Google_recaptcha_v3->get_Google_recaptcha_v3();
//     print_r($response);
//     if ($response->success === false) {
//         //Do something with error
//         die('response error');
//     }

//     if ($response->success == true && $response->score <= 0.5) {
//         //Do something to denied access
//         echo '通过验证';
//     } else {
//         echo '不通过验证';
//     }

// }
