<?php

// https://www.codeeval.com/open_challenges/24/

$sum = 0;

$fh = fopen( $argv[1], "r" );

while ( $test = fgets($fh) ) {

    $test = trim( $test );
    if ( empty( $test ) ) continue;

    $sum += (int) $test;

}

echo $sum.PHP_EOL;

?>
