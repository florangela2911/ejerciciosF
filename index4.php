<?php
// Sentencia Switch
//se utiliza para comparar si la variable tiene varios valores diferentes//

$paymentStatuses = [1. 3, 0];
foreach ($paymentStatuses as $paymentStatus) {
switch($paymentStatus) {
    case 1:
        echo 'paid';
        break;

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

//vs if/else//