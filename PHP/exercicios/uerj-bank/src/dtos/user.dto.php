<?php

function outputUserDTO($data)
{
    unset($data['password']);
    $data['fullName'] = $data['firstName'] ." ".$data["lastName"];
    return $data;
}

function inputUserDTO($data){
    $data['password'] = md5($data['password']);
    return $data;
}