<?php

class CompleteRange {
    function build($colection){

        $total_colection = count($colection);
        $total_colection = $total_colection - 1;
        $hasta = $colection[$total_colection];

        $num_init = $colection[0];
        $array_done = array();

        foreach ($colection as $value) {
            if ($value < 0) {
                echo 'valor negativo';
                exit();
            }
        }

        do {
            array_push($array_done, $num_init);

            $num_init++;
        } while ($num_init <= $hasta);

        print_r($array_done);

    }
}

$obj = new CompleteRange();
$obj->build([2, 4, 9]);