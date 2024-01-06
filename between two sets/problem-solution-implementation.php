<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here
    $count = 0;
    $a_count = count( $a );
    $a_product = array_product($a);
    $b_count = count( $b );
    $b_max = max($b);
    $a_max = max($a);
    $a_min = min($a);
    
    if ( $a_count > 1 && $a_max % $a_max == 0 && $a_max % $a_min == 0 ) {
        $count++;
    }
    
    $b_count_max = 0;
    $b_count_product = 0;
    for( $i = 0; $i < $b_count; $i++ ) {
        if( $b[$i] % $a_max != 0 ) {
            $b_count_max = 1;
        }
        if( $b[$i] % $a_product != 0 ) {
            $b_count_product = 1;
        }
    }
    if( $a_count > 1 && $b_count_max === 0) {
        $count++;
    }
    if( ( ($a_count === 1 && $a[0] !== 1) || $a_count > 1 ) && $b_count_product === 0) {
        $count++;
    }

    if($a_count === 1 && $a[0] === 1) {
        $nums = array();
        for( $i = 1; $i <= $b_max; $i++ ) {
            array_push( $nums, $i );
        }


        for( $j = 0; $j < count( $nums); $j++ ) {
            $b_count_product = 0;
            for( $i = 0; $i < $b_count; $i++ ) {
                if( $b[$i] % $nums[$j] != 0 ) {
                    $b_count_product = 1;
                }
            }
            if( $b_count_product === 0) {
                $count++;
            }
        }
    }

    return $count;
}

echo getTotalX([51], [50]);