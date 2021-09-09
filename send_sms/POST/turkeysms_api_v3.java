Unirest.setTimeouts(0, 0);
HttpResponse response = Unirest.post("https://www.turkeysms.com.tr/api/v3/gonder/add-content")
.header("Content-Type", "application/json")
.body("{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}")
.asString();