<?php

// https://www.codeeval.com/open_challenges/156/

$fh = fopen( $argv[1], "r" );

while ( $test = fgets($fh) ) {
    if ( empty( $test ) ) break;
    
    $test = trim( $test );
    $text = "";
    
    $text .= strtoupper( $test{0} );
    $up = true;
    
    for ( $i = 1; $i < strlen($test) ; $i++ ) {

        $char = $test{$i};

        if ( preg_match('#[a-zA-Z]#', $char) ) {
            if ( $up ) {
                $text .= strtolower( $char );
                $up = false;
            } else {
                $text .= strtoupper( $char );
                $up = true;
            }
        } else {
            $text .= $char;
        }
        
    }
    
    echo $text.PHP_EOL;
    
}

?>
