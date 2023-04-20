<?php

function passwordGenerator($length) {

    $result = '';
   
    $password = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@?.$()%#';
    $passwordRandom = '';

    if(empty($length)){
        $result = "Paramentro per password non valido";
    }elseif($length<8 || $length>32){
        $result = "Min 8 caratteri e max 32";
    }else{

        for ($i = 0; $i < $length; $i++) {
            $passwordRandom .= $password[rand(0, strlen($password) - 1)];
        }

        $result = $passwordRandom;
    }

    return $result;
}

?>