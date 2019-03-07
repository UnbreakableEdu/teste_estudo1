<?php

// Valores
print "Valor de a: ";
$a = (float) fgets (STDIN);

print "\nValor de b: ";
$b = (float) fgets (STDIN);

print "\nValor de c: ";
$c = (float) fgets (STDIN);

//Delta
$delta = ($b*$b)-((4*$a)*$c);
//Equação
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);

//Exibindo os valores

print "\nO valor de a: $a ";
print "\nO valor de b: $b ";
print "\nO valor de c: $c ";
print "\nO valor do delta: $delta";
print "\nO valor de x1: $x1";
print "\nO valor de x2: $x2";
