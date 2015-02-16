<?php
// https://www.codeeval.com/open_challenges/1/

function fizzbuzz( $position, $fizz, $buzz ) {
    if ( ($position % $fizz) == 0 && ($position % $buzz) == 0 ) {
        return "FB";
    } elseif ( ($position % $fizz) == 0  ) {
        return "F";
    } elseif ( ($position % $buzz) == 0 ) {
        return "B";
    } else {
        return $position;
    }
}

$fh = fopen( $argv[1], "r" );

while ( $test = fgets($fh) ) {
    if ( empty( $test ) ) break;
    
    $text = "";
    
    list($fizz, $buzz, $count) = explode( " ", trim( $test ) );

    for ( $i = 1; $i < $count; $i++ ) {

        $text .= fizzbuzz( $i, $fizz, $buzz );
        $text .= " ";
        
    }
    
    $text .= fizzbuzz( $count, $fizz, $buzz );
    
    echo $text.PHP_EOL;
    
}

?>
