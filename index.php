<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

//Solution-1

function isEven( $num )
{
    if ( $num % 2 == 0 ) {
        echo "{$num} is an Even Number";
    } else {
        echo "{$num} is an Odd Number";
    }
}

isEven( 35 );
echo PHP_EOL;

//Solution-2

function isEvenNumber( $num )
{
    if ( $num % 2 == 0 ) {
        return "{$num} is an Even Number";
    } else {
        return "{$num} is an Odd Number";
    }
}

echo isEvenNumber( 35 );
echo PHP_EOL;

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
for ( $i = 1; $i <= 100; $i++ ) {
    $sum += $i;
}
echo "The sum of the series is: $sum";
echo PHP_EOL;
