<?php 

class ClearPar {
    function build($string) {

        $count = substr_count($string, '()');
        $string_done = '';

        for ($i=0; $i < $count ; $i++) { 
            $string_done .= "()";
        }

        print_r($string_done);

    }
}


$obj = new ClearPar();
$obj->build("((()");