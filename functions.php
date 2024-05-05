<?php

function generatePassword($lengthPassword) {
    
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    
    $newPassword = '';

    for ($i=0; $i < $lengthPassword; $i++) {        
        $newPassword .= $alphabet[rand(0, strlen($alphabet) - 1)];
    }
    return $newPassword;
}

?>