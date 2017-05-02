<?php

class ChangeString {

    function build($string){
        $array_string = str_split($string);

        foreach ($array_string as $value) {

            if (ctype_alpha($value)) {
                if (ord($value) == 90) { 
                    $value = 65; 
                } elseif (ord($value) == 122) {
                    $value = 97;
                } else {
                    $value = ord($value) + 1;
                }

                print_r(chr($value));

            } else {
                print_r($value);
            }

        }
    }
}

$obj = new ChangeString();
$obj->build("**Casa 52Z");