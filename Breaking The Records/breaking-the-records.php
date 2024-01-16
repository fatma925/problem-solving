<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores) {
    // Write your code here
    $min = $max = $scores[0];
    $n = count( $scores );
    $breaking_points = array(0,0);
    for( $i = 0; $i < $n; $i++ ) {
        // if( $i === 0 ) {
        //     $min = $max = $scores[$i];
        // }
        if( $scores[$i] > $max ) {
            $max = $scores[$i];
            $breaking_points[0]++;
        }elseif ( $scores[$i] < $min ) {
            $min = $scores[$i];
            $breaking_points[1]++;
        }
    }
    return $breaking_points;
}


// expected output => 2 4
print_r( breakingRecords(array(10, 5, 20, 20, 4, 5, 2, 25, 1)) );

// expected output => 4 0
print_r( breakingRecords(array(3, 4, 21, 36, 10, 28, 35, 5, 24, 42)) );

// expected output => 0 3
print_r( breakingRecords(array(100000, 9, 3, 10, 2, 20)) );