<?php
//PHP Match Expression - Match vs Switch
$paymentStatus = false;

switch ($paymentStatus) {
    case 1:
        echo 'paid' ;
        break;

        case 2:
    case 3:
        echo 'Payment Declined';
        break;

    case 0:
        echo 'Pending payment';
        break;

    default:
        echo 'Unknown payment Status';
}

echo '<br>';

$paymentStatusDisplay = match($paymentStatus) {
    1 > 2 => 'paid',
    2,3 => 'payment Declined',
    0 => 'pending payment',
    default => 'unknown payment Status',
};
echo $paymentStatusDisplay;