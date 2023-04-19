<?php

function passwordGenerator($length) {
    $passwordlLetter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@?.$';
    $passwordRandom = '';
    for ($i = 0; $i < $length; $i++) {
        $passwordRandom .= $passwordlLetter[rand(0, strlen($passwordlLetter) - 1)];
    }
    return $passwordRandom;
}

?>