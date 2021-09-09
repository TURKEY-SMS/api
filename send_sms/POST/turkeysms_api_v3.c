CURL *curl;
CURLcode res;
curl = curl_easy_init();
if (curl)
{
    curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_easy_setopt(curl, CURLOPT_URL, "https://www.turkeysms.com.tr/api/v3/gonder/add-content");
    curl_easy_setopt(curl, CURLOPT_FOLLOWLOCATION, 1L);
    curl_easy_setopt(curl, CURLOPT_DEFAULT_PROTOCOL, "https");
    struct curl_slist *headers = NULL;
    headers = curl_slist_append(headers, "Content-Type: application/json");
    curl_easy_setopt(curl, CURLOPT_HTTPHEADER, headers);
    const char *data = "{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}";
    curl_easy_setopt(curl, CURLOPT_POSTFIELDS, data);
    res = curl_easy_perform(curl);
}
curl_easy_cleanup(curl);