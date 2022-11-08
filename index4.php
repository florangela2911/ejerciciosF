<?php
// Sentencia Switch
//se utiliza para comparar si la variable tiene varios valores diferentes//

$paymentStatuses = [1, 3, 0];
foreach ($paymentStatuses as $paymentStatus) {
switch($paymentStatus) {
    case 1:
        continue 2;
        echo 'paid';


    case 2:
    case 3:
        echo 'payment declined';
        break;

    case 0:
        echo 'pending payment';

    default:
        echo 'unknown payment status';
}
echo '<br>';
}

//vs if/else

function x() {
    sleep(3);

    echo 'Done <br>';
    return 1;
}
$x = x();
if ($x == 1) {
    echo 1;
} elseif ($x == 2) {
    echo 2;
} elseif ($x == 3) {
    echo 3;
} else {
    echo 4;
}
echo '<br>';

//Switch

switch (x()) {
    case 1:
    echo 1;
    break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
        default:
        echo 4;
}

