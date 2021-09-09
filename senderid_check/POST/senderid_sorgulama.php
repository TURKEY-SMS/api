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

$response_type = "json";
// json
// php

$report = 1; 							
// Show operation report
// [1] To show the report
// [2] To hide the report
// If the value is blank, the report will be visible by default


$body = array("api_key" => $api_key,"report"=>$report,"response_type"=>$response_type);
$result = sendRequest('https://turkeysms.com.tr/api/v3/senderid_sorgulama/add-content', $body);
?>