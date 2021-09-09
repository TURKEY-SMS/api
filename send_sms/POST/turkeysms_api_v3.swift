import Foundation

var semaphore = DispatchSemaphore (value: 0)

let parameters = "{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}"
let postData = parameters.data(using: .utf8)

var request = URLRequest(url: URL(string: "https://www.turkeysms.com.tr/api/v3/gonder/add-content")!,timeoutInterval: Double.infinity)
request.addValue("application/json", forHTTPHeaderField: "Content-Type")

request.httpMethod = "POST"
request.httpBody = postData

let task = URLSession.shared.dataTask(with: request) { data, response, error in 
  guard let data = data else {
    print(String(describing: error))
    return
  }
  print(String(data: data, encoding: .utf8)!)
  semaphore.signal()
}

task.resume()
semaphore.wait()