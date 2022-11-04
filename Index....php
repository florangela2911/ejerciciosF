<?php
//15 - PHP Operator Precedence & Associativity//
echo "<h1>HOLA!</h1>";

//se ejecuta primero por la multiplicacion//
$x = 5 + 3 * 5 ;
echo $x.
    "<br>";

//se ejecuta primero lo que esta dentro del parentecis//
$x = (5 + 3) * 5 ;
echo $x.
    "<br>";

//como division y multiplicacion tienen la misma precedencia,
//la asociatividad decide.
$x = 5;
$y = 2;
$z = 10;

 echo $result = $x / $y * $z.
     "<br>";

//se empieza de derecha a izquierda//
//&& requiere que ambas sean verdaderas.
$x = true;
$y = false;

var_dump ($x && ! $y).
"<br>";


$x = true;
$y = false;
$z = ($x and $y);

var_dump($z);