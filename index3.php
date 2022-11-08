<?php
//PHP Loops Tutorial - Break & Continue Statements
/** Loops */
//Se utiliza para ejecutar una pieza de código un determinado número de veces//

//while
// si i es un numero par, entonces continua, como es numero par omitira
// y pasara a la siguiente
$i = 0;
while ($i <= 15):
    if ($i % 2 == 0){
        $i++;

        continue;
    }
  echo  $i++ . ',';
    endwhile;

 echo '<br>';

//do-while
//Garantiza que las declaraciones dentro del ciclo se ejecutaran al menos una vez//

$i =  25;
do {
    echo $i++;
} while ($i <= 15);
 echo '<br>';

 //
//for
$text = ['a', 'b', 'c', 'd' ];
$length = count($text);
for ($i =  0; $i < $length; $i++) {
    echo $text[$i] . '<br>';
}

//foreach
$user = [
    'name' => 'Flor',
    'email' => 'flor@email.com',
    'skills' => ['php', 'graphql', 'react'],
];

foreach($user as $key => $value) {
    echo $key . ':' ;
}
if (is_array($value)) {
    foreach ($value as $skill) {
        echo $skill . '-';
    }
} else {
    echo $value;
}
echo '<br>';