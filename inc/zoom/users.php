<?php
use \Firebase\JWT\JWT;

$key = "g5u6LEAUFCKh8PBwbPKwOsaIpdOadprTa8bB";
$payload = array(
    "iss" => "UBSU0kilQKWXSgCFiHRz9w",
    "exp" => time()+36000, // expire in 10 hours
);

$jwt = JWT::encode($payload, $key, 'HS256'); // use the secret to sign the payload with a specific hashing algorithim

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.zoom.us/v2/users?status=active&page_size=30&page_number=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer {$jwt}",
    "content-type: application/json"
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