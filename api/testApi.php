<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$data = json_decode(file_get_contents("php://input"));

$recievedMsg = $data->message;

if($recievedMsg != null){
  $message->success = 'true';
  $message->message = 'Recieved Data';
  $message->payload = $recievedMsg;
} else {
  $message->success = 'false';
  $message->message = 'Did not receive any data';
}

echo json_encode($message);
?>