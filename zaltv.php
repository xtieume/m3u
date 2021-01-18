<?php
header('Content-Type: application/json');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://zaltv.com/api/activate/".$_GET['id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 0",
    "Host: zaltv.com",
    "Postman-Token: aaa4567f-e2aa-4b3b-9161-af2f7e5e7a08,6356133c-0fad-4a13-9607-b7681a10aba8",
    "cache-control: no-cache",
    "user-agent: ZalTV 1.1.5(16)"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
