<?php

// $token = array("success"=>true, "payload"=>'payload');

// echo json_encode($token);

$token = array(
    "success" => true,
    "payload" => array(
        "userInfo" => array(
            "id" => 12,
            "name" => "Vicente Calfo"
        ),
        "roles" => array("view", "editor")
    )
);

echo json_encode($token);
