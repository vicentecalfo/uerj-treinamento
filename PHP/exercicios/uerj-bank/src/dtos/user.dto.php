<?php

function outputUserDTO($data)
{
    unset($data['password']);
    $data['fullName'] = $data['firstName'] ." ".$data["lastName"];
    return $data;
}
