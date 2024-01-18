<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    // Write your code here
    $n = count($s);
    $final = 0;
    for( $i = 0; $i < $n; $i++ ){
        $sum = 0;
        $counter = 0;
        for( $j = $i; $j < $n; $j++ ) {
            if ( $counter < $m ) {
                $sum += $s[$j];
                $counter++;
            } else{
                break;
            }
            
        }
        if( $sum == $d ) {
            $final++;
        }
    }
    return $final;

}

// echo birthday([1, 2, 1, 3, 2], 3, 2);
// echo birthday([4, 5, 4, 5, 1, 2, 1, 4, 3, 2, 4, 4, 3, 5, 2, 2, 5, 4, 3, 2, 3, 5, 2, 1, 5, 2, 3, 1, 2, 3, 3, 1, 2, 5], 18, 6);