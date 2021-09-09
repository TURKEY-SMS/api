var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({"api_key":"API_KEY_HERE","title":"SMS_TITLE_HERE","text":"TEXT_SMS","sentto":"90500000000"});

var requestOptions = {
method: 'POST',
headers: myHeaders,
body: raw,
redirect: 'follow'
};

fetch("https://www.turkeysms.com.tr/api/v3/gonder/add-content", requestOptions)
.then(response => response.text())
.then(result => console.log(result))
.catch(error => console.log('error', error));