<?php
echo "Van welk getal wil je de faculteit weten?"  . PHP_EOL;
$n = readline(">");

$f = 1;
for ($x=$n; $x>=1; $x--)
{
$f = $f * $x;
}
echo "Factuliteit van $n is $f";

