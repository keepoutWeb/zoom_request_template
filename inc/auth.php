<?php
// init configuration
$clientID = CLIENT_ID;
$clientSecret = CLIENT_SECRET;
$redirectUri = URI.'?a=auth';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $_SESSION['user_profile'] = [
      'email' => $google_account_info->email,
      'family_name' => $google_account_info->familyName,
      'given_name' => $google_account_info->givenName,
      'picture' => $google_account_info->picture,
  ];
  header ('location: ?a=dashboard');
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>