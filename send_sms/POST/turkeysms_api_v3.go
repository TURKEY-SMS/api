package main
import (
  "fmt"
  "strings"
  "net/http"
  "io/ioutil"
)
func main() {
  url := ""https://www.turkeysms.com.tr/api/v3/gonder/add-content"
  method := "POST"
  payload := strings.NewReader("{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}")
  client := &http.Client {
  }
  req, err := http.NewRequest(method, url, payload)

  if err != nil {
    fmt.Println(err)
  }
  req.Header.Add("Content-Type", "application/json")

  res, err := client.Do(req)
  defer res.Body.Close()
  body, err := ioutil.ReadAll(res.Body)

  fmt.Println(string(body))
}