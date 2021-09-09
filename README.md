# TURKEY SMS API
----------------------------------------------------------------------------------------------------------------------------------
# Requirements 🗒
-To be able to use the API service, you must have some conditions within your account, so that the connection with the messaging service is correct and without any problem
-These conditions are:

👉**Active account** :So that your account is active in the messaging service and your control panel is fully activated </br>
👉**The balance**:	You must have a message balance in your account in order to be able to use API</br>
👉**Sender ID** : Your account must have a fully verified Sender ID</br>

----------------------------------------------------------------------------------------------------------------------------------
 # Sending SMS POST ✔️
URL addresses that you need to use to connect to SMS API are:
**URL Adresses** : www.turkeysms.com.tr/api/v3/gonder/add-content
# Parameter  ⁉️
 $title    = '';</br>
 $api_key  = '';</br>
 $text	  = '';</br>
 $sentto	  = '';</br>
 $report   = '';</br>
 $sms_lang = '';</br>
 $response_type = '';</br>
# Parameter Description ⬇️</br>
👉 $title	:varchar Write here your Sender ID as it is in your account.</br>
👉 $api_key :varchar Your API key on your account will be placed here</br>
👉 $text :text The message text</br>
👉 $sentto :int	Recipient's mobile phone number</br>
👉 $report :int	Option to display the details of the sending process if the value is 1, the report appears, or 0 for cancellation</br>
👉 $sms_lang :int	This parameter describes the encoding of the message text. UTF-8 is set as default</br>
👉 $response_type :	int	Response is sending JSON or Array</br>



# Call Back Reports ✔️</br>
🧪️</br>
Array</br>
(</br>
    [result] => true</br>
    [sms_id] => 1000007721</br>
    [number_of_sms] => 1</br>
    [result_code] => TS-1024</br>
    [result_message] => The message was sent successfully</br>
    [sms_lang] => Arabic</br>
    [country] => Turkey-TR</br>
)

# Call Back Description ⬇️</br>

👉 result :	The result of the operation, if successful, appears true, and if the transmission fails, it appears false</br>
👉 sms_id	: Message ID. Length of this parameter in each request may vary</br>
👉 number_of_sms : Number of used credits</br>
👉 result_code :	Status code, list of codes can be find in Response code</br>
👉 result_message :	The message of the sent operation .. SMS appears to you in the event of success or failure</br>
👉 sms_lang :	The content of the message you sent appears in any language</br>
👉 country :	The name of the country to which the message was sent</br>

 github PHP        :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.php</br>
 github JAVA       :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.java</br>
 github  JS        :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.js</br>
 github PYTHON     :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.py</br>
 github RUBY       :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.rb</br>
 github  C#        :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.cs</br>
 github C(LibCURL) :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.c</br>
 github NodeJS     :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.js</br>
 github ObjectiveC :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.h</br>
 github  GO        :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.go</br>
 github SWIFT      :  https://github.com/TURKEY-SMS/api/blob/main/send_sms/POST/turkeysms_api_v3.swift</br>
 
 
----------------------------------------------------------------------------------------------------------------------------------

# Sending SMS GET  ✔️</br>
-How to send a message through the API in GET format</br>
-The variables sent through the link are - variables and options as I mentioned above</br>
🖇🖇
turkeysms.com.tr/api/v3/get/get.php?api_key=API_KEY_HERE&mobile=MOBILE_HERE&title=TITLE_HERE&text=SMS_TEXT_HERE&report=1&lang=2&response_type=json</br>

github : https://github.com/TURKEY-SMS/api/blob/main/send_sms/GET/turkeysms_api_get.php</br>

----------------------------------------------------------------------------------------------------------------------------------

# Send options ⚙️</br>

-Send options are intended to be characteristics of a message sent through an API</br>
-Such as the language of the message content or the appearance of a report</br>

# Operation report display options</br>
</br>
👉 report$	</br>
-If the value is for this variable 1 An operation report will appear</br>
 
-If the value is for this variable 0 The report will not appear after performing the operation</br>

# Message content language options</br>

👉 sms_lang$</br>
-If the value is for this variable 0 Message content will be in English</br>

-If the value is for this variable 1 The content of the message in the Turkish language will support the Turkish characters</br>

-If the value is for this variable 2 The content of the message will support the Arabic language or UTF-8 coding</br></br>

# Call Back Response</br>

👉 response_type$	</br>
-If the value is for this variable 🖇JSON The response will be in json format</br>

-If the value is for this variable 🖇PHP The response will be in php format</br>

----------------------------------------------------------------------------------------------------------------------------------
# Response code ❕</br>

-When sending via direct connection api, the server will send you a response to the process in the form of a code</br>
-These codes explain to you the result of the operation that you have performed</br>

# Response code  ⬇️</br>
👉TS-1024 :	Message sent successfully</br>
👉TS-1025	: The mobile number has not been entered. The phone number is empty</br>
👉TS-1026	: Message text is empty .. No message text has been written</br>
👉TS-1027	: There is insufficient balance in your account</br>
👉TS-1028	: Sender ID is not active for your account</br>
👉TS-1029	: The Sender ID does not exist .. Please make sure you type correctly</br>
👉TS-1030	: Your account is inactive with the SMS service provider</br>
👉TS-1031	: The api-key is invalid</br>
👉TS-1032	: The number to which the message is sent is international outside Turkey. Your account is not activated for international SMS</br>
👉TS-1033	: The data sent through the link is incorrect
👉TS-1034	: The mobile number to which the message was sent is invalid</br>

----------------------------------------------------------------------------------------------------------------------------------
# Checking the validity of the code ✔️</br>

-Verification of authorization code could be made by POST request to API with two parameters, recipient mobile phone number</br>

turkeysms.com.tr/api/v3/sms-durumu/sms_durumu.php?api_key=API_KEY_HERE&sms_id=SMS_ID_HERE&response_type=php</br>

-The variables are sent through the link like </br>
$api_key  = '';</br>
$sms_id	  = '';</br>
$response_type = '';</br>

# Parameter Description ⬇️</br>
👉 api_key$ : varchar	Your API key on your account will be placed here</br>
👉 sms_id$  :int	 Message ID</br>
👉 response_type$:	int	Response is sending JSON or PHP</br>

# Call Back Reports</br>

# Example Response 🧪️</br>
Array</br>
(</br>
    [result] => true</br>
    [sender_id] => SenderID</br>
    [date_of_sending] => 2021-01-01</br>
    [time_of_sending] => 13:10:00</br>
    [sms_status] => Number received the message</br>
    [sms_status_code] => TS-1024</br>
    [sms_balance] => 1 SMS</br>
    [operator] => Turkcell</br>
)

# Parameter Description 🔎</br>

👉 result:	The result of the operation, if successful, appears true, and if the transmission fails, it appears false</br>
👉 sender_id:	Message ID. Length of this parameter in each request may vary</br>
👉 date_of_sending:	The date the message was sent</br>
👉 time_of_sending	:The time the message was sent</br>
👉 sms_status:	Message Status - Delivered - Not delivered - Number out of coverage</br>
👉 sms_status_code:	Status Code</br>
👉 sms_balance:	Number of used credits</br>
👉 operator:	The name of the company to which the number belongs</br>
