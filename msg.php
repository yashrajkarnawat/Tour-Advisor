<?php
$mobile="8529499637";
$message="chimpu Wakanda";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8502070012&Password=way2sms&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=karnaP61hRwVeyk7AlW5U"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>
 