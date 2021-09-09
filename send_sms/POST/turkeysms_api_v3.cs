var client = new RestClient("https://www.turkeysms.com.tr/api/v3/gonder/add-content");
client.Timeout = -1;
var request = new RestRequest(Method.POST);
request.AddHeader("Content-Type", "application/json");
request.AddParameter("application/json", "{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}",  ParameterType.RequestBody);
IRestResponse response = client.Execute(request);
Console.WriteLine(response.Content);