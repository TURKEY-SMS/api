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
$title    = '';      						
$text	  = '';   							
$sentto	  = '5050300074,5301008074,5301014074'; 							
$sms_lang = 0; 							
$report = 1; 
$response_type ='json';							
$body = array("api_key" => $api_key, "title"=>$title, "text"=>$text,"sentto"=>$sentto,"sms_lang"=>$sms_lang,"report"=>$report,"response_type"=>$response_type);
$result = sendRequest('https://turkeysms.com.tr/api/v3/gonder_coklu_gsm/add-content', $body);
?>