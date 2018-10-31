<?php


//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '152030074735-jniu41c82oj8aga7jqaq940q6jih028k.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'nsXnJj__FI--HidB-QlGDUaf'; //Google client secret
$redirectURL = 'http://touradvisior.000webhostapp.com'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>