#import Foundation / Foundation.h>

dispatch_semaphore_t sema = dispatch_semaphore_create(0);

NSMutableURLRequest *request = [NSMutableURLRequest requestWithURL:[NSURL URLWithString:@"https://www.turkeysms.com.tr/api/v3/gonder/add-content"]
                                                       cachePolicy:NSURLRequestUseProtocolCachePolicy
                                                   timeoutInterval:10.0];
NSDictionary *headers = @{
    @"Content-Type" : @"application/json"
};

[request setAllHTTPHeaderFields:headers];
NSData *postData = [[NSData alloc] initWithData:[@"{\"api_key\":\"API_KEY_HERE\",\"title\":\"SMS_TITLE_HERE\",\"text\":\"TEXT_SMS\",\"sentto\":\"90500000000\"}" dataUsingEncoding:NSUTF8StringEncoding]];
[request setHTTPBody:postData];

[request setHTTPMethod:@"POST"];

NSURLSession *session = [NSURLSession sharedSession];
NSURLSessionDataTask *dataTask = [session dataTaskWithRequest:request
                                            completionHandler:^(NSData *data, NSURLResponse *response, NSError *error) {
                                              if (error)
                                              {
                                                  NSLog(@"%@", error);
                                              }
                                              else
                                              {
                                                  NSHTTPURLResponse *httpResponse = (NSHTTPURLResponse *)response;
                                                  NSError *parseError = nil;
                                                  NSDictionary *responseDictionary = [NSJSONSerialization JSONObjectWithData:data options:0 error:&parseError];
                                                  NSLog(@"%@", responseDictionary);
                                                  dispatch_semaphore_signal(sema);
                                              }
                                            }];
[dataTask resume];
dispatch_semaphore_wait(sema, DISPATCH_TIME_FOREVER);