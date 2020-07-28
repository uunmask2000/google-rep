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

// $captcha = '03AGdBq26gVGDA8X_xa-HegSHU3nlC7CUn3oB-SmaurfcbQuwlg7Tl8hzycQr0TgWDtmnyCo5_MAcZnZxvDDcO_khRJs6EbaVS_HZDXD2ufLpKFPrude6l7vVvcMeCzrQQNdGx3VB1veP6shaMoiwBjinKHyEG4_iUOWWyzdrHMptk63JBc6KvC7xeML5lSB0XNtrkk4zpeI9yCgpEWFE3AmrRXNfxCB88nRIvQNGdK_SQOKnMxOuVU--4Ot4Fm39b7evslgX53jJkydMRTFjRiAKluYEFDxES5Z8a5obeWtaogkVxEZHoCeeLZpVPp45zE1TCWXytCyr1-46ha84ir-AI8qBrTTpOUVmTu1ZGL7oEPgQl_YVoVSiNfQAP4bkP6uQgCbuuYND5_xQcB3eXPv3Ec8VOGshtwkciBVQFSwdimyTZws1cGek';
if (isset($_POST['recaptcha'])) {
    $captcha = $_POST['recaptcha'];
} else {
    $captcha = false;
}
var_dump($captcha);

$class = new Google_Recaptcha();
$response = $class->result($captcha);
$res = false;
var_dump($response);

if ($response->success === false) {
    $res = false;
} else if ($response->success == true && $response->score <= 0.5) {
    //Do something to denied access
    $res = true;
} else {
    $res = false;
}
var_dump($res);
return;
