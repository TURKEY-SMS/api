# turkeysmsapi
# Requirements 🗒
-To be able to use the API service, you must have some conditions within your account, so that the connection with the messaging service is correct and without any problem
-These conditions are:

👉**Active account** :So that your account is active in the messaging service and your control panel is fully activated
👉**The balance**:	You must have a message balance in your account in order to be able to use API
👉**Sender ID** : Your account must have a fully verified Sender ID

----------------------------------------------------------------------------------------------------------------------------------
 # Sending SMS POST ✔️
URL addresses that you need to use to connect to SMS API are:
**URL Adresses** : https://www.turkeysms.com.tr/api/v3/gonder/add-content
# Parameter  ⁉️
 $title    = '';
 $api_key  = '';
 $text	  = '';
 $sentto	  = '';
 $report   = '';
 $sms_lang = '';
 $response_type = '';
# Parameter Description ⬇️
👉 $title	:varchar Write here your Sender ID as it is in your account.
👉 $api_key :varchar Your API key on your account will be placed here
👉 $text :text The message text
👉 $sentto :int	Recipient's mobile phone number
👉 $report :int	Option to display the details of the sending process if the value is 1, the report appears, or 0 for cancellation
👉 $sms_lang :int	This parameter describes the encoding of the message text. UTF-8 is set as default
👉 $response_type :	int	Response is sending JSON or Array



# Call Back Reports ✔️
🧪️
Array
(
    [result] => true
    [sms_id] => 1000007721
    [number_of_sms] => 1
    [result_code] => TS-1024
    [result_message] => The message was sent successfully
    [sms_lang] => Arabic
    [country] => Turkey-TR
)

# Call Back Description ⬇️

👉 result :	The result of the operation, if successful, appears true, and if the transmission fails, it appears false
👉 sms_id	: Message ID. Length of this parameter in each request may vary
👉 number_of_sms : Number of used credits
👉 result_code :	Status code, list of codes can be find in Response code
👉 result_message :	The message of the sent operation .. SMS appears to you in the event of success or failure
👉 sms_lang :	The content of the message you sent appears in any language
👉 country :	The name of the country to which the message was sent

# github : https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.php
----------------------------------------------------------------------------------------------------------------------------------

# Sending SMS GET  ✔️
-How to send a message through the API in GET format
-The variables sent through the link are - variables and options as I mentioned above
🖇🖇
https://turkeysms.com.tr/api/v3/get/get.php?api_key=API_KEY_HERE&mobile=MOBILE_HERE&title=TITLE_HERE&text=SMS_TEXT_HERE&report=1&lang=2&response_type=json

github : https://github.com/TURKEY-SMS/api/blob/main/send_sms/GET/turkeysms_api_get.php
----------------------------------------------------------------------------------------------------------------------------------

# Send options ⚙️

-Send options are intended to be characteristics of a message sent through an API
-Such as the language of the message content or the appearance of a report

# Operation report display options

👉 report$	
1⃣ If the value is for this variable 1 An operation report will appear

0⃣ If the value is for this variable 0 The report will not appear after performing the operation

# Message content language options

👉 sms_lang$
0⃣ If the value is for this variable 0 Message content will be in English

1⃣ If the value is for this variable 1 The content of the message in the Turkish language will support the Turkish characters

2⃣ If the value is for this variable 2 The content of the message will support the Arabic language or UTF-8 coding

# Call Back Response

👉 response_type$	
-If the value is for this variable 🖇JSON The response will be in json format

-If the value is for this variable 🖇PHP The response will be in php format

----------------------------------------------------------------------------------------------------------------------------------
# Response code ❕

-When sending via direct connection api, the server will send you a response to the process in the form of a code
-These codes explain to you the result of the operation that you have performed

# Response code  ⬇️
👉TS-1024 :	Message sent successfully
👉TS-1025	: The mobile number has not been entered. The phone number is empty
👉TS-1026	: Message text is empty .. No message text has been written
👉TS-1027	: There is insufficient balance in your account
👉TS-1028	: Sender ID is not active for your account
👉TS-1029	: The Sender ID does not exist .. Please make sure you type correctly
👉TS-1030	: Your account is inactive with the SMS service provider
👉TS-1031	: The api-key is invalid
👉TS-1032	: The number to which the message is sent is international outside Turkey. Your account is not activated for international SMS
👉TS-1033	: The data sent through the link is incorrect
👉TS-1034	: The mobile number to which the message was sent is invalid

----------------------------------------------------------------------------------------------------------------------------------
# Checking the validity of the code ✔️

-Verification of authorization code could be made by POST request to API with two parameters, recipient mobile phone number

https://turkeysms.com.tr/api/v3/sms-durumu/sms_durumu.php?api_key=API_KEY_HERE&sms_id=SMS_ID_HERE&response_type=php

-The variables are sent through the link like 
$api_key  = '';
$sms_id	  = '';
$response_type = '';

# Parameter Description ⬇️
👉 api_key$ : varchar	Your API key on your account will be placed here
👉 sms_id$  :int	 Message ID
👉 response_type$:	int	Response is sending JSON or PHP

# Call Back Reports

# Example Response 🧪️
Array
(
    [result] => true
    [sender_id] => SenderID
    [date_of_sending] => 2021-01-01
    [time_of_sending] => 13:10:00
    [sms_status] => Number received the message
    [sms_status_code] => TS-1024
    [sms_balance] => 1 SMS
    [operator] => Turkcell
)

# Parameter Description 🔎

👉 result:	The result of the operation, if successful, appears true, and if the transmission fails, it appears false
👉 sender_id:	Message ID. Length of this parameter in each request may vary
👉 date_of_sending:	The date the message was sent
👉 time_of_sending	:The time the message was sent
👉 sms_status:	Message Status - Delivered - Not delivered - Number out of coverage
👉 sms_status_code:	Status Code
👉 sms_balance:	Number of used credits
👉 operator:	The name of the company to which the number belongs
