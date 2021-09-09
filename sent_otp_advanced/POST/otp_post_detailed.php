<?php
function sendRequest($site, $data)
{
    $json = json_encode($data);
    $ch = curl_init($site);
    $header = array('Content-Type: application/json');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$api_key  = '';     						   						
$mobile   = '';     						   						    						   						
$title    = '';     						   						
$text     = 'TS_CODE TS-L Activation code to continue logging in to our service turkeysms.com.tr';     						   						
/*
TS_CODE == doğrulama kodu
TS-L == yeni satır
İçerik içerisinde kodu yazdırmak istediğiniz yere kod yerine aşağıdaki TS_CODE kelimesini ekliyoruz.
Sistem bu kelimeyi otomatik olarak doğrulama koduyla değiştirecektir.
Örnek: Hizmetimize hoş geldiniz Aktivasyon kodunuz TS_CODE

Aşağıdaki karakterleri ekleyerek kod ile istediğiniz metin arasına bir satır da ekleyebilirsiniz.
TS-L, eklenen metnin şöyle görünmesi için bir satırla değiştirilecektir.
*/


$digits   = "6"; 
// The number of code digits
// [4] The number of code digits will be 4
// [5] The number of code digits will be 5
// [6] The number of code digits will be 6
// If it is empty, the number of digits will be 4

$lang     = 1;
// The content of the message in what language it will be
// [0] for English
// [1] for Turkish
// [2] for Arabic
// If it is empty, the main content will be in Arabic


$response_type = "json";
// json
// php

$report = 1; 							
// Show operation report
// [1] To show the report
// [2] To hide the report
// If the value is blank, the report will be visible by default


$body = array("api_key" => $api_key,"sms_text"=>$text,"mobile"=>$mobile,"title"=>$title,"digits"=>$digits,"lang"=>$lang,"report"=>$report,"response_type"=>$response_type);
$result = sendRequest('https://turkeysms.com.tr/api/v3/otp_post_detailed/add-content', $body);
?>