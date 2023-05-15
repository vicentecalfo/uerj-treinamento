<?php

// $token = '{"success": true,"payload": "payload"}';

// var_dump(json_decode($token));

$token = '{
    "success": true,
    "payload": "payload"
  }';
  
  $tokenObj = json_decode($token);
  
  echo $tokenObj->success;
  echo PHP_EOL;
  echo $tokenObj->payload;
