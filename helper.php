<?php
function randomPasswordGen($length, $min, $max, $numb, $Symb, $duble){
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "~`!@#$%^&*()_-+={[}]|\:;<,>.?/";

    $passwordBits = '';

    if ($min) {

        $pwsChars .= $lowercase;
    }
    if ($max) {

        $pwsChars .= $uppercase;
    }
    if ($numb) {

        $pwsChars .= $numbers;
    }
    if ($Symb) {

        $pwsChars .= $symbols;
    }


    $password = '';
    while(strlen($password) < $length) {

        $newBits = substr($passwordBits, rand(0, strlen($passwordBits)), 1);

        // if (!(!$dupplicate && str_contains($pws, $newChar))) {
        if ($duble || !str_contains($pws, $newBits)) {

            $pws .= $newBits;
        }
    }

    return $password;
}





?>