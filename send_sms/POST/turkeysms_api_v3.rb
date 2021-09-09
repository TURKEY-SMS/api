require "uri"
require "net/http"

url = URI("https://www.turkeysms.com.tr/api/v3/gonder/add-content")

https = Net::HTTP.new(url.host, url.port);
https.use_ssl = true

request = Net::HTTP::Post.new(url)
request["Content-Type"] = "application/json"
request.body = "{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}"

response = https.request(request)
puts response.read_body