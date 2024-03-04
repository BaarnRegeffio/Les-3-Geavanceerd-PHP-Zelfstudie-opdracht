<?php

// Voorbeeldvariabelen
$getal1 = 35;
$getal2 = 10;


//35 + 10 = 45
$Optellen = $getal1 + $getal2;
echo "Optellen: $getal1 + $getal2 = $Optellen<br>";

//35 - 10 = 25
$Aftrekken = $getal1 - $getal2;
echo "Aftrekken: $getal1 - $getal2 = $Aftrekken<br>";

// 35 * 10 = 350
$Vermenigvuldigen = $getal1 * $getal2;
echo "Vermenigvuldigen: $getal1 * $getal2 = $Vermenigvuldigen<br>";

// 35 / 10 = 3.5
$resultaatDelen = $getal1 / $getal2;
echo "Delen: $getal1 / $getal2 = $resultaatDelen<br>";

// 35 % 10 = 5
$Modulo = $getal1 % $getal2;
echo "Modulo (rest): $getal1 % $getal2 = $Modulo<br>";

// <,> & =
$voorwaarde = $getal1 > $getal2;

if ($voorwaarde) 
{
    echo "$getal1 is groter dan $getal2<br>";
} 
else 
{
    echo "$getal1 is niet groter dan $getal2<br>";
}






