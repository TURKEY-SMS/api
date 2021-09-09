var unirest = require('unirest');
var req = unirest('POST', 'https://www.turkeysms.com.tr/api/v3/gonder/add-content')
  .headers({
    'Content-Type': 'application/json'
  })
  .send(JSON.stringify({"api_key":"API_KEY_HERE","title":"SMS_TITLE_HERE","text":"TEXT_SMS","sentto":"90500000000"}))
  .end(function (res) { 
    if (res.error) throw new Error(res.error); 
    console.log(res.raw_body);
  });