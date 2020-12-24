<?php
// reads the variables sent via POST from AT gateway

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if($text == ""){
  
  $response = "What would you want to check \n";
  $response .= "1. My Account No \n";
  $response .= "2. Phone Number";
  
}
else if($text == "1"){
  $response = "Choose account information you want \n";
  $response .= "1. Account Number \n";
  $response .= "2. Account Balance";
  
}
else if($text == "2"){
  
  $response = "End - Your phone number is ".$phoneNumber;
}
else if($text == "1*1"){
  
  $accountNumber = "ACC1001";
  $response = "End - Your account is ".$accountNumber;
}
else if($text == "1*2"){
  
  $balance = "RWF 2,400";
  $response = "End - Your balance is ".$balance;
  
}

header("Content-type: text/plain");
echo $response;

?>